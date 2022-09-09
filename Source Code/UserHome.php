<html>

<head>
    <title>RDOMS User Home</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="./css/userhome.css" rel="stylesheet">
    <script src="./js/navbar.js">
    </script>
    <script src="./js/userhome.js"></script>
</head>

<body style="background-image: url('./Images/UserHome.jpg'); background-repeat: no-repeat; background-size: 100%;">
    <div class="container">
        <?php
            include("config.php");
            session_start();
            $sql = "SELECT FirstName FROM registration where Email = '".$_SESSION['username']."';";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result);
        ?>
        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="logout()">Logout</button>
            <button class="Navcontents">Edit Account</button>
            <button class="Navcontents" onclick="accounthome()">Account Home</button>
        </div>
        <br>
        <div class="MainArea">
            <div class="welcome">
                <p id="line1">Welcome,</p>
                <?php
                    echo "<p id='line2'>",$row['FirstName'],"</p>"
                ?>
            </div>
            <div class="features">
                <img id="place" src="./Images/placeorder.jpg">
                <img id="check" src="./Images/checkin.jpg"><br>
                <button id="placebutton" onclick="selectorder()">Place Order</button>
                <button id="checkinbutton">Check-in</button><br>
                <img id="poll" src="./Images/weeklypoll.jpg">
                <img id="feed" src="./Images/feedback.jpg"><br>
                <button id="pollbutton">Weekly Poll</button>
                <button id="feedbackbutton">Feedback</button>
            </div>
        </div>
        <button class="contact" href="#">Contact Us</button>
    </div>
</body>

</html>