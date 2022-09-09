<?php
session_start();
?>

<html>

<head>
    <title>RDOMS- Login </title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="./js/navbar.js"></script>
    <script>
        function closeloginerror(){
            document.getElementById("invalidlogin").style.display = "none";
        }
        function showregsuccess(){
            document.getElementById("regsuccess").style.display = "none";
        }
    </script>
</head>

<body style="background-image: url('./Images/Login.jpg'); background-repeat: no-repeat; background-size: 100%;">
    <?php include "contactus.html" ?>
    <div class="container">
        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="signup()">Signup</button>
            <button class="Navcontents" onclick="login()">Login</button>
            <button class="Navcontents" onclick="dininghalls()">Dining Halls</button>
            <button class="Navcontents" onclick="about()">About</button>
            <button class="Navcontents" onclick="home()">Home</button>
        </div>
        <br>
        <?php
            if(isset($_SESSION["error"])){
                echo "<div id='invalidlogin' style='width:max-content; height:max-content; background-color: red; color: white; position:absolute; border-radius:20px; padding:10px; text-align: center; right: 12%; top: 30%;'>
            <p style='float:left;'>Invalid Credentials. Please try again.</p>
            <button style='float:right; padding-left:20px; text-decoration:none;border:none; background-color: red;color:white;' onclick='closeloginerror()''>X</button>
        </div>";
            }
        ?>
        <?php
            if(isset($_SESSION["regsuccess"])){
                echo "<div id='regsuccess' style='width:max-content; height:max-content; background-color: gold; color: black; position:absolute; border-radius:20px; padding:10px; text-align: center; right: 18%; top: 30%;'>
            <p style='float:left;'>Registration Successful</p>
            <button style='float:right; padding-left:20px; text-decoration:none;border:none; background-color: gold; color:black;' onclick='showregsuccess()''>X</button>
        </div>";
            }
        ?>    
        <div class="Loginarea">
            <form id="loginform" method="post" action="Login.php">
                <label id="userlabel">Username</label><br>
                <input type="text" id="usertext" name="usertext"><br>
                <label id="passlabel">Password</label><br>
                <input type="password" id="passtext" name="passtext"><br>
            </form>
        </div>
        <div class="ShowForget">
            <input type="checkbox" id="showcheck">
            <label id="showlabel">Show Password</label>
            <a href="#" id="forgot">Forgot Password?</a>
        </div>
        <button class="login" type="submit" form="loginform">Login</button>
        <button class="contact" onclick="showcontact()">Contact Us</button>
        <div class="notmem">
            <label id="notmem">Not a member?</label>
            <a href="Signup.html" id="signup">Sign up here</a>
        </div>
    </div>
</body>

</html>
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["regsuccess"]);
?>