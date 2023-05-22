<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php include 'reservationCheckDB.php'?>

<!--- HTML --->

<!DOCTYPE html>
<html>
<head>
    <!-----------CSS FOR NAV BAR---------------------------------------->

  <link rel="stylesheet" href="../css/homepage.css">

  <title>Hotel Reservation Form</title>

  <!-------------------------CSS FOR FORM ONLY!!!------------------------>
  <style>

    body{

        font-family:arial;
      
  
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
      margin-left:500px;
      margin-right:500px;

    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left:500px;
    }

    button:hover {
      background-color: #45a049;
    }

    .payment-options {
  display: flex;
  flex-direction: column;
}

.option {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.other-input {
  margin-top: 5px;
}

    

  </style>

</head>
<body>

<!---------------------------------NAV BAR-------------------------------->
<?php include 'reservationCheckDB.php'?>
<img src="../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px">
  <ul>
    <div class="leftlinks">
      <li><a href="Memberhomepage.php">Home</a></li>
      <li><a href="display/Courtyard.php">Rooms</a></li>
      <li><a href="Reservation.php">Reservation</a></li>
      <li><a href="Rate.php" class="<?php echo $disable?>">Rate</a></li>
      <li><a href="newsfeed.php">News Feed</a></li>
      <li><a href="#about">About</a></li>
    </div>
    <li style="float:right;"><a href="../Php/logout.php">Logout</a></li>
  </ul>

  <!-----------------------------FORM--------------------------------------->

  <h2>Hotel Reservation</h2>
  <form method="POST" action="reservationDB_conn.php">
    <div class="form-group">
      <label for="first-name">First Name:</label>
      <input type="text" id="first-name" name="first-name" required>
    </div>

    <div class="form-group">
      <label for="arrival-d">Arrival Date:</label>
      <input type="date" id="arrival-d" name="arrival-d" required>
    </div>

    <div class="form-group">
      <label for="last-name">Last Name:</label>
      <input type="text" id="last-name" name="last-name" required>
    </div>

    <div class="form-group">
      <label for="departure-d">Departure Date:</label>
      <input type="date" id="departure-d" name="departure-d" required>
    </div>

    <div class="form-group">
      <label for="contact-number">Contact Number:</label>
      <input type="text" id="contact-num" name="contact-num" required>
    </div>

    <div class="form-group">
      <label for="num-of-pax">Number of People:</label>
      <input type="number" id="num-of-pax" name="num-of-pax" required>
    </div>

    <div class="form-group">
      <label for="room-num">Room Number:</label>
      <input type="number" id="room-num" name="room-num" required>
    </div>

      </select>
    </div>
    <div class="form-group">
  <label for="payment-option">Payment Option:</label>
  <div class="payment-options">
    <div class="option">
      <input type="radio" id="bdo" name="payment-option" value="bdo" required>
      <label for="bdo">BDO</label>
    </div>
    <div class="option">
      <input type="radio" id="bpi" name="payment-option" value="bpi" required>
      <label for="bpi">BPI</label>
    </div>
    <div class="option">
      <input type="radio" id="other" name="payment-option" value="other" required>
      <label for="other">Other</label>
    </div>
  </div>
  <div class="other-input">
    <input type="text" id="other-payment" name="other-payment" placeholder="Enter other payment option">
  </div>
</div>




    <button type="submit">Submit</button>
  </form>

  <br>

</body>
</html>