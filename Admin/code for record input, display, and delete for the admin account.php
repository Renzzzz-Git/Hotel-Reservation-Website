<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }

   
?>



<!DOCTYPE html>
<html>
</html>
<head>
  <link rel="stylesheet" href="../css/adminAccount.css">
</head>
<body>

<img src="../photos/logo.png" class="logo">

<br>
<h1><center>Welcome to Hotel Firefly</center></h1>
<br>

<ul>
  <li><a href="#home">Home</a></li>
  <li id="name"><a href="../display/Courtyard.php">Rooms</a></li>
  <li><a href="code for displaying the news event on the page.php">News</a></li>
  <li><a class="active" href="#contact">Profile</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right"><a href="../Php/logout.php">Logout</a></li>
</ul>

<h1><center>News Feed System</center></h1>

<div class="operationsBox">
<div class="box1">

  <h3><center>Add an Event/News</center></h3>
  <form action="code for processing functions in the admin account.php" method="post" enctype="multipart/form-data">

    <p>News/Event Title</p>
    <input type="text" name="title">

    <p>Date of News/Event:</p>
    <input type="date" name="date">

    <p>Description</p>
    <textarea name="description" rows="10" cols="20"></textarea>
      
    </textarea>

    <p>Image</p>
    <input type="file" name="imageUpload">
    
    <br><br>
    <input type="submit" name="submit" value="Submit">

    <br>
    <br>

  </form>

  </div>

  <div class="box2">

  <h3><center>Delete an Event/News</center></h3>

  <form action="code for deleting a row in the newseventtable.php" method="post" enctype="multipart/form-data">

    <p>To delete a news/event input News/Event ID: </p>

    <input type="text" name="rowID">

    <br><br>
    <input type="submit" name="submit" value="Submit">

  </form>

  </div>
</div>

<div>

<table border ="1" cellspacing="0" cellpadding="10" class="secondTable">

  <tr class="tableHeader">
    <th width="10%">News/Event ID</th>
    <th width="20%">Title</th>
    <th width="20%">Date</th>
    <th width="30%">Description</th>
    <th width="20%">Image</th>
  </tr>

<?php
include("code for establishing connection to the sql database.php");

$sqlQuery = "SELECT id, Title, NEDate, Description, Image FROM newseventtable";
$result = mysqli_query($connectionKeys, $sqlQuery);

if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
?>

 <tr>
   <td><center><?php echo $data['id']; ?></center></td>
   <td><center><?php echo $data['Title']; ?></center></td>
   <td><center><?php echo $data['NEDate']; ?></center></td>
   <td><center><?php echo $data['Description']; ?></center></td>
   <td><center><?php echo "<img src= 'images/" . $data['Image'] ."' height=150 width=200 />"; ?></center></td>
 </tr>

<?php 
  $sn++;                                      }

} else { 
?>
    <tr>
     <td colspan="5"><h3><center>No data yet</center></h3></td>
    </tr>

 <?php } 
 ?>

 </table>

</body>
</html>

<!--

/*
References

https://codingstatus.com/display-data-in-html-table-using-php-mysql/
https://www.w3schools.com/php/php_mysql_delete.asp

*/

-->
