//=================================================
// Plans
//=================================================

( function( $ ) {
    'use strict';

    // Varying plans modal content
    $( '#plans-modal' ).on( 'show.bs.modal', function( event ) {
        var button    = $( event.relatedTarget );
        var recipient = button.data( 'whatever' );
        var modal = $( this );

        modal.find( '.plans-modal-content .modal-t-head .modal-title-result' ).text( recipient )
    } );
} )( jQuery );
