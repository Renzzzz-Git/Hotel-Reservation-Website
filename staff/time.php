<?php
    date_default_timezone_set('Asia/Manila');
    $username = $_SESSION['username'];
    $datetime = date("Y-m-d H:i:s");
    
    //For Fetching data of the current TimeIn and TimeOut of staff members
    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
		$fetch = $query->fetch_array();
    $get_timeIn = $fetch['time_in'];
    $get_timeOut = $fetch['time_out'];
    $schedtimeIn = $fetch['sched_timeIn'];
    $sched_timeout = $fetch['sched_timeOut'];

    //if timeIn is set to zeros then this passes the a value that says you have not timed in yet
    //also passes a value for disable variable to
    

    if($get_timeIn == '0000-00-00 00:00:00'){
      $timeIn = 'You have not timed-in for the next shift';
      $disable1 = '';
    }
    else{
      $timeIn = '' . $get_timeIn;
      $disable1 = 'disabled';
    }


    if($get_timeOut == '0000-00-00 00:00:00'){
      $timeOut = 'You have not timed-out for this shift';
      $disable2 = '';
    }
    elseif($get_timeOut == date("Y-m-d H:i:s", mktime(0,0,0,10,3,1975))){
      $timeOut = 'You forgot to time-out today';
      $disable2 = 'disabled';
      $disable1 = '';
    }
    else{
      $timeOut = '' . $get_timeOut;
      $disable2 = 'disabled';
    }

    

?>