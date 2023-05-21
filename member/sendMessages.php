<?php

    session_start();
    $username = $_SESSION['username'];

    //Fetching data of members from database
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `members` WHERE `username` = '$username'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $id = $fetch['member_id'];
    $msg_id = uniqid();
    $content = $_POST['message'];


    //Query Statement for inserting message
    $sql = "INSERT INTO `message` (msg_id, msg, reply, member_id) VALUES ('$msg_id', '$content', '', '$id')";
    
    
    //Running query Statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    //Connection close and redirect back to chat page
    $conn->close();
    header('location:chat2.php');



?>