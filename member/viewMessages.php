<?php

    //session_start();
    //Getting Member ID of User
    $member_id = $_SESSION['member_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `message` WHERE `member_id` = '$member_id'") or die(mysqli_error());
    $msg = $query->fetch_all(); //Fetching all messages of the user, fetch variable is to be used in the html file
	$row = $query->num_rows;





?>