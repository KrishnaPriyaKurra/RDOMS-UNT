<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $myemail = mysqli_real_escape_string($db,$_POST['emailtext']);

        $sql = "UPDATE registration SET Email= '".$myemail."' where Email = '".$_SESSION['username']."';";
        $result = mysqli_query($db,$sql);
        $sql = "UPDATE login SET Username= '".$myemail."' where Username = '".$_SESSION['username']."';";
        $result = mysqli_query($db,$sql);
        $_SESSION['username'] = $myemail;

     }
    echo "<div style='text-align:center;'><br><br><h1 style='font-family: Proxima Nova; color:forestgreen;'>Email updated successfully!</h1></div>";
?>