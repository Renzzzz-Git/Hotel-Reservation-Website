<?php
    session_start();
    date_default_timezone_set('Asia/Manila');
    $timeDate = $_POST['time_out'];
    $username = $_SESSION['username'];

    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $id = $fetch['emp_id'];
    $time_in = $fetch['time_in'];
    $time_id = uniqid();
    
    $sql = "INSERT INTO `timerecord` (time_id, time_in, time_out, emp_id) VALUES ('$time_id', '$time_in', '$timeDate', '$id')";
    $update_timeOut = "UPDATE employees SET `time_out`='$timeDate' WHERE `emp_id`= '$id'";
    $null = "UPDATE employees SET `time_in`='0000-00-00 00:00:00' WHERE `emp_id`= '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
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
    
    
    $conn->close();
    header('location:timeClockPage.php');


?>