<?php

include("code for establishing connection to the sql database.php");

$rowToBeDeleted = $_POST['rowID'];

#Look if the id exist in the database
$sqlSearchQuery = "SELECT id FROM newseventtable WHERE id = $rowToBeDeleted";
$searchResult = mysqli_query($connectionKeys, $sqlSearchQuery);
$dataRetrieve = mysqli_fetch_assoc($searchResult);

#If there is no data retrive due to ID does not exist, set dataRetrieve variable to 0, to prevent error in if else
if($dataRetrieve == Null){
  $dataRetrieve = array("id" => "0");
}

if ($dataRetrieve['id'] == $rowToBeDeleted) { 
$sqlQuery = "SELECT Title, NEDate, Description, Image FROM newseventtable WHERE id = $rowToBeDeleted";
$result = mysqli_query($connectionKeys, $sqlQuery);
$data = mysqli_fetch_assoc($result)
?>
        <!DOCTYPE html>
        <html>
        </html>
        <head>
          <link rel="stylesheet" href="../css/adminAccount.css">
        </head>
        <body>

         <div class="promptBox">
                <p><b>ID: </b><?php echo $rowToBeDeleted; ?></p>
                <p><b>Title: </b><?php echo $data['Title']; ?></p>
                <p><b>Date: </b><?php echo $data['NEDate']; ?></p>
                <p><b>Description: </b><?php echo $data['Description']; ?></p>
                <p><b>Image:<br></b><center><?php echo"<img src = images/" . $data['Image'] ." height=300 width=400 />";?></center></p>
                <br>
<?php
      $sqlDeleteRowQuery = "DELETE FROM newseventtable WHERE id = $rowToBeDeleted";
      mysqli_query($connectionKeys, $sqlDeleteRowQuery)
?>

        <p>This News/Event record was <b>deleted successfully...</b></p>

        <form action="code for record input, display, and delete for the admin account.php">
                <input type="submit" value="Continue" />
        </form>
        </div>
        </body>

<?php

  } else {
?>

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
          <link rel="stylesheet" href="css/adminAccount.css">
        </head>
        <body>

        <div class="promptBox">

        <p>The ID inputted <b>does not exist...</b></p>

        <form action="code for record input, display, and delete for the admin account.php">
                <input type="submit" value="Continue" />
        </form>

        </div>
        </body>

<?php
  }

  mysqli_close($connectionKeys);

?>