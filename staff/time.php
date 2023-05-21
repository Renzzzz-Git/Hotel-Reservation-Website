<?php
    date_default_timezone_set('Asia/Manila');
    $username = $_SESSION['username'];
    $id = $_SESSION['emp_id'];
    $datetime = date("Y-m-d H:i:s");
    
    //For Fetching data of the current TimeIn and TimeOut of staff members
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
		$fetch = $query->fetch_array();
    $get_timeIn = $fetch['time_in'];
    $get_timeOut = $fetch['time_out'];
    $schedtimeIn = $fetch['sched_timeIn'];
    $sched_timeout = $fetch['sched_timeOut'];

    //if timeIn is set to zeros then this passes the a value that says you have not timed in yet
    //also passes a value '' which is an empty string for disable variable so that submit will be enabled
    

    if($get_timeIn == '0000-00-00 00:00:00'){
      $timeIn = 'You have not timed-in for the next shift';
      $disable1 = '';
    }
    else{
      $timeIn = '' . $get_timeIn; //if time in has a value in the database then button for submit is disabled
      $disable1 = 'disabled';
    }


    if($get_timeOut == '0000-00-00 00:00:00'){ //if time out does not have a value then the display in the html will show that user has not timed out yet  and the submit button is enabled
      $timeOut = 'You have not timed-out for this shift';
      $disable2 = '';
    }
    elseif($get_timeOut == date("Y-m-d H:i:s", mktime(0,0,0,10,3,1975))){ //if the date is set to 1975 then the user forgot to timeout, this also automatically disables the submit button for timeout
      $timeOut = 'You forgot to time-out today';
      $disable2 = 'disabled';
      $disable1 = '';
    }
    else{
      $timeOut = '' . $get_timeOut; // When submit button for time out is clicked timoout data is passed and submit button for timout is disabled by passing a string value of 'disabled' to the button in the html using the disable2 variable.
      $disable2 = 'disabled';
    }

    
    $connDB = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $timeQuery = $connDB->query("SELECT * FROM `timerecord` WHERE `emp_id` = '$id'");
    $timeFetch = $timeQuery->fetch_all();
    

?>