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
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/chat2.css">
    <title>Member Chat</title>
</head>
<body>


<?php include 'viewMessages.php'?>


<!--NAVBAR-->
<a href="homepage.php"><img src="../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px"></a>
    <ul>
        <div class="leftlinks">
        <li><a href="#hotel">Home</a></li>
        <li><a href="display/Courtyard.php">Rooms</a></li>
        <li><a href="Reservation.php">Reservation</a></li>
        <li><a href="newsfeed.php">News Feed</a></li>
        <li><a href="#about">About</a></li>
        </div>
        <li style="float:right;"><a href="../Php/logout.php">Logout</a></li>
    </ul>

    <div class="box_center">
        <div class="main_box">
            <header>Chat to Staff</header>
            <br>
            <div class="scrollBox">
                <?php 
                    foreach($msg as $message)
                        {
                            echo "<br><br> Message: " .  $message['1'] . "<br>";
                            echo "Reply: " . $message['2'] . "<br><br>";
                        }

                ?>
            </div>


            <br>

            <form action="sendMessages.php" method="POST" enctype="multipart/form-data" autocomplete="off">

                    <input type="text" name="message" id="message" placeholder="Enter your message" required>

                    <br>
                    <input type="submit" value="Send"  class="button">

            </form>
        </div>
    </div>
    
</body>
</html>