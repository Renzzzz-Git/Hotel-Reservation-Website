<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }

   
?>

<?php include 'viewMessages.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat to Members</title>
    <link href="../css/chat.css"  rel = "stylesheet" type = "text/css" >
    <link href="../css/homepage.css"  rel = "stylesheet" type = "text/css" >
</head>
<body>
    
    <!--Navbar Section-->
    <img src="../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px">
    <ul>
        <div class="leftlinks">
            <li><a href="Staff_homepage.php">Home</a></li>
            <li><a href="display/Courtyard.php">Rooms</a></li>
            <li><a href="attendance.php">Attendance</a></li>
            <li><a href="chatusers.php">Chat</a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a href="#about">About</a></li>
        </div>
        <li style="float:right;"><a href="../Php/logout.php">Logout</a></li>
    </ul>

    <div class="box_center1">
        <div class="main_box2">
            <header>Chat to Member</header>
            <hr>
            <div class="scrollBox2">
                <?php 
					foreach($fetch as $message)
					{
						echo "<br> <label>Message: </label>" . $message['1'] . "
                            <form action=\"updateReply.php\" method=\"POST\" enctype=\"multipart/form-data\" autocomplete=\"off\">
                                <p>Reply: " . "<input type=\"text\" name=\"reply\" id=\"reply\" value=\"" . $message['2'] . "\"" . ">" . "</p>
                                <input type=\"submit\" value=\"Update\">
                                <input type=\"hidden\" name=\"messageID\" value=\"" . $message['0'] . "\">
                                <input type=\"hidden\" name=\"memberid\" value=\"" . $_GET['memberid'] . "\">
                            </form>
                            <br>";
					}
			    ?>                
            </div>
        </div>
    </div>
</body>
</html>