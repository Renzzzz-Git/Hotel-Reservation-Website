<?php

    //session_start();
    //Getting Member ID of User
    //sender = member && receiver = employee
    $sender_id = $_SESSION['member_id'];
    $receiver_id = '0001';
    $output = "";
    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');

    $query = $conn->query("SELECT * FROM `message` WHERE `sender_id` = '$sender_id' AND `receiver_id` = '$receiver_id' OR `sender_id` = '$receiver_id' AND `receiver_id` = '$sender_id'") or die(mysqli_error());

	$row = $query->num_rows;

    if($row > 0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            if($row[''])
        }
    }

 




?>