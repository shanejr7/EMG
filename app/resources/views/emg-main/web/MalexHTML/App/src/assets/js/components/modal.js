//=================================================
// Modal
//=================================================

( function( $ ) {
    'use strict';

    // Multi modal
    $( '.modal' ).on( 'show.bs.modal', function( e ) {
        $( this ).addClass( 'in' );
    } );

    $( '.modal' ).on( 'hidden.bs.modal', function( e ) {
        $( this ).removeClass( 'in' );

        if ( $( '.modal' ).hasClass( 'in show' ) ) {
            $( 'body' ).addClass( 'modal-open' );
        }
    } );

    // Hide modal if menu primary link have ID
    $( '.modal .menu-primary ul li a[href*="#"]' ).on( 'click', function( ev ) {
        ev.preventDefault();

        var $button = $( ev.target );

        $( this ).closest( '.modal' ).on( 'hidden.bs.modal', function( e ) {
            var $href            = $button.attr( 'href' );
            window.location.href = $href;
        } );

        $( '#menu-modal' ).modal( 'hide' );
    } );
} )( jQuery );
