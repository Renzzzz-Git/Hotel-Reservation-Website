<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }

   
?>



<?php include 'viewMessages.php'?>
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
<div class="wrapper">
		<section class="form login">
			<header>Staff Chat Service </header> 
			<br>
			<p>Note: Refresh Browser to update messages</p><a href="../Php/logout.php"><button>Logout</button></a>
			<?php
    
    echo 'Your ID:' . $_GET['memberid'];

?>
            <br><br>
			<div class="chatwrap">
				<div class="scrollBox">
					<?php 
							foreach($fetch as $message)
							{
								echo "<br>" . $message['1'] . "
                                <p>Reply: " . "<input type=\"text\" name=\"message\" id=\"message\" value=\"" . $message['2'] . "\"" . ">" . "</p><br>";
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
						<input type="submit" value="Submit"  >
					</div>
				</div>
			</form>


			
		</section>
	</div>
        

    <a href="chatusers.php">Go back</a>
</body>
</html>