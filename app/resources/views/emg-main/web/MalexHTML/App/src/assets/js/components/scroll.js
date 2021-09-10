//=================================================
// Scroll
//=================================================

( function( $ ) {
    'use strict';

    var animateS = 900;

    if ( is_firefox || is_chrome || is_opera ) {
        var animateS = 0;
    }

    if ( $( 'html' ).hasClass( '' + 'elementor-adv' ) ) {
        animateS = 900;
    }

    // Debounce function used for button-clicked-true class removal after last scroll or resize event triggered
    function debounce( func, wait, immediate ) {
        var timeout;

        return function() {
            var context = this,
                args    = arguments;

            var later = function() {
                timeout = null;
                if ( ! immediate ) func.apply( context, args );
            };

            var callNow = immediate && ! timeout;

            clearTimeout( timeout );
            timeout = setTimeout( later, wait );

            if ( callNow ) func.apply( context, args );
        };
    };

    // Accessing a specific section of the page by clicking a link
    // Used class: .scroll-to-id
    var scrollToID = function() {
        if ( $( '.scroll-to-id' ).length ) {
            $( '.scroll-to-id' ).click( function( event ) {
                if ( this.hash !== '' ) {
                    event.preventDefault();

                    var hash = this.hash;
                    var scrollToTop;

                    scrollToTop = $( hash ).offset().top;

                    if ( typeof scrollToTop === 'undefined' ) {
                        scrollToTop = 0;
                    }

                    $( 'html, body' ).stop().animate( {
                        scrollTop: scrollToTop
                    }, animateS, function() {
                        // window.location.hash = hash;
                    } );
                } else {
                    var scrollToTop = 0;

                    $( 'html, body' ).stop().animate( {
                        scrollTop: scrollToTop
                    }, animateS, function() {
                        // window.location.hash = hash;
                    } );
                }
            } );
        }
    }

    // When scrolling page adds 'active' class on menu items and fixes menu to the top
    var headerFixed = function() {
        var headerFixedTrue = 'header-fixed-true';
        var fromTop         = -1;

        if ( $( '.service-items' ).length ) {
            var fromTop = 67;
        }

        var fromHTML;

        if ( $( 'body.elementor-page' ).length ) {
            var fromHTML = '#main > .content > .clearfix [class*="-section-wrap"] > *:nth-child(2)';
        } else {
            var fromHTML = '#main > .content > .clearfix > *:nth-child(2)';
        }

        if ( $( 'body' ).hasClass( headerFixedTrue ) ) {
            if ( $( '#header' ).length ) {
                if ( $( fromHTML ).length ) {
                    $( window ).scroll( function() {
                        if ( ( $( window ).scrollTop() - $( fromHTML ).offset().top ) > fromTop ) {
                            $( '#header' ).addClass( 'animated slideInDown' );
                            $( '.header-fixed-true' ).addClass( 'header-fixed' );
                        } else {
                            $( '#header' ).removeClass( 'animated slideInDown' );
                            $( '.header-fixed-true' ).removeClass( 'header-fixed' );
                        }
                    } );
                }
            }
        }
    }

    // Header & Modal menu links scroll
    var menuScroll = function() {
        // Modal menu links scroll
        $( '#menu-modal .menu-primary .nav-item a[href*="#"]' ).on( 'click', function( e ) {
            e.preventDefault();

            var hash = this.hash;
            var scrollToTop;

            scrollToTop = $( hash ).offset().top;

            if ( typeof scrollToTop === 'undefined' ) {
                scrollToTop = 0;
            }

            if ( animateS != '0' ) {
                $( 'html, body' ).stop().animate( {
                    scrollTop: scrollToTop
                }, animateS, function() {
                    window.location.hash = hash;
                } );
            }
        } );

        // Header menu links scroll
        var lastId,
            topMenu       = $( '#header .menu-primary .nav' ),
            topMenuHeight = topMenu.outerHeight() + 15,
            menuItems     = topMenu.find( 'a' ),
            scrollItems   = menuItems.map( function() {
                var href_selector = $( this ).attr( 'href' );

                if ( href_selector.indexOf( '#' ) != -1 && href_selector.indexOf( '#' ) == 0 ) {
                    var item = $( $( this ).attr( 'href' ) );

                    if ( item.length ) {
                        return item;
                    }
                }
            } );

        menuItems.click( function( e ) {
            var href = $( this ).attr( 'href' );

            if ( href.indexOf( '#' ) != -1 && href.indexOf( '#' ) == 0 ) {
                var offsetTop = href === '#' ? 0 : $( href ).offset().top;

                e.preventDefault();

                $( 'html, body' ).stop().animate( {
                    scrollTop: offsetTop
                }, animateS );

                $( '#header .menu-primary .nav-item a[href*="#"]' ).parent().removeClass( 'active' );
                $( this ).parent().addClass( 'active' );
                $( 'body' ).addClass( 'button-clicked-true' );
            }
        } );

        window.scroll( {
            behavior: 'smooth'
        } );

        $( window ).scroll( function( e ) {
            var viewportWidth = $( window ).width();

            if ( $( 'body' ).hasClass( 'header-fixed-true' ) && viewportWidth > media_md ) {
                var fromTop = $( this ).scrollTop() + topMenuHeight;

                var cur = scrollItems.map( function() {
                    if ( $( this ).offset().top < fromTop )
                        return this;
                } );

                cur    = cur[cur.length - 1];
                var id = cur && cur.length ? cur[0].id : "";

                if ( lastId !== id ) {
                    lastId = id;

                    if ( id != '' ) {
                        location.hash = '#!' + id;
                    } else {
                        history.replaceState( null, null, ' ' );
                    }

                    if ( ! $( 'body' ).hasClass( 'button-clicked-true' ) ) {
                        menuItems.parent().removeClass( 'active' ).end().filter( "[href='#" + id + "']" ).parent().addClass( 'active' );
                    }
                }
            }
        } );

        var removeHeaderButtonClass = debounce( function() {
            $( 'body' ).removeClass( 'button-clicked-true' )
        }, 250 );

        $( window ).on( 'scroll resize', removeHeaderButtonClass );

        // Function when link with # scroll to link
        $( document ).ready( function() {
            if ( typeof window.location.href.split( '#!' )[1] !== 'undefined' ) {
                var id = '#' + window.location.href.split( '#!' )[1];

                if ( id !== '' ) {
                    $( 'html, body' ).stop().animate( {
                        scrollTop: $( id ).offset().top
                    }, animateS, function() {
                        window.location.hash = id;
                    } );
                }
            }
        } );

        $( window ).on( 'load', function() {
            if ( ! $( 'html' ).hasClass( 'elementor-adv' ) ) {
                setTimeout( function() {
                    var doc     = $( document ),
                        $events = $( 'a[href*="#"]' ).length ? $._data( doc[0], 'events' ) : null;

                    if ( $events ) {
                        for ( var i = $events.click.length - 1; i >= 0; i-- ) {
                            var handler = $events.click[i];

                            if ( handler && handler.selector === 'a[href*="#"]' ) doc.off( 'click', handler.handler );
                        }
                    }
                }, 300 );
            }
        } );
    }

    $( function() {
        scrollToID();
        headerFixed();
        menuScroll();
    } );
} )( jQuery );
