<?php

    session_start();
    $username = $_SESSION['username'];
    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `members` WHERE `username` = '$username'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $id = $fetch['member_id'];
    $msg_id = uniqid();
    $content = $_POST['message'];

    $sql = "INSERT INTO `message` (msg_id, msg, reply, member_id) VALUES ('$msg_id', '$content', '', '$id')";
        
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    $conn->close();
    header('location:chat.php');



?>