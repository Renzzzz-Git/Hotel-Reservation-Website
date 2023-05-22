<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }

   
?>

<?php include 'time.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Attendence</title>
    <link href="../css/Staff.css"  rel = "stylesheet" type = "text/css" >
    <link href="../css/homepage.css"  rel = "stylesheet" type = "text/css" >


    </style>
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

    <!--Attendance for Time in and time out box-->
    <div class="box_center">
        <div class = "main_box">
            <!--Making a flexbox to make sure the objects are side by side-->
            <div class="flex_box">
                <form class="flex_box" action="timeIn.php" method="POST">
                    <input class="colours" type="submit" value="Time-in" style="margin-right:10px">
                    <input type="datetime-local" id="time_in" name="time_in" value="<?php echo $datetime?>" disabled><br><br>
                </form>

                <form class="flex_box" action="timeOut.php" method="POST">
                    <input class="colours" type="submit" value="Time-out" style="margin-right:10px">
                    <input type="datetime-local" id="time_in" name="time_in" value="<?php echo $datetime?>" disabled><br><br>
                </form>

                <div class="flex_box">
                    <a href="attendance.php" style="margin-left: -40px;"><button class="button">Refresh Time</button></a>
                </div>
                
            </div>

            <div>
                <div class="flex_box">
                    <p>Time In: <?php echo $timeIn; ?></p> 
                    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Time Out: <?php echo $timeOut; ?></p>
                </div>
            </div>
        </div>



        <!--Table for user's time in and time out records, box-->
        <div class="main_box">
            <table>
                <tr>
                    <th>Username</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
                <?php
                    foreach($timeFetch as $time)
                    {
                        echo "<tr>
                            <td>" . $username . "</td>
                            <td>" . $time['1'] . "</td>
                            <td>" . $time['2'] . "</td>
                        </tr>";
                    }
                    
                ?>
            </table>
        </div>
    </div>
    
    
</body>
</html>