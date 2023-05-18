



<!DOCTYPE html>
<html>
</html>
<head>
  <link rel="stylesheet" href="css/adminAccount.css">
</head>
<body>

<img src="photos/logo.png" class="logo">

<br>
<h1><center>Welcome to Hotel Firefly</center></h1>
<br>

<ul>
  <li id="name"><a href="../display/Courtyard.php">Rooms</a></li>
  <li><a class="active"href="#news">News</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right"><a href="Php/logout.php">Logout</a></li>
</ul>

<h1><center>Hotel News and Events</center></h1>

<?php
include("Admin/code for establishing connection to the sql database.php");

$sqlQuery = "SELECT id, Title, NEDate, Description, Image FROM newseventtable";
$result = mysqli_query($connectionKeys, $sqlQuery);

if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
?>

<div class="centerBox">

        <h3><?php echo $data['Title'];?></h3>
        <h4>Date: <?php echo $data['NEDate'];?></h4>
        <p align="justify"><?php echo $data['Description'];?></p>
        <p><center><?php echo"<img src='Admin/images/".$data['Image']."' height=300 width=400 />";?></center></p>
        <br>

<?php 
  $sn++;                                      }

} else { 
?>
    <tr>
     <td colspan="5"><h3><center>No data yet</center></h3></td>
    </tr>

 <?php } 
 ?>

</div>
</body>
</html>

<!--

/*
References

https://codingstatus.com/display-data-in-html-table-using-php-mysql/
https://www.w3schools.com/php/php_mysql_delete.asp

*/

-->
