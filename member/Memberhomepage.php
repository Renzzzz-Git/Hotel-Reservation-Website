<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php include 'reservationCheckDB.php'?>
<!DOCTYPE html>
<html>
<head>


  <link rel="stylesheet" href="../css/homepage.css">




<style>
  #rteExp{
  position: absolute;
  top: 62%;
  left: 35%;
  transform: translate(-50%, -50%);
  font-size: 23px;
  font-family: serif;
  color: #533C1D;
  border-style: solid;
  padding: 5px;
  width: 80px;
  text-align: center;
  border-color: #BA9255;
  background-color: #C5B39F;


}
</style>
</head>
<body>

 
 
  <ul>

 
    <li id="name"><a href="Memberhomepage.php">Home</a></li>
    <li id="name"><a href="Reservation.php">Reservation</a></li>
    <li id="name"><a href="chat.php">Chat</a></li>
    <li id="name"><a href="#ratingFile">Ratings</a></li>
    <li class="font1" style="float:right"><a href="../Php/logout.php">Logout</a></li>
    <li class="font1" style="float:right"><a href="#newsfeed">News Feed</a></li>
    <li class="font1" style="float:right"><a href="Rate.php" class=<?php echo $disable?>>Rate Experience</a></li>
    
  </ul>


<div class="bg">
<img src="../photos/luxlobby2.jpg" width="100%" height="670">
  <div class="greet"><img src="../photos/Welcome to Firefly Hotel (2).png" width="800" height="500"></div>
  <div class="rooms"><a class="links" href="#suites">Suites</a></li></div>
  <div class="book"><a class="links" href="Reservation.php">Book</a></div>
  <div class="rteExp"><a class="links" href="Rate.php" id=<?php echo $disable?>>Rate</a></div>
  

  <div class="rate"><img src="../photos/5 star rev2.png" width="400" height="250"></div>
  <button><a href="Rate.php" id=<?php echo $disable?>>Rate Experience</a></button>


</div>



</body>
</html>
