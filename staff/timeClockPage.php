<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Time Clock</title>
</head>

<body>
    <header>Welcome Employee <?php echo $_SESSION['username']; ?></header>
    <div>Click here to<a href="../Php/logout.php"> Logout</a></div>
</body>
</html>