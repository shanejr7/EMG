<?php
$response           = array();
$response['status'] = 'warning';

// Contact form 1 ( Contacts section )
if ( ( isset( $_POST['cf-1-name'] ) && $_POST['cf-1-name'] != "" ) && ( isset( $_POST['cf-1-email'] ) && $_POST['cf-1-email'] != "" ) && ( isset( $_POST['cf-1-message'] ) && $_POST['cf-1-message'] != "" ) ) {
    $to      = 'your@email.com'; // Your email
    $subject = 'Contact form';   // E-mail subject
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>Name: ' . $_POST['cf-1-name'] . '</p>
                    <p>Email: ' . $_POST['cf-1-email'] . '</p>
                    <p>Message: ' . $_POST['cf-1-message'] . '</p>
                </body>
            </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";  // Charset
    $headers .= "From: Malex <your@email.com>\r\n";            // Your name and email
    
    if ( mail( $to, $subject, $message, $headers ) ) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
} // Contact form 2 ( Choose plan )
else if ( ( isset( $_POST['cf-2-first-name'] ) && $_POST['cf-2-first-name'] != "" ) && ( isset( $_POST['cf-2-last-name'] ) && $_POST['cf-2-last-name'] != "" ) && ( isset( $_POST['cf-2-email'] ) && $_POST['cf-2-email'] != "" ) && ( isset( $_POST['cf-2-company'] ) && $_POST['cf-2-company'] != "" ) && ( isset( $_POST['cf-2-phone-no'] ) && $_POST['cf-2-phone-no'] != "" ) && ( isset( $_POST['cf-2-message'] ) && $_POST['cf-2-message'] != "" ) ) {
    $to      = 'your@email.com'; // Your email
    $subject = 'Order plan';     // E-mail subject
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>First name: ' . $_POST['cf-2-first-name'] . '</p>
                    <p>Last name: ' . $_POST['cf-2-last-name'] . '</p>
                    <p>Email: ' . $_POST['cf-2-email'] . '</p>
                    <p>Company: ' . $_POST['cf-2-company'] . '</p>
                    <p>Phone no.: ' . $_POST['cf-2-phone-no'] . '</p>
                    <p>Message: ' . $_POST['cf-2-message'] . '</p>
                </body>
            </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";  // Charset
    $headers .= "From: Malex <your@email.com>\r\n";            // Your name and email
    
    if ( mail( $to, $subject, $message, $headers ) ) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
} // Comment form
else if ( isset( $_POST['comment'] ) && isset( $_POST['comment-author'] ) && isset( $_POST['comment-email'] ) && isset( $_POST['comment-url'] ) ) {
    $to      = 'your@email.com'; // Your email
    $subject = 'Comment form';   // E-mail subject
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>Comment: ' . $_POST['comment'] . '</p>
                    <p>Author: ' . $_POST['author'] . '</p>
                    <p>Email: ' . $_POST['email'] . '</p>
                    <p>Url: ' . $_POST['url'] . '</p>
                </body>
            </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";  // Charset
    $headers .= "From: Malex <your@email.com>\r\n";            // Your name and email
    
    if ( mail( $to, $subject, $message, $headers ) ) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
}

echo json_encode( $response );
?>
