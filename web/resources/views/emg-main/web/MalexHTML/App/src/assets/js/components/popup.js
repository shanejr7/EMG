//=================================================
// Pop-up
//=================================================

( function( $ ) {
    'use strict';

    // Swipebox
        $( '.swipebox' ).swipebox( {
            selector: '.swipebox',
            removeBarsOnMobile: false,
            afterOpen: function() {
                var $selectorClose = $( '#swipebox-close' );
                var clickAction    = 'touchend click';

                $selectorClose.unbind( clickAction );

                $selectorClose.bind( clickAction, function( event ) {
                    event.preventDefault();
                    event.stopPropagation();

                    $.swipebox.close();
                } );

                document.body.style.overflow = 'hidden';
            },
            afterClose: function() {
                document.body.style.overflow = '';
            }
        } );
} )( jQuery );
