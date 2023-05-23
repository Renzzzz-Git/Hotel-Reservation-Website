<?php
	//LOGIN CODE FOR CONNECTING MEMBER TO DATABASE
	if(ISSET ($_POST['member_login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        session_start();
        $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
		$query = $conn->query("SELECT * FROM `members` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['username'] = $fetch['username'];
			$_SESSION['member_id'] = $fetch['member_id'];
			header('location:Reservation.php');
		}else{
			echo "<center><label style = 'color:red;'>Invalid username or password</label></center>";
		}
	}




	//LOGIN CODE FOR CONNECTING STAFF TO DATABASE
	if(ISSET ($_POST['staff_login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        session_start();
        $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
		$query = $conn->query("SELECT * FROM `employees` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['username'] = $fetch['username'];
			$_SESSION['emp_id'] = $fetch['emp_id'];
			header('location:attendance.php');
		}else{
			echo "<center><label style = 'color:red;'>Invalid username or password</label></center>";
		}
	}


	//LOGIN CODE FOR CONNECTING STAFF TO DATABASE
	if(ISSET ($_POST['admin_login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        session_start();
        $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['username'] = $fetch['username'];
			header('location:AddNews.php');
		}else{
			echo "<center><label style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>