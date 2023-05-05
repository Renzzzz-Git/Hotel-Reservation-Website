<?php
session_start();

if(!isset($_SESSION['username'])){
	header('location:index.php');
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hotel Reservation System</title>
	<link href="../css/chat.css"  rel = "stylesheet" type = "text/css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
	<div class="wrapper">
		<section class="form login">
			<header>Welcome <?php echo $_SESSION['username']; ?></header>
			<form method="post">
				<div class="name-details">
					<div class="field input">
						<label>Email Address</label>
						<input type="text" placeholder="Enter your email" required>
					</div>
					<div class="field input">
						<label>Password</label>
						<input type="password" placeholder="Enter your password" required>
					</div>
					<div class="field button">
						<input type="submit" value="Login" >
					</div>
				</div>
			</form>
		</section>
		
	</div>

	<div>Click here to<a href="../Php/logout.php"> Logout</a></div>
</body>
</html>

