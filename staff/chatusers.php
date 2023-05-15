<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }

   
?>

<?php include 'viewchatusers.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="../css/chat.css"  rel = "stylesheet" type = "text/css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="userswrap">
		<section class="form login">
			<header>Customer Chat Service </header> 
			<br>
			<a href="../Php/logout.php"><button>Logout</button></a>
			<br><br>

			<div class="userScrollBox">
					<?php 
						foreach($fetch as $user)
						{
							echo "<br> <a href=\"chat.php?memberid=" . $user['0'] . "\">" . $user['1'] . ' ' . $user['2'] . "</a><br>";
						}
							
					?>
			</div>




			
		</section>
</div>
    
</body>
</html>

