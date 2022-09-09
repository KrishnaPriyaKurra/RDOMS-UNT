<?php
session_start();
error_reporting(0);
include("config.php");
$sql = "select * from `feedback` where dining_hall='".$_SESSION['id']."'";

$query = $db->query($sql);


?><html>

<head>
    <title>RDOMS Manager Home</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/rdoms_home.css" rel="stylesheet">
    <link href="./css/managerhome.css" rel="stylesheet">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/userhome.js"></script>
</head>

<body style="background-image: none;">
    <div class="container">
        <?php
            if($_SESSION['login_type']!=1)
            {
                header('Location: login.html');
            }
            $sql = "SELECT * FROM orders where dininghall_id = ".$_SESSION['id'].' and status!=5 and status != -1 ';
$result = $db->query($sql);
$sql = "SELECT count(*) as count,meal_type from checkin where dininghall_id=".$_SESSION['id']." and dining_date = '".date('m/d/Y')."' group by meal_type";
$sql1 = "SELECT count(*) as count,meal_type from checkin where dininghall_id=".$_SESSION['id']." and dining_date = '".date('m/d/Y',strtotime("tomorrow"))."' group by meal_type";
$checkins = $db->query($sql);
$checkins1 = $db->query($sql1);
$todayscounts['Breakfast'] = 0;
$todayscounts['Lunch'] = 0;
$todayscounts['Dinner'] = 0;
$tomorrowscounts['Breakfast'] = 0;
$tomorrowscounts['Lunch'] = 0;
$tomorrowscounts['Dinner'] = 0;
while($row= $checkins->fetch_assoc())
{
    $todayscounts[$row['meal_type']]=$row['count'];
}

while($row= $checkins->fetch_assoc())
{
    $tomorrowscounts[$row['meal_type']]=$row['count'];
}
        ?>
        <div class="MyNavbar">
            <button class="Logo" onclick="home()">RDOMS-UNT</button>
            <button class="Navcontents" onclick="logout()">Logout</button>
            <button class="Navcontents">Edit Account</button>
            <button class="Navcontents" onclick="managerhome()">Account Home</button>            
            <button class="Navcontents" onclick="feedReport()">Feedback Report</button>
        </div>
        <br><br><br><br>
        <div class="mainheading">
            <?php
                echo "<p id='mainhead'>".$hallname[0]." Feedback Report </p>";
            ?>
        </div>
        <div>
	<table width="100%">
		<tr  style="font-weight: bold;">
			<td>User</td>
			<td>Overall quality of food?</td>
			<td>Taste of food in dining hall?</td>
			<td>Variety of menu choices?</td>
			<td>Nutritional content in food?</td>
			<td>The speed of service in dining halls?</td>
			<td>Food item like to include in menu?</td>
			<td>Any other suggestions?</td>
		</tr>
		<?php
		while ($result = $query->fetch_assoc()) {
		?>

		<tr>
			<td><?php print $result['email'];?></td>
			<td> <?php
			switch ($result['q1']) {
				case '1':
					print 'Poor';
					break;
				case '2':
					print 'Satisfied';
					break;
				case '3':
					print 'Good';
					break;
				case '4':
					print 'Very Good';
					break;
				case '5':
					print 'Excellent';
					break;
				default:
					break;
			}
			?> </td>
			<td> <?php
			switch ($result['q2']) {
				case '1':
					print 'Poor';
					break;
				case '2':
					print 'Satisfied';
					break;
				case '3':
					print 'Good';
					break;
				case '4':
					print 'Very Good';
					break;
				case '5':
					print 'Excellent';
					break;
				default:
					break;
			}
			?> </td>
			<td> <?php
			switch ($result['q3']) {
				case '1':
					print 'Poor';
					break;
				case '2':
					print 'Satisfied';
					break;
				case '3':
					print 'Good';
					break;
				case '4':
					print 'Very Good';
					break;
				case '5':
					print 'Excellent';
					break;
				default:
					break;
			}
			?> </td>
			<td> <?php
			switch ($result['q4']) {
				case '1':
					print 'Poor';
					break;
				case '2':
					print 'Satisfied';
					break;
				case '3':
					print 'Good';
					break;
				case '4':
					print 'Very Good';
					break;
				case '5':
					print 'Excellent';
					break;
				default:
					break;
			}
			?> </td>
			<td> <?php
			switch ($result['q5']) {
				case '1':
					print 'Poor';
					break;
				case '2':
					print 'Satisfied';
					break;
				case '3':
					print 'Good';
					break;
				case '4':
					print 'Very Good';
					break;
				case '5':
					print 'Excellent';
					break;
				default:
					break;
			}
			?> </td>
			<td><?php print $result['inputs1'];?></td>
			<td><?php print $result['inputs2'];?></td>
		</tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>