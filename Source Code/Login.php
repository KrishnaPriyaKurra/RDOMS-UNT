<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['usertext']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passtext']); 
      
      $sql = "SELECT * FROM login where Username = '$myusername' and Password = '$mypassword'";
      echo "<h1>".$sql."</h1>";
      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result);

      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['username'] = $myusername;
         header('Location: UserHome.php');
      }
      else {
         $sql = "SELECT * FROM diningmanagers where username = '$myusername' and password = '$mypassword';";

         $result = mysqli_query($db,$sql);

         $row = mysqli_fetch_array($result);
      
         $count = mysqli_num_rows($result);
		
         if($count == 1) {
            $_SESSION['username'] = $myusername;
            header('Location: Manager_Home.php');
         }
         else {
            header('Location: Login.html');
         }
      }
   }
?>