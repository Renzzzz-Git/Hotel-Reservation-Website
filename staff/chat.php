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
			<p>Note: Refresh Browser to update messages</p>
			<a href="chatusers.php"><button>Go back to Chat Users</button></a>
			<a href="../Php/logout.php"><button>Logout</button></a>
			<?php
    
    echo 'Your ID:' . $_GET['memberid'];

		?>
            <br><br>
            
			<div class="chatwrap">
				<div class="scrollBox">
					<?php 
							foreach($fetch as $message)
							{
								echo "<br> <label>Message: </label>" . $message['1'] . "
                                <form action=\"updateReply.php\" method=\"POST\" enctype=\"multipart/form-data\" autocomplete=\"off\">
									<p>Reply: " . "<input type=\"text\" name=\"reply\" id=\"reply\" value=\"" . $message['2'] . "\"" . ">" . "</p>
									<input type=\"submit\" value=\"Update\">
									<input type=\"hidden\" name=\"messageID\" value=\"" . $message['0'] . "\">
									<input type=\"hidden\" name=\"memberid\" value=\"" . $_GET['memberid'] . "\">
                                </form>
                                <br>";
							}

						?>
				</div>

				
			</div>		
		</section>
	</div>
        
</body>
</html>