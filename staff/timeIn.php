<?php
    session_start();
    date_default_timezone_set('Asia/Manila');
    $timeDate = date("Y-m-d H:i:s");
    $username = $_SESSION['username'];

    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $id = $fetch['emp_id'];

    //Create uniqid for timerecord
    $time_id = uniqid();

    //Updating the employee's time-in attribute
    $sql = "UPDATE employees SET `time_in`='$timeDate' WHERE `emp_id`= '$id'";
    //Time out attribute for employee is set to a bunch of zeroes since there is no value for timeout yet 
    $null = "UPDATE employees SET `time_out`='0000-00-00 00:00:00' WHERE `emp_id`= '$id'";
    $Out_time = '0000-00-00 00:00:00';

    //Query line for creating the timerecord
    $timeIn_Out = "INSERT INTO `timerecord` (time_id, time_in, time_out, emp_id) VALUES ('$time_id', '$timeDate', '$Out_time', '$id')";
    

    //Making sure query for time in and time out attributes are done
    if ($conn->query($sql) === TRUE && $conn->query($null) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


    //Time Record Query
    if ($conn->query($timeIn_Out) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $timeIn_Out . "<br>" . $conn->error;
    }

    if ($conn->query($null) === TRUE) {
         echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    header('location:attendance.php');


?>