<?php
    include('mailAuth.php');

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userMessage = $_POST['userMessage'];
    $message = $_POST['message'];
    
    try {
        
        //Recipients
        $mail->addAddress($userEmail, $userName);     //Add a recipient
       
        //Content
        $mail->Subject = 'Thanks for contacting LandEX!';
        $mail->Body    = '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Thanks for contacting LandEX!</title>
            </head>
            <body>
                <h1>Hello, <b>'.$userName.'</b>!</h1> 
                <p>'.$message.'</p> 
                
                <p><b>Your Message was:</b></p><p><q>'.$userMessage.'</q></p>
                
                <p>Thanks For contacting us.</p>
            </body>
        </html>';
        $mail->AltBody ='Hello!, '.$userName.' '.$message.' Your Message was: '.$userMessage.' Thanks For contacting us.';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>