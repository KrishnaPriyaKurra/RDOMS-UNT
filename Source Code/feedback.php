<?php
	session_start();
	include_once "config.php";
	if(isset($_POST['submit'])){
		$dininghall = $_POST['dininghall'];
		$email = $_SESSION['user']['email'];
		$q1 = $_POST['q1'];
		$q2 = $_POST['q2'];
		$q3 = $_POST['q3'];
		$q4 = $_POST['q4'];
		$q5 = $_POST['q5'];
		$inputs1 = $_POST['inputs1'];
		$inputs2 = $_POST['inputs2'];
	}
	$sql ="INSERT INTO `feedback` (`dining_hall`, `email`, `q1`, `q2`, `q3`, `q4`, `q5`, `inputs1`, `inputs2`) VALUES ('". $dininghall."', '". $email."', '". $q1."', '". $q2."', '". $q3."', '". $q4."', '". $q5."', '". $inputs1."', '". $inputs2."');";
	if($db->query($sql)){
		?>
		<script type="text/javascript"> window.location = "user.php";</script>
		<?php
	}

?>
