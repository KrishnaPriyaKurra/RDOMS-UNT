<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = '<Your gmail>';                 
    $mail->Password   = '<Your gmail password>';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('<Your gmail>', '<Your Name>');           
    $mail->addAddress('<Patron Email>');
       
    $mail->isHTML(true);                                  
    $mail->Subject = '<Subject>';
    $mail->Body    = '<Message>';
    $mail->AltBody = '<Alternate Message>';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  
?>