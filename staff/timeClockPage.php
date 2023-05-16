<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Time Clock</title>
    <link href="../css/chat.css"  rel = "stylesheet" type = "text/css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>



</head>

<body>
    <?php include 'time.php';?>
    
    <section class="form login">
    <div class="timewrap">
        <header>Welcome Employee <?php echo $_SESSION['username']; ?></header>
        <h3>Time In: <?php echo $timeIn; ?></h3>  
        <h3>Time Out: <?php echo $timeOut; ?></h3>
        <a href="timeClockPage.php"><button>Refresh Date Time</button></a>
        <br><br>
        <form action="timeIn.php" method="POST">
            <label for="time_in">Time In:</label>
            <input type="datetime-local" id="time_in" name="time_in" value="<?php echo $datetime?>" disabled><br><br>
            <input type="submit" value="Submit" id="button1" <?php echo $disable1?>> 
                                                    <!--value of disabling the submit button is passed-->
        </form>

        <br>

        <form action="timeOut.php" method="POST">
            <label for="time_out">Time Out:</label>
            <input type="datetime-local" id="time_out" name="time_out" value="<?php echo $datetime?>" disabled><br><br>
            <input type="submit" value="Submit" id="button2" <?php echo $disable2?>>
        </form>

        <div>Click here to<a href="../Php/logout.php"> Logout</a></div>
        <div>Click here to Reply to Members' Messages<a href="chatusers.php"> Chat</a></div>
        
        <br>


        <h3>Schedule of time-in: <?php echo date("h:i A", strtotime($schedtimeIn))?></h3>
        <h3>Schedule of time-out: <?php echo date("h:i A", strtotime($sched_timeout))?></h3>
    </div>
    </section>
    

</body>
</html>