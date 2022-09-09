<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $myfirstname = mysqli_real_escape_string($db,$_POST['fnametext']);
        $mylastname = mysqli_real_escape_string($db,$_POST['lnametext']);

        $sql = "UPDATE registration SET FirstName= '".$myfirstname."', LastName= '".$mylastname."' where Email = '".$_SESSION['username']."';";
        $result = mysqli_query($db,$sql);

     }
    echo "<div style='text-align:center;'><br><br><h1 style='font-family: Proxima Nova; color:forestgreen;'>Name updated successfully!</h1></div>";
?>