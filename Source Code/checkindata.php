<?php
   include("config.php");
   session_start();
   echo "<h1>I am in php</h1>";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $date = mysqli_real_escape_string($db,$_POST['Date']);
      echo "<h1>".$date."</h1>";
      $meal = mysqli_real_escape_string($db,$_POST['Meal']);
      $hall = mysqli_real_escape_string($db,$_POST['DiningHall']);
      echo "<h1>".$date."</h1>";
      if($hall=="Bruceteria"){
        $hall="bruceboardcount";
      }
      else if($hall=="Mean Green"){
        $hall="meangreenboardcount";
      }
      else if($hall=="Kitchen West"){
        $hall="kitchenwestboardcount";
      }
      else if($hall=="Eagle Landing"){
        $hall="eaglelandingboardcount";
      }
      else{
        $hall="champsboardcount";
      }
      
      $sql = "SELECT ".$meal." FROM ".$hall." where Date = '$date'";
      echo "<h1>".$sql."</h1>";
      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result);

      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $toincrement = $row[0] + 1;
         $sql = "UPDATE ".$hall." SET ".$meal."=".($toincrement)." WHERE Date = '".$date."'";
         echo "<h1>".$sql."</h1>";
         $result = mysqli_query($db,$sql);
        header("location: UserHome.php");
      }
      else {
         $sql = "INSERT INTO ".$hall."(Date, Breakfast, Lunch, Dinner) VALUES('".$date."', ".(0).",".(0).",".(0).")";
         echo "<h1>".$sql."</h1>";
         $result = mysqli_query($db,$sql);
         $sql = "UPDATE ".$hall." SET ".$meal."=".(1)." WHERE Date = '".$date."'";
         $result = mysqli_query($db,$sql);
         header("location: UserHome.php");
      }
   }
?>