<html>

<head>
    <title>RDOMS- Admin Login </title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="./js/navbar.js"></script>
</head>

<body style="background-image: url('./Images/Login.jpg'); background-repeat: no-repeat; background-size: 100%;">
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
        <div class="Loginarea">
            <form id="loginform" method="post" action="managersubmit.php">
                <label id="userlabel">Dining Hall</label><br>
                <select name="dining_id" id="input" class="form-control" required="required">
                	<?php 
                            include("config.php");
                            session_start();
                            $sql = "SELECT * FROM dininghalls";
                            $result = $db->query($sql);

                            if($result != null && isset($result)) {
                            while($row = $result->fetch_assoc()) {
                       ?>
                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                        <?php 
                        }
                       }?>
                </select>
                <label id="passlabel">Password</label><br>
                <input type="password" id="passtext" name="passtext"><br>
            </form>
        </div>
        <div class="ShowForget">
            <input type="checkbox" id="showcheck">
            <label id="showlabel">Show Password</label>
            <a href="login.html" id="forgot">Customer Login</a>
            <a href="#" id="forgot">Forgot Password?</a>
        </div>
        <button class="login" type="submit" form="loginform">Login</button>
        <button class="contact" href="#">Contact Us</button>
        <div class="notmem">
            <label id="notmem">Not a member?</label>
            <a href="Signup.html" id="signup">Sign up here</a>
        </div>
    </div>
</body>

</html>