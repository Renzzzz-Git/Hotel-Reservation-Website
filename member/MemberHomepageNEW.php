<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="homepageNEW1.css">

</head>
<body>

<img src="../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px">
  <ul>
    <div class="leftlinks">
    <li><a href="#hotel">Home</a></li>
    <li><a href="display/Courtyard.php">Rooms</a></li>
    <li><a href="display/Courtyard.php">Reservation</a></li>
    <li><a href="newsfeed.php">News Feed</a></li>
    <li><a href="#about">About</a></li>
  </div>
    <li style="float:right;"><a href="login_Prompt.php">Logout</a></li>
  </ul>

  <div class="greet"><img src="../photos/Welcome to Firefly Hotel (2).png" width="650" height="415"></div>

<div class="bg">
    

<?php

$conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel');
$query = $conn->query("SELECT * FROM `ratereview`");
$fetch = $query->fetch_all();
$row = $query->num_rows;
$sum = 0;
foreach($fetch as $rating) {
  $sum += $rating['2'];
}
$average = $sum / $row;
$average = number_format($average, 1);

$starRating = '';
for ($i = 1; $i <= 5; $i++) {
  if ($i <= $average) {
    $starRating .= '<span class="star">&#9733;</span>';
  } else {
    $starRating .= '<span class="star">&#9734;</span>';
  }
}

echo "<div class=\"avgrate\">";
echo $starRating . " (".$average.")"; // Display average rating with one decimal place
echo "</div>";

?>

  <img src="beach.jpg" width="100%" height="628px">

  <a href="#" class="ratebutton">Rate</a>
  
  <a href="chat.php" class="chatbutton">Chat</a>

  <div class="rooms">
    <a class="bottomlinks" href="display/Courtyard.php">Rooms</a>
  </div>
  <div class="book">
    <a class="bottomlinks" href="member/Memberhomepage.php">Book</a>
  </div>
</div>

</body>
</html>