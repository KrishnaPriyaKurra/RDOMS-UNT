<?php 
include("config.php");
session_start();
$sql = "SELECT * FROM dininghalls where id = ".$_POST['dining_id']." and password='".md5($_POST['passtext'])."'";
$result = $db->query($sql);
$_SESSION['login_type']=1;
$_SESSION['id']=$_POST['dining_id'];
if($result->num_rows >0)
{
	print 'login successfully';
	header('Location: manager.php');
}
else
{
	print 'login failed';
	header('Location: managerlogin.php');
}
?>