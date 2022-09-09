<html>

<head>
    <title>RDOMS Edit Account</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="./css/userhome.css" rel="stylesheet">
    <link href="./css/adminhome.css" rel="stylesheet">
    <script src="./js/navbar.js">
    </script>
    <script src="./js/userhome.js"></script>
    <script src="./js/editaccount.js"></script>
    <style>
        #chname, #chemail, #chpass, #chpic{
            color:white;
            background-color: forestgreen;
            padding: 20px;
            border-radius: 20px;
            width:250px;
            height:100px;
            font-family: Proxima Nova;
            border:0;
            margin-left: 20px;
            text-decoration:none;
            font-size:1.5vmax;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="logout()">Logout</button>
            <button class="Navcontents" onclick="editaccount()">Edit Account</button>
            <button class="Navcontents" onclick="accounthome()">Account Home</button>
        </div>
        
        <br><br><br><br>
        <h2 id="adminlabel">Edit Account</h2>
        <br>
        <div id="adminactions">
            <button id="chname" onclick="changename()">Change Name</button>
            <button id="chemail" onclick="changeemail()">Change Email/Username</button>
            <button id="chpass" onclick="changepass()">Change Password</button>
            <button id="chpic" onclick="changepic()">Change Profile Picture</button>
        </div>
        <iframe id="nameframe" src="changename.php" width="100%" height="100%" style="display:none;"></iframe>
        <iframe id="emailframe" src="changeemail.php" width="100%" height="100%" style="display:none;"></iframe>
        <iframe id="passframe" src="changepass.php" width="100%" height="100%" style="display:none;"></iframe>
        <iframe id="picframe" src="changepic.php" width="100%" height="100%" style="display:none;"></iframe>
    </div>
</body>

</html>