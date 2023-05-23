<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php
include("databaseConnect.php");

#Retriving Title, Date, Description, and Image
$newsEventTitle = $_POST['title'];
$newsEventDate = $_POST['date'];
$newsEventDescription = $_POST['description'];
$newsEventImage = $_FILES['imageUpload']["name"];

#saving image into a directory
move_uploaded_file($_FILES['imageUpload']['tmp_name'], "images/".$_FILES['imageUpload']["name"]);

#accessing image location for display
$imagePath = "images/" . $_FILES["imageUpload"]["name"];
$sqlQuery = "INSERT INTO newseventtable (id, Title, NEDate, Description, Image) 
             VALUES ('0', '$newsEventTitle', '$newsEventDate', '$newsEventDescription', '$newsEventImage')";

if (mysqli_query($connectionKeys, $sqlQuery)) {
?>

<!DOCTYPE html>
<html>
</html>
<head>
  <link rel="stylesheet" href="designFilesAndImages/newsFeedSystemDesign.css">
</head>
<body>
    
    <div class="promptBox">
        <p><b>Title: </b><?php echo $newsEventTitle;?></p>
        <p><b>Date: </b><?php echo $newsEventDate;?></p>
        <p><b>Description: </b><?php echo $newsEventDescription;?></p>
        <p><b>Image:<br></b><center><img src='<?php echo $imagePath?>' height=300 width=400 /></center></p>
        <br>

        <p>This News/Event record was <b>published successfully...</b></p>
        


        <form action="addNews.php">
                <input type="submit" value="Continue" />
        </form>
    </div>

</body>

<?php

}else{
    echo "Database Error! Contact IT Department Immediately.<br>";
    echo "Error: " . $sqlQuery . "<br>" . mysqli_error($connectionKeys);
}
    
mysqli_close($connectionKeys);

?>

