<?php
//This is all your backend processing youll need for your website



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function createUser($name, $message, $email){

    $mail = new PHPMailer(true);

    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'ghalgino@gmail.com';          // SMTP username
    $mail->Password = 'Ginster1'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
    $mail->Port = 587;                          // TCP port to connect to

  
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('ginoghalehpardaz@gmail.com');


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Contact from ' .$name;
            $mail->Body    = ' Name:  '.$name.'<br> Email: '.$email.'<br> message: '.$message.'';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                // echo 'Message has been sent';

            }


}
