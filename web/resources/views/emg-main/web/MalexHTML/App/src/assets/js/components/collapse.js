//=================================================
// Collapse
//
// Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
//=================================================

( function( $ ) {
    'use strict';

    $( '.collapse' ).on( 'show.bs.collapse', function() {
        $( this ).parent().addClass( 'active' );
    } );

    $( '.collapse' ).on( 'hidden.bs.collapse', function() {
        $( this ).parent().removeClass( 'active' );
    } );
} )( jQuery );
