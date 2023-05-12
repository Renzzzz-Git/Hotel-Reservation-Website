<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<script>

        function disableButton1() {
            document.getElementById("button1").setAttribute('disabled',true)
            //document.getElementById("button2").setAttribute('disabled',false)
        }

        function disableButton2() {
            document.getElementById("button2").disabled = true;
            document.getElementById("button1").disabled = false;
        }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Time Clock</title>
</head>

<body>
    <?php include 'time.php';?>
    <header>Welcome Employee <?php echo $_SESSION['username']; ?></header>
    <h1>Time In: <?php echo $timeIn; ?></h1>  
    <h1>Time Out: <?php echo $timeOut; ?></h1>
    <a href="timeClockPage.php"><button>Refresh Date Time</button></a>
    <br><br><br>
    <form action="timeIn.php" method="POST">
		<label for="time_in">Time In:</label>
		<input type="datetime-local" id="time_in" name="time_in" value="<?php echo $datetime?>" disabled><br><br>
		<input type="submit" value="Submit" id="button1" <?php echo $disable1?>> 
                                                <!--value of disabling the submit button is passed-->
	</form>

    <br><br><br>

    <form action="timeOut.php" method="POST">
		<label for="time_out">Time Out:</label>
		<input type="datetime-local" id="time_out" name="time_out" value="<?php echo $datetime?>" disabled><br><br>
		<input type="submit" value="Submit" id="button2" <?php echo $disable2?>>
	</form>

    <div>Click here to<a href="../Php/logout.php"> Logout</a></div>
</body>
</html>