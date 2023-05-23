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
  <link rel="stylesheet" href="designFilesAndImages/addNewsDesign.css">
</head>
<body>

<center><img src="designFilesAndImages/logo.png" class="logo"></center>

<ul>
      <li><a  class="notActive"  href="newsFeedSystem.php">View Books Registered in the Archives</a></li> 
      <li><a  class="active" href="AddNews.php">Add News/Event</a></li>
      <li><a  class="logOut" href="../Php/logout.php">Log Out</a></li>
</ul>

<br>
<br>
<br>
<br>

<div class="centerBox">

<h1><center>Add a News/Event</center></h1>
<br>

<form action="addNewsToSQLDatabase.php" method="post" enctype="multipart/form-data">

    <p class="newsDetails">News/Event Title</p>
    <center><input type="text" name="title" required></center>

    <p class="newsDetails">Date of News/Event</p>
    <center><input type="date" name="date" required></center>

    <p class="newsDetails">Description</p>
    <center><textarea name="description" rows="10" cols="35" maxlength="1000" required></textarea></center>

    <p class="newsDetails">Image</p>

    <center>
    <div class="fileBox">
    <input type="file" name="imageUpload" required>
    </div>
    </center>

    <br><br>

    <input class="submit" type="submit" name="submit" value="Submit">

    <br>
    <br>

  </form>

</div>

</div>

</body>
</html>

