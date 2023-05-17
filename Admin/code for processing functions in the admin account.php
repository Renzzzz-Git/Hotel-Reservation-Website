<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
    
?>

<?php
include("code for establishing connection to the sql database.php");

#Retriving Title, Date, Description, and Image
$newsEventTitle = $_POST['title'];
$newsEventDate = $_POST['date'];
$newsEventDescription = $_POST['description'];
$newsEventImage = $_FILES['imageUpload']["name"];

#saving image into a directory
move_uploaded_file($_FILES['imageUpload']['tmp_name'], "images/".$_FILES['imageUpload']["name"]);

#accessing image location for display
$imagePath = "images/" . $_FILES["imageUpload"]["name"];
echo $imagePath;
$sqlQuery = "INSERT INTO newseventtable (id, Title, NEDate, Description, Image) 
             VALUES ('0', '$newsEventTitle', '$newsEventDate', '$newsEventDescription', '$newsEventImage')";

if (mysqli_query($connectionKeys, $sqlQuery)) {
?>

<!DOCTYPE html>
<html>
</html>
<head>
  <link rel="stylesheet" href="../css/adminAccount.css">
</head>
<body>
    
    <div class="promptBox">
        <p><b>Title: </b><?php echo $newsEventTitle;?></p>
        <p><b>Date: </b><?php echo $newsEventDate;?></p>
        <p><b>Description: </b><?php echo $newsEventDescription;?></p>
        <p><b>Image:<br></b><center><?php echo "<img src=". $imagePath ." height=300 width=400 />";?></center></p>
        <br>

        <p>This News/Event record was <b>published successfully...</b></p>


        <form action="code for record input, display, and delete for the admin account.php">
                <input type="submit" value="Continue" />
        </form>
    </div>

</body>

<?php

}else{
    echo "Error: " . $sqlQuery . "<br>" . mysql_error($connectionKeys);
    }
    
mysqli_close($connectionKeys);

/*
References

move_uploaded_file($_FILES['imageUpload']['tmp_name'], "images/".$_FILES['imageUpload']["name"]);
https://stackoverflow.com/questions/46723424/how-to-upload-image-to-database-using-php-undefined-indeximages

https://meeraacademy.com/php-code-for-image-upload-and-display/

#https://www.w3schools.com/php/php_mysql_connect.asp
*/

?>

