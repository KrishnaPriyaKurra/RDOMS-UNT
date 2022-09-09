<html>
<head>
	<style>
		#editname{
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
		#namelabel{
			margin-left:5%;
			padding-top: 5%;
		}
		#firstlabel, #lastlabel{
			margin-left: 5%;
		}
		#fnametext, #lnametext{
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
		function checkname(){
			let fname = document.getElementById("fnametext").value;
			let lname = document.getElementById("lnametext").value;
			let repattern = /[^a-z a-z]/i
			let fnamecheck = repattern.test(fname);
			let lnamecheck = repattern.test(lname);
			if(fname==""||lname==""){
				alert("Please fill both the fields");
                return false;}
			else if(fnamecheck||lnamecheck){
				alert("Please enter valid names. Names can only contain letters");
                return false;}
			else{
				alert("The names are valid");
                return true;}
		}
	</script>
</head>
<body>
	<div id="editname">
		<h2 id="namelabel">Edit Name</h2>
		<br>
		<form action="namedb.php" onsubmit="return checkname(this)" method="post">
			<label id="firstlabel">First Name</label>
			<input type="text" name="fnametext" id="fnametext">
			<label id="lastlabel">Last Name</label>
			<input type="text" name="lnametext" id="lnametext">
			<br><br><br><br><br>
			<div style="text-align:center;">
				<button id="updatebutton" type="submit">Update</button>
			</div>
		</form>
	</div>
</body>
</html>