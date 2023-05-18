<!DOCTYPE html>
<html>
<head>


  <link rel="stylesheet" href="css/homepage.css">




<style></style>
</head>
<body>

 
 
  <ul>

 
    <li id="name"><a href="#hotel">Home</a></li>
    <li id="name"><a href="display/Courtyard.php">Rooms</a></li>
    <li id="name"><a href="ratingAverage.php">Hotel Rating Average</a></li>
    <li class="font1" style="float:right"><a href="login_Prompt.php">Login</a></li>
    <li class="font1" style="float:right"><a href="newsfeed.php">News Feed</a></li>
    
  </ul>



<div class="bg">
<img src="photos/luxlobby2.jpg" width="100%" height="670">
  <div class="greet"><img src="photos/Welcome to Firefly Hotel (2).png" width="800" height="500"></div>
  <div class="rooms"><a class="links" href="display/Courtyard.php">Suites</a></li></div>
  <div class="book"><a class="links" href="member/Memberhomepage.php">Book</a></div>



</div>


<?php
  include("Admin/code for establishing connection to the sql database.php");

  $sqlRateReviewAverageQuery = "SELECT AVG(ratereview) FROM firefly_hotel";
  $averageHotelRateResult = mysqli_query($connectionKeys, $sqlRateReviewAverageQuery);
  echo $averageHotelRateResult;

?>
</body>
</html>

