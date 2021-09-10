//=================================================
// Form
// 
// Ajax calls for comment and contact forms.
//=================================================

( function( $ ) {
    'use strict';
    
    // Contact form
    var form           = $( '.contact-form, #commentform' ),
        successMessage = "Sender's message was sent successfully", // Success message
        warningMessage = "Fill up the form, please!", // Warning message
        errorMessage   = "Something go wrong. Try again later!";  // Error message

    form.on( 'submit', function( event ) {
        event.preventDefault();

        $.ajax( {
            url: 'form.php',
            type: 'POST',
            data: form.serialize(),
            success: function( response ) {
                var data = JSON.parse( response ),
                    message;

                if ( data.status == 'success' ) {
                    message = successMessage;
                }

                if ( data.status == 'warning' ) {
                    message = warningMessage;
                }

                if ( data.status == 'error' ) {
                    message = errorMessage;
                }

                callAlert( message, data.status );
            },
            error: function( response ) {
                callAlert( errorMessage, "error" );
            }
        } );
    } );

    // Show alert
    var alertTimeout,
        delay = 5000;

    function removeAlert() {
        clearTimeout( alertTimeout );

        alertTimeout = setTimeout( function() {
            $( '.alert' ).stop().fadeOut( function() {
                $( this ).remove();
            } );
        }, delay );
    }

    function callAlert( message, type ) {
        $( '.alert' ).stop().remove();

        var alertClass;

        if ( type == 'success' ) {
            alertClass = 'success';
        }

        if ( type == 'error' ) {
            alertClass = 'danger';
        }

        if ( type == 'warning' ) {
            alertClass = 'warning';
        }

        var alert = '<div class="animated fadeIn alert alert--shadow alert-' + alertClass + '">' + message + '</div>';

        $( form ).append( alert );

        removeAlert();
    }

    $( function() {
        $( 'body' ).on( 'click', '.alert__button', function( event ) {
            event.preventDefault();

            var $this = $( this ),
                alert = $this.parents( '.alert' );

            alert.fadeOut( 'fast', function() {
                $( this ).remove();
                clearTimeout( alertTimeout );
            } );
        } );
    } );
} )( jQuery );
