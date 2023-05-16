<?php

    //session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `members`");
    $fetch = $query->fetch_all();

?>