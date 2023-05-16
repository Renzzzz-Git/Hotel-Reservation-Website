<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>


<!--- HTML --->

<!DOCTYPE html>
<html>
<head>
  <title>Hotel Reservation Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
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
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
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
      <label for="num-of-pax">Number of Pax:</label>
      <input type="number" id="num-of-pax" name="num-of-pax" required>
    </div>

    <div class="form-group">
      <label for="room-option">Room Option:</label>
      <select id="room-option" name="room-option">
        <option value="Penthouse">Penthouse</option> 
        <option value="Cottages">Cottages</option>
        <option value="Rooms in the West">Rooms in the West</option>
        <option value="Rooms in the East">Rooms in the East</option>
        <option value="Courtyard">Courtyard</option>
      </select>
    </div>

   <div class="form-group">
  <label for="payment-option">Payment Option:</label>
  <div>
    <input type="radio" id="bdo" name="payment-option" value="bdo" required>
    <label for="bdo">BDO</label>
  </div>
  <div>
    <input type="radio" id="bpi" name="payment-option" value="bpi" required>
    <label for="bpi">BPI</label>
  </div>
  <div>
    <input type="radio" id="other" name="payment-option" value="other" required>
    <label for="other">Other</label>
    <input type="text" id="other-payment" name="other-payment" placeholder="Enter other payment option" style="margin-top: 5px;">
  </div>
</div>

    <button type="submit">Submit</button>
  </form>
  <br>
  <a href="chat.php"><button>Chat</button></a>
  <a href="../Php/logout.php"><button>Logout</button></a>
</body>
</html>









