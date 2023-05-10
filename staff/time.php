<?php
    date_default_timezone_set('Asia/Manila');
    $username = $_SESSION['username'];
    $datetime = date("Y-m-d H:i:s");
    

    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
		$fetch = $query->fetch_array();
    $get_timeIn = $fetch['time_in'];
    $get_timeOut = $fetch['time_out'];

    if($get_timeIn == '0000-00-00 00:00:00'){
      $timeIn = 'You have not timed-in for the next shift';
    }
    else{
      $timeIn = '' . $get_timeIn;
    }

    if($get_timeOut == '0000-00-00 00:00:00'){
      $timeOut = 'You have not timed-out for this shift';
    }
    else{
      $timeOut = '' . $get_timeOut;
    }
        
?>