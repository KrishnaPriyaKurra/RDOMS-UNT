<?php 

include("config.php");
include("manageremail.php");
session_start();
			 
            $toemail = mysqli_real_escape_string($db,$_POST['toemail']);
            $message = mysqli_real_escape_string($db,$_POST['replytext']);
            $message = stripcslashes($message);
            $mail->isHTML(true);    
            $mail->addAddress($toemail);                              
            $mail->Subject = 'Regarding your service request at RDOMS-UNT';
            $mail->Body    = $message;
            $mail->send();
            header("location: admin.php");
?>