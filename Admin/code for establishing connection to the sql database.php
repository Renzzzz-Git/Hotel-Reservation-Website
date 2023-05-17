<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "firefly_hotel";

// Establishing connection to the sql database
$connectionKeys = mysqli_connect($servername, $username, $password, $databasename);

// Checking if the connection was successfully established
if ($connectionKeys->connect_error) {
    die("Connection to Database Failed." . $connectionKeys->connect_error);
}
?>