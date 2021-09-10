//=================================================
// Input
//=================================================

( function( $ ) {
    'use strict';

    // A little plugin which makes Bootstrap 4 custom file input dynamic with no dependencies.
    $( document ).ready( function() {
        bsCustomFileInput.init()
    } );

    // Input with Label Effects
    $( '.form-label-effect [class*="form-label-effect"]' ).focusout( function() {
        if ( $( this ).val() != '' ) {
            $( this ).addClass( 'has-content' );
        } else {
            $( this ).removeClass( 'has-content' );
        }
    } );

    jQuery( document ).ajaxComplete( function() {
        if ( jQuery( '[class*="-form"]' ).hasClass( 'sent' ) ) {
            $( '.form-label-effect [class*="form-label-effect"]' ).removeClass( 'has-content' );
        }
    } );
} )( jQuery );
