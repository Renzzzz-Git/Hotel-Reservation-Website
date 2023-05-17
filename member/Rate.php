<?php

session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }

// Replace the placeholders with your actual database credentials
$host = 'localhost';
$db = 'firefly_hotel';
$user = 'root';
$password = '';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $memberId = $_SESSION['member_id'];
  $rating = $_POST['rating'];
  $feedback = $_POST['feedback'];
  $date = date('Y-m-d');
  
  // Check if the member has a reservation
  $reservationQuery = $pdo->prepare("SELECT * FROM reservation WHERE member_id = :member_id");
  $reservationQuery->bindParam(':member_id', $memberId);
  $reservationQuery->execute();

  if ($reservationQuery->rowCount() > 0) {
      // Member has a reservation, proceed with rating and review
      $sql = "INSERT INTO ratereview (member_id, rating, review_text, review_date) 
              VALUES (:member_id, :rating, :feedback, :date)";
      $statement = $pdo->prepare($sql);
      $statement->bindParam(':member_id', $memberId);
      $statement->bindParam(':rating', $rating);
      $statement->bindParam(':feedback', $feedback);
      $statement->bindParam(':date', $date);

      if ($statement->execute()) {
          echo '<p>Thank you for your feedback!</p>';
      } else {
          echo '<p>Sorry, there was an error submitting your feedback.</p>';
      }
  } else {
      echo '<p>You must have a reservation to rate and review the hotel.</p>';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Star Rating and Feedback</title>
  <style>
    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
      text-align: center;
    }

    .rating input {
      display: none;
    }

    .rating label {
      display: inline-block;
      padding: 5px;
      font-size: 24px;
      color: #ddd;
      cursor: pointer;
    }

    .rating label:before {
      content: "\2605";
    }

    .rating input:checked ~ label,
    .rating input:checked ~ label ~ label {
      color: #ffc107;
    }

    .feedback {
      margin-top: 20px;
    }

    .feedback textarea {
      width: 100%;
      height: 100px;
      padding: 10px;
    }

    .feedback input[type="submit"] {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #4caf50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form method="POST">
    <div class="rating">
      <input type="radio" name="rating" id="star5" value="5">
      <label for="star5"></label>
      <input type="radio" name="rating" id="star4" value="4">
      <label for="star4"></label>
      <input type="radio" name="rating" id="star3" value="3">
      <label for="star3"></label>
      <input type="radio" name="rating" id="star2" value="2">
      <label for="star2"></label>
      <input type="radio" name="rating" id="star1" value="1">
      <label for="star1"></label>
    </div>

    <div class="feedback">
      <textarea name="feedback" placeholder="Leave your feedback"></textarea>
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>
