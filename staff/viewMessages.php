<?php

    //session_start();
    //Getting Member ID of User
    $member_id = $_GET['memberid'];
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `message` WHERE `member_id` = '$member_id'") or die(mysqli_error());
    $fetch = $query->fetch_all();
	$row = $query->num_rows;



 




?>