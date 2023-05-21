<?php

    session_start();
    $username = $_SESSION['username'];
    $sender_id = $_SESSION['member_id'];
    $receiver_id = '0001';

    //Fetching data of members from database
    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
    $content = $_POST['message'];


    //Query Statement for inserting message
    $sql = "INSERT INTO `message` (sender_id, receiver_id, msg) VALUES ('$sender_id', '$receiver_id', '$content')";
    
    
    //Running query Statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    //Connection close and redirect back to chat page
    $conn->close();
    header('location:chat.php');



?>