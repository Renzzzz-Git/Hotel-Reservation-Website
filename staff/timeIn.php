<?php
    session_start();
    date_default_timezone_set('Asia/Manila');
    $timeDate = date("Y-m-d H:i:s");
    $username = $_SESSION['username'];

    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $id = $fetch['emp_id'];
    $time_id = uniqid();
    $sql = "UPDATE employees SET `time_in`='$timeDate' WHERE `emp_id`= '$id'";
    $null = "UPDATE employees SET `time_out`='0000-00-00 00:00:00' WHERE `emp_id`= '$id'";
    $Out_time = '0000-00-00 00:00:00';
    $timeIn_Out = "INSERT INTO `timerecord` (time_id, time_in, time_out, emp_id) VALUES ('$time_id', '$timeDate', '$Out_time', '$id')";
    
    if ($conn->query($sql) === TRUE && $conn->query($null) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

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
    header('location:timeClockPage.php');


?>