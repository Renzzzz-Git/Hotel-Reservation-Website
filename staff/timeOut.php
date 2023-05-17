<?php
    session_start();
    date_default_timezone_set('Asia/Manila');
    $timeDate = date("Y-m-d H:i:s");
    $forgot_timeOut = date("Y-m-d H:i:s", mktime(0,0,0,10,3,1975));
  
    $username = $_SESSION['username'];

    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $id = $fetch['emp_id'];
    $time_in = $fetch['time_in'];
    $time_out = $fetch['time_out'];
    $sched_timeout = $fetch['sched_timeOut'];

    $overtime = date("Y-m-d H:i:s", strtotime(strval($sched_timeout) . ' + 2 hours'));
    $update_timeOut = "UPDATE employees SET `time_out`='$timeDate' WHERE `emp_id`= '$id'";
    $update_timeRecord = "UPDATE timerecord SET `time_out`='$timeDate' WHERE `emp_id`= '$id' && `time_in` = '$time_in'";
    $null = "UPDATE employees SET `time_in`='0000-00-00 00:00:00' WHERE `emp_id`= '$id'";
    
    if(strtotime($timeDate) > strtotime($time_in) && strtotime($timeDate) < strtotime($overtime)){

        $sql = "UPDATE timerecord SET `time_out`='$forgot_timeOut' WHERE `emp_id`= '$id' && `time_in` = '$time_in'";
        $null = "UPDATE employees SET `time_in`='0000-00-00 00:00:00' WHERE `emp_id`= '$id'";

    }
    
    if($timeDate >  $overtime)
    {
        $sql = "UPDATE timerecord SET `time_out`='$forgot_timeOut' WHERE `emp_id`= '$id' && `time_in` = '$time_in'";
        $null = "UPDATE employees SET `time_out`='$forgot_timeOut' WHERE `emp_id`= '$id'";  
        $update_timeOut = "UPDATE employees SET `time_out`='$forgot_timeOut' WHERE `emp_id`= '$id'";
        $update_timeRecord = "UPDATE timerecord SET `time_out`='$forgot_timeOut' WHERE `emp_id`= '$id' && `time_in` = '$time_in'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if ($conn->query($null) === TRUE) {
        echo "Record updated successfully";
    } else {
       echo "Error updating record: " . $conn->error;
    }    
    
    if ($conn->query($update_timeOut) === TRUE) {
        echo "Record updated successfully";
    } else {
       echo "Error updating record: " . $conn->error;
    }
    
    if ($conn->query($update_timeRecord) === TRUE) {
        echo "Record updated successfully";
    } else {
       echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    header('location:timeClockPage.php');


?>