<html>

<head>
    <title>RDOMS Admin</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="./css/userhome.css" rel="stylesheet">
    <link href="./css/adminhome.css" rel="stylesheet">
    <script src="./js/navbar.js">
    </script>
    <script src="./js/userhome.js"></script>
    <script src="./js/adminhome.js"></script>

</head>

<body>
    <div class="container">
        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="logout()">Logout</button>
        </div>
        
        <br><br><br><br>
        <h2 id="adminlabel">Admin- RDOMS at UNT</h2>
        <br>
        <div id="adminactions">
            <button id="service" onclick="showrequests()">Service Requests</button>
            <button id="poll" onclick="showpolldata()">Poll Data</button>
        </div>
        <iframe id="serviceframe" src="servicerequests.php" width="100%" height="100%" style="display:none;"></iframe>
        <iframe id="pollframe" src="polldata.php" width="400" height="400" style="display:none;"></iframe>
    </div>
</body>

</html>