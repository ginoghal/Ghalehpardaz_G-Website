<?php
//This is all your backend processing youll need for your website



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function createUser($name, $email, $message){

    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host = 'localhost';
    
    $mail->SMTPAuth = false;
    
    $mail->SMTPAutoTLS = false; 
    
    $mail->Port = 25;                       // TCP port to connect to

  
            //Recipients
            $mail->setFrom('from@example.com', 'Website Message');
            $mail->addAddress('ginoghalehpardaz@gmail.com');


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Contact from ' .$name;
            $mail->Body    = ' Name:  '.$name.'<br> Email: '.$email.'<br> Message: '.$message.'';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                // echo 'Message has been sent';

            }


}
