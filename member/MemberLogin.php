<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hotel Reservation System</title>
	<link href="../css/login.css"  rel = "stylesheet" type = "text/css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
	<div class="wrapper">
		<section class="form login">
			<header>Member Login</header>
			<form method="POST">
				<div class="name-details">
					<div class="field input">
						<label>Username</label>
						<input type="text" placeholder="Enter your username" name="username" required>
					</div>
					<div class="field input">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter your password" required>
					</div>
					<div class="field button">
						<input type="submit" value="Login" name="member_login" >
					</div>
				</div>
			</form>
			<?php require_once '../Php/login.php'?>
		</section>
		
	</div>
</body>
</html>
