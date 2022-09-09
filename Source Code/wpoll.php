<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){
	
	$insFields = "";
	$insValues = "";

	if(isset($_POST['hall1'])){
		$insFields .= "hall1,";
	}
	if(isset($_POST['hall2'])){
		$insFields .= "hall2,";
	}
	if(isset($_POST['hall3'])){
		$insFields .= "hall3,";
	}
	if(isset($_POST['hall4'])){
		$insFields .= "hall4,";
	}
	if(isset($_POST['hall5'])){
		$insFields .= "hall5,";
	}
	$insFields = trim($insFields,",");

	if(isset($_POST['pizza'])){
		$insValues .= "'".$_POST['pizza']."'" . ' , ';
	}
	if(isset($_POST['burger'])){
		$insValues .= "'".$_POST['burger']."'" . ' , ';
	}
	if(isset($_POST['salad'])){
		$insValues .= "'".$_POST['salad']."'" . ' , ';
	}
	if(isset($_POST['biriyani'])){
		$insValues .= "'".$_POST['biriyani']."'" . ' , ';
	}
	if(isset($_POST['chicken'])){
		$insValues .= "'".$_POST['chicken']."'" . ' , ';
	}

	print $insValues = trim($insValues," ,");
	print $sql = "INSERT INTO `wpoll` (".$insFields.") values(". $insValues .")";
	if($db->query($sql)){
		?>
		<script type="text/javascript"> window.location = "user.php";</script>
		<?php
	}
}
?>

        <!DOCTYPE html>
<html>
<head>
	<title> Weekly Poll</title>
	<meta charset="utf-8" />
    <title>RDOMS User Home</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="./css/userhome.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/jquery.min.js"> </script>
    <script src="./js/navbar.js"></script>
    <script src="./js/userhome.js"></script>
	<style type="text/css">
		.emptySpace{
			min-height: 100px;
		}
		td{
			padding: 10px !important;
			text-align: center;
		}
		button{
			background-color: #008800;
			color: #ffffff;
			font-weight: bold;
		}
		.pollheading{
			font-weight: bold;
			color: #008800;
			text-align: center;
			padding: 10px;
		}

	</style>
</head>

<body style="">
    <div class="container">

        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="logout()">Logout</button>
            <button class="Navcontents">Edit Account</button>
            <button class="Navcontents" onclick="accounthome()">Account Home</button>
            <button class="Navcontentsname"><img width="30px" style="margin-top: -5px;border-radius: 30px;" src="./uploads/<?=$_SESSION['user']['image']?>"/>Welcome <?=$_SESSION['user']['firstname']?>!</button>
        </div>
     </div> 
     <div class="emptySpace">&nbsp;</div>
	<div  class="container">
		
		<div class="pollheading">Weekly Poll</div>
		<form action="wpoll.php" method="post">
			<table align="center">
				<tr>
					<td> <input type="checkbox" name="hall1" value="1"></td>
					<td> Bruceteria </td>
					<td> <input type="radio" name="pizza" value="1"> Pizza1</td>
					<td> <input type="radio" name="pizza" value="2"> Pizza2</td>
				</tr>
				<tr>
					<td> <input type="checkbox" name="hall2" value="1"></td>
					<td> Champs</td>
					<td> <input type="radio" name="burger" value="1"> Burger1</td>
					<td> <input type="radio" name="burger" value="2"> Burger2</td>
				</tr>
				<tr>
					<td> <input type="checkbox" name="hall3" value="1"></td>
					<td> Kitchen West</td>
					<td> <input type="radio" name="salad" value="1"> Salad1</td>
					<td> <input type="radio" name="salad" value="2"> Salad2</td>
				</tr>
				<tr>
					<td> <input type="checkbox" name="hall4" value="1"></td>
					<td> Mean Greens</td>
					<td> <input type="radio" name="biriyani" value="1"> Biriyani1</td>
					<td> <input type="radio" name="biriyani" value="2"> Biriyani2</td>
				</tr>
				<tr>
					<td> <input type="checkbox" name="hall5" value="1"></td>
					<td> Eagle Landing</td>
					<td> <input type="radio" name="chicken" value="1"> Chicken1</td>
					<td> <input type="radio" name="chicken" value="2"> Chicken2</td>
				</tr>
				<tr>
					<td colspan="4"> <button type="submit" name="submit" value="submit"> Submit </button> </td>
				</tr>
			</table>
		</form>
	</div>
	

</body>
</html>