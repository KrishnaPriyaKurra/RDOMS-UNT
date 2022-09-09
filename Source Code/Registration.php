<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myfirstname = mysqli_real_escape_string($db,$_POST['fname']);
      $mylastname = mysqli_real_escape_string($db,$_POST['lname']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']);
      $myconpassword = mysqli_real_escape_string($db,$_POST['conpass']);
      $myuntchoice = mysqli_real_escape_string($db,$_POST['untcheck']); 
      $myphoto = "";
      $myuntid = mysqli_real_escape_string($db,$_POST['untid']);
      $myreferral = mysqli_real_escape_string($db,$_POST['referral']);  
      
      $sql = "SELECT * FROM registration where Email = '$myemail'";

      $result = mysqli_query($db,$sql);
      
      $count = mysqli_num_rows($result);
		
      if($count == 0) {
        $sql = "INSERT INTO registration(FirstName, LastName, Email, Password, UNT, ProfilePic, UNTID, Referral) VALUES('$myfirstname', '$mylastname', '$myemail', '$mypassword', '$myuntchoice', '$myphoto', '$myuntid', '$myreferral')";

        $result = mysqli_query($db, $sql);

        $sql = "INSERT INTO login(Username, Password) VALUES('$myemail', '$mypassword')";

        $result = mysqli_query($db, $sql);

        header('Location: Login.html');
      }
      else {
         header('Location: Signup.html');
      }
   }
?>