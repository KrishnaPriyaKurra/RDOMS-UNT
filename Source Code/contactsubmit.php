<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $myfirstname = mysqli_real_escape_string($db,$_POST['contactfirsttext']);
        $myemail = mysqli_real_escape_string($db,$_POST['contactemailtext']);
        $myissue = mysqli_real_escape_string($db,$_POST['contactissuetext']);
        
        $sql = "INSERT INTO servicerequests(FIRSTNAME, EMAIL, ISSUE) VALUES('$myfirstname','$myemail', '$myissue')";
        
        echo "<h1>".$sql."</h1>";

        $result = mysqli_query($db,$sql);
        
        echo "<h1>".$result."</h1>";
        
        header('Location: Home.php');
     }


?>