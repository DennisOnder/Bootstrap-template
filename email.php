<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'webdev.dennisonder@gmail.com';
    $subject = 'Portfolio Contact';
    $body = '<html>
                <body>
                    <h2>New message</h2>
                    <hr>
                    <p>Name:<br>'.$name.'</p>
                    <p>Email:<br>'.$email.'</p>
                    <p>Message:<br>'.$message.'</p>
                </body>
            </html>';
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply to:".$email."\r\n";
    $headers .= "MIME Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for contacting me. I will reply to you shortly!';
    } else {
        echo 'error';
    }
}
?>