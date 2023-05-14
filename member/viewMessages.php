<?php

    //session_start();
    //Getting Member ID of User
    $member_id = $_SESSION['member_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `message` WHERE `member_id` = '$member_id'") or die(mysqli_error());
    $fetch = $query->fetch_all();
	$row = $query->num_rows;



 




?>