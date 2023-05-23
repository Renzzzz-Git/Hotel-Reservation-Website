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
  <link rel="stylesheet" href="designFilesAndImages/newsFeedSystemDesign.css">
</head>
<body>

<center><img src="designFilesAndImages/logo.png" class="logo"></center>

<ul>
      <li><a  class="active"  href="newsFeedSystem.php">View Books Registered in the Archives</a></li> 
      <li><a  class="notActive" href="AddNews.php">Add News/Event</a></li>
      <li><a  class="logOut" href="../Php/logout.php">Log Out</a></li>
</ul>

<br>
<br>
<br>
<br>

<div class="tableCenterBox">

<br>
<br>

<h1><center>News Feed System</center></h1>

<table border ="1" cellspacing="0" cellpadding="10" class="secondTable">

  <tr class="tableHeader">
    <th width="10%">News/ Event ID</th>
    <th width="15%">Title</th>
    <th width="15%">Date</th>
    <th width="25%">Description</th>
    <th width="25%">Image</th>
    <th width="1o%">Action</th>
  </tr>

<?php
include("databaseConnect.php");

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
   <td><center><?php echo "<img src= 'designFilesAndImages/" . $data['Image'] ."' height=200 width=250 />"; ?></center></td>
   <td>
      <a href="deleteARow.php?rowID=<?php echo $data['id'];?>">Delete</a>
   </td>
 </tr>

<?php 
  $sn++;                                      }

} else { 
?>
    <tr>
     <td colspan="6"><h3><center>No data yet</center></h3></td>
    </tr>

 <?php } 
 ?>

 </table>

</div>

</body>
</html>

