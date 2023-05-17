<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php include 'viewMessages.php'?>
<?php include 'reservationCheckDB.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hotel Reservation System</title>
	<link href="../css/chat.css"  rel = "stylesheet" type = "text/css" >
	<link href="../css/homepage.css"  rel = "stylesheet" type = "text/css" >
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<body>
	<ul>
		<li id="name"><a href="Memberhomepage.php">Home</a></li>
		<li id="name"><a href="Reservation.php">Reservation</a></li>
		<li id="name"><a href="chat.php">Chat</a></li>
		<li id="name"><a href="#Rate">Ratings</a></li>
		<li class="font1"><a href="#newsfeed">News Feed</a></li>
		<li class="font1"><a href="../Php/logout.php">Logout</a></li>
	</ul>


	<div class="wrapper">
		<section class="form login">
			<header>Customer Chat Service </header> 
			<br>
			<a href="chat.php"><button>Refresh Messages</button>
			 <a href="../Php/logout.php"><button>Logout</button></a>
			<br><br>
			<div class="chatwrap">
				<div class="scrollBox">
					<?php 
							foreach($msg as $message)
							{
								echo "<br><br> Message: " .  $message['1'] . "<br>";
								echo "Reply: " . $message['2'] . "<br><br>";
							}

						?>
				</div>

				
			</div>
			<form action="sendMessages.php" method="POST" enctype="multipart/form-data" autocomplete="off">
				<div class="name-details">
					<div class="field input">
						<input type="text" name="message" id="message" placeholder="Enter your message" required>
					</div>
					<div class="field button">
						<input type="submit" value="Send"  >
					</div>
				</div>
			</form>


			
		</section>
	</div>
</body>
</html>
