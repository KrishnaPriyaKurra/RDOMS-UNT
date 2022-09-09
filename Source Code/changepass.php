<html>
<head>
	<style>
		#editpassword{
			background-color: green;
			color: white;
			width: 80%;
			height: 50%;
			margin-left: 10%;
			margin-top: 5%; 
			font-family: Proxima Nova;
			border-radius: 20px;
			font-size: 1.5vmax;
		}
		#passwordlabel{
			margin-left:5%;
			padding-top: 5%;
		}
		#newpasswordlabel, #conpasslabel{
			margin-left: 5%;
		}
		#passtext, #conpasstext{
			border-top:0;
			border-left:0;
			border-right:0;
			border-bottom-width:5px;
			border-radius:5px;
			border-color: white;
			background-color: green;
			color: white;
			padding:10px;
			margin-left: 10px;
			text-decoration: none;
			outline: none;
			font-family: Proxima Nova;
			font-size: 1.5vmax;
		}
		#updatebutton{
			text-decoration:none;
			border: none;
			border-radius: 20px;
			background-color: white;
			color: green;
			padding: 15px;
			width: 200px;
			height: max-content;
			font-size: 1.5vmax;
		}
	</style>
	<script>
		function checkpass(){
			let passw = document.getElementById("passtext").value;
			let conpassw = document.getElementById("conpasstext").value;
			if(passw==""||conpassw==""){
				alert("Please fill both the fields");
                return false;
            }
			else if(passw!=conpassw){
				alert("The passwords do not match. Please recheck.");
                return false;
            }
			else{
				alert("Password updated!");
                return true;
            }	
		}
	</script>
</head>
<body>
	<div id="editpassword">
		<h2 id="passwordlabel">Edit Password</h2>
		<br>
		<form action="passdb.php" onsubmit="return checkpass(this)" method="post">
			<label id="newpasswordlabel">New Password</label>
			<input type="password" name="passtext" id="passtext">
			<label id="conpasslabel">Confirm Password</label>
			<input type="password" id="conpasstext">
			<br><br><br><br><br>
			<div style="text-align:center;">
				<button id="updatebutton">Update</button>
			</div>
		</form>
	</div>
</body>
</html>