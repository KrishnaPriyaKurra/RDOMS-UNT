<html>
<head>
    <style>
        #requesttable{
            background-color: forestgreen;
            color: white;
            font-family: Proxima Nova;
            border-spacing: 80px 35px;
            border-radius: 20px;
            text-align: center;
            font-size: 1.5vmax;
        }
        #requestarea{
            text-align: center;
        }
        th{
          font-size: 2.0vmax;
        }
        #nameheading{
          width: 200px;
        }
        td{
          width:25%;
        }
        #replyemail{
          background-color: forestgreen;
          color: white;
          height:80%;
          width:60%;
          position: absolute;
          right:20%;
          top: 5%;
          border-radius: 20px;
          font-family: Proxima Nova;
          display: block;
          border: medium black groove;
          display:none;
        }
        p{
          padding-left: 5%;
          font-size: 1.5vmax;
        }
        textarea{
          margin-left: 5%;
          font-size: 1.5vmax;
          padding:5px;
          font-family: Proxima Nova;

        }
        button{
          padding: 10px;
          color:forestgreen;
          background-color:white;
          font-size:1.5vmax;
          border-radius:20px;
          width:100px;
        }
    </style>
    <script>
      function solved(row){
          document.getElementById(row).style.display = "none";
      }
      function reply(email){
        var element = document.getElementById("replyemail");
        var style = window.getComputedStyle(element);
        var top = style.getPropertyValue("display");
        if (top == "none"){
          document.getElementById("replyemail").style.display = "block";
          document.getElementById("toemail").value= document.getElementById(email).innerHTML;
          document.getElementById("toaddress").innerHTML = document.getElementById(email).innerHTML;
        }
        else {
            document.getElementById("replyemail").style.display = "none";
        }

      }
      function replyconfirmation(){
        alert("Mail sent successfully");
        document.getElementById("replyemail").style.display = "none";
        return true;
      }
    </script>
</head>
<body>
    <div id="replyemail">
      <h1 style="text-align: center;">Reply</h1>
      <br>
      <p style="float:left;"> To: </p><p id="toaddress"></p>
      <p>Message: </p>
      <br>
      <form action="sendreply.php" onsubmit="return replyconfirmation(this)" method="post">
        <input id="toemail" name="toemail" type="text" value="" style="display:none;">
        <textarea id="replytext" name="replytext" cols="70" rows="12" required style="border-radius: 20px; padding:10px;"></textarea>
        <div style="text-align: center;">
          <button type="submit" style="padding: 10px;width:100px;font-family: Proxima Nova;font-size:1.5vmax;color:forestgreen;background-color:white;border-radius:20px;">Send</button>
        </div>
      </form>
    </div>
<div id="requestarea">
<?php
   include("config.php");
   session_start();
   
    $sql = "SELECT * FROM servicerequests where Solved=0;";

    $result = mysqli_query($db,$sql);
      
    $count = mysqli_num_rows($result);
	
    $countrow = 0;
    if ($result->num_rows > 0) {
        $replyname = "reply".strval($countrow);
        $solvedname = "solved".strval($countrow);
        echo "<table id='requesttable'><tr><th id='nameheading'>First Name</th><th>Email</th><th>Issue</th><th>Actions</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $rowid = "row".strval($countrow);
          $replyname = "reply".strval($countrow);
          $solvedname = "solved".strval($countrow);
          $name = "name".strval($countrow);
          $email = "email".strval($countrow);
          echo "<tr id='".$rowid."'><td id='".$name."'>".$row["FIRSTNAME"]."</td><td id='".$email."'>".$row["EMAIL"]."</td><td>".$row["ISSUE"]."</td><td><button id='".$replyname."' onclick='reply(\"".$email."\")'>Reply</button><br><br><button id='".$solvedname."' onclick='solved(\"".$rowid."\")'>Solved</button></td></tr>";
          $countrow = $countrow + 1;
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
?>
</div>
</body>
</html>