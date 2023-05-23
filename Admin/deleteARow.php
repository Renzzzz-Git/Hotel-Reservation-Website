<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php

include("databaseConnect.php");

$rowToBeDeleted = $_GET['rowID'];

$sqlQuery = "SELECT Title, NEDate, Description, Image FROM newseventtable WHERE id = $rowToBeDeleted";
$result = mysqli_query($connectionKeys, $sqlQuery);
$data = mysqli_fetch_assoc($result);

$imagePath = "images/" . $data['Image'];
?>
        <!DOCTYPE html>
        <html>
        </html>
        <head>
  <link rel="stylesheet" href="designFilesAndImages/newsFeedSystemDesign.css">
        </head>
        <body>
<?php

      $sqlDeleteRowQuery = "DELETE FROM newseventtable WHERE id = $rowToBeDeleted";
      mysqli_query($connectionKeys, $sqlDeleteRowQuery);
?>
        <div class="promptBox">
        <p>News/Event Feed with the ID Number <?php echo $rowToBeDeleted; ?> was <b>deleted successfully...</b></p>

        <form action="newsFeedSystem.php">
                <?php unlink($imagePath);?>
                <input type="submit" value="Continue" />
        </form>
        </div>
        </body>

<?php

  mysqli_close($connectionKeys);

?>