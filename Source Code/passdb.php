<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $mypass = mysqli_real_escape_string($db,$_POST['passtext']);

        $sql = "UPDATE registration SET Password= '".$mypass."' where Email = '".$_SESSION['username']."';";
        $result = mysqli_query($db,$sql);
        $sql = "UPDATE login SET Password= '".$mypass."' where Username = '".$_SESSION['username']."';";
        $result = mysqli_query($db,$sql);

     }
    echo "<div style='text-align:center;'><br><br><h1 style='font-family: Proxima Nova; color:forestgreen;'>Password updated successfully!</h1></div>";
?>