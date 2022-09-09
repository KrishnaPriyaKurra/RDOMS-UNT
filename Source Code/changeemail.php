<html>
<head>
	<style>
		#editemail{
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
		#emaillabel{
			margin-left:5%;
			padding-top: 5%;
		}
		#newemaillabel{
			margin-left: 5%;
		}
		#emailtext{
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
		function checkemail(){
			let email = document.getElementById("emailtext").value;
			let repattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
			let emailcheck = repattern.test(email);
			if(email==""){
				alert("Please enter an email");
                return false;
            }
			else if(!emailcheck){
				alert("Please enter a valid email");
                return false;}
			else{
				alert("The email is valid");
                return true;
            }	
		}
	</script>
</head>
<body>
	<div id="editemail">
		<h2 id="emaillabel">Edit Email</h2>
		<br>
		<form action="emaildb.php" onsubmit="return checkemail(this)" method="post">
			<label id="newemaillabel">New Email</label>
			<input type="text" name="emailtext" id="emailtext">
			<br><br><br><br><br>
			<div style="text-align:center;">
				<button id="updatebutton" type="submit">Update</button>
			</div>
		</form>
	</div>
</body>
</html>