<html>

<head>
    <title>RDOMS Manager Home</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="./css/managerhome.css" rel="stylesheet">
    <script src="./js/userhome.js"></script>
</head>

<body style="background-image: none;">
    <div class="container">
        <?php
            include("config.php");
            session_start();
            if($_SESSION['username']=="bruceadmin"){
                $tablename= "bruceboardcount";
            }
            else if($_SESSION['username']=="eaglelandingadmin"){
                $tablename= "eaglelandingboardcount";
            }
            else if($_SESSION['username']=="westadmin"){
                $tablename= "kitchewestboardcount";
            }
            else if($_SESSION['username']=="meangreensadmin"){
                $tablename= "meangreenboardcount";
            }
            else{
                $tablename= "champsboardcount";
            }

            date_default_timezone_set('America/Chicago');
            $todaydate = date('m/d/Y', time());
            $datetime = new DateTime('tomorrow');
            $tomorrowdate = $datetime->format('m/d/Y');
            $sql = "SELECT Breakfast, Lunch, Dinner FROM ".$tablename." where Date = '".$todaydate."';";
            $result = mysqli_query($db,$sql);
            $todayrow = mysqli_fetch_array($result);
            $sql = "SELECT Breakfast, Lunch, Dinner FROM ".$tablename." where Date = '".$tomorrowdate."';";
            $result = mysqli_query($db,$sql);
            $tomorrowrow = mysqli_fetch_array($result);
            $sql = "SELECT dininghall FROM diningmanagers where username = '".$_SESSION['username']."';";
            $result = mysqli_query($db,$sql);
            $hallname = mysqli_fetch_array($result);
        ?>
        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="logout()">Logout</button>
            <button class="Navcontents">Edit Account</button>
            <button class="Navcontents" onclick="managerhome()">Account Home</button>
        </div>
        <br><br><br><br>
        <div class="mainheading">
            <?php
                echo "<p id='mainhead'>".$hallname[0]." Operations Management</p>";
            ?>
        </div>
        <br><br>
        <div class="orderslist">
            <div class="orderlabel">
                <p>Current Orders</p>
            </div>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Patron Name</th>
                    <th>Order Details</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>34241</td>
                    <td>Test patron 1</td>
                    <td>Item 1: Qty 2<br>Item 2: Qty2</td>
                    <td><button>Accept</button><br><button>Processing</button><br><button>Ready</button>
                </tr>
                <tr>
                    <td>32531</td>
                    <td>Test patron 2</td>
                    <td>Item 1: Qty 1<br>Item 2: Qty3<br>Item 3: Qty 1</td>
                    <td><button>Accept</button><br><button>Processing</button><br><button>Ready</button>
                </tr>
            </table>
        </div>
        <div class="boardcount">
            <div class="todayboard">
                <div class="todayboardlabel">
                    <p>Today's Board Count</p>
                    <p>For Breakfast : </p>
                    <?php
                    echo "<p id='todayBreakfastcount'>".$todayrow[0]."</p>"
                    ?>
                    <p>For Lunch : </p>
                    <?php
                    echo "<p id='todayLunchcount'>".$todayrow[1]."</p>"
                    ?>
                    <p>For Dinner : </p>
                    <?php
                    echo "<p id='todayDinnercount'>".$todayrow[2]."</p>"
                    ?>
                </div>
            </div>
            <div class="tomorrowboard">
                <div class="tomorrowboardlabel">
                    <p>Tomorrow's Board Count</p>
                    <p>For Breakfast : </p>
                    <?php
                    echo "<p id='tomorrowBreakfastcount'>".$tomorrowrow[0]."</p>"
                    ?>
                    <p>For Lunch : </p>
                    <?php
                    echo "<p id='tomorrowLunchcount'>".$tomorrowrow[1]."</p>"
                    ?>
                    <p>For Dinner : </p>
                    <?php
                    echo "<p id='tomorrowDinnercount'>".$tomorrowrow[2]."</p>"
                    ?>
                </div>
            </div>
        </div>
        <button class="contact" href="#">Contact Us</button>
    </div>
</body>

</html>