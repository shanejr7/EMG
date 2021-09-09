//=================================================
// Main
//=================================================

( function( $ ) {
    'use strict';

    if ( $( '.main-pb-0' ).length ) {
        $( '.site-main' ).addClass( 'pb-0' );
    }

    if ( $( '[class*="bg-"][class*="-full-width"]' ).length ) {
        $( 'body' ).addClass( 'overflow-x' );
    }
} )( jQuery );
