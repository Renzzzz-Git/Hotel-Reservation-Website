<?php
	if(ISSET ($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        session_start();
        $conn = mysqli_connect('localhost', 'root', '', 'hotel-reservation-system') or die('Unable to connect');
		$query = $conn->query("SELECT * FROM `members` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['username'] = $fetch['username'];
			header('location:chat.php');
		}else{
			echo "<center><label style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>