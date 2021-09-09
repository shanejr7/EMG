//=================================================
// Card masonry
//=================================================

( function( $ ) {
    'use strict';

    if ( $( '#blog #results .no-thumbnail' ).length ) {
        $( '#blog #results' ).masonry( {
            itemSelector: '[class*=col-]',
            percentPosition: true,
            horizontalOrder: false,
            transitionDuration: 0
        } );

        $( document ).ajaxComplete( function() {
            var scrollTop = document.documentElement.scrollTop;

            $( '#blog #results' ).masonry( 'reloadItems' );
            $( '#blog #results' ).masonry( 'layout' );

            $( 'html' ).css( 'scroll-behavior', 'unset' );
            window.scrollTo( 0, scrollTop );
            $( 'html' ).css( 'scroll-behavior', 'smooth' );
        } );
    }
} )( jQuery );
