<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php
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

// Retrieve form data
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$arrivalDate = $_POST['arrival-d'];
$departureDate = $_POST['departure-d'];
$contactNumber = $_POST['contact-num'];
$numOfPax = $_POST['num-of-pax'];
$roomOption = $_POST['room-option'];
$paymentOption = $_POST['payment-option'];

// Check if the member exists
$selectStmt = $pdo->prepare("SELECT member_id FROM members WHERE F_name = :first_name AND L_name = :last_name AND contact_num = :contact_No"); 
$selectStmt->bindParam(':first_name', $firstName);
$selectStmt->bindParam(':last_name', $lastName);
$selectStmt->bindParam(':contact_No', $contactNumber);
$selectStmt->execute();
$memberId = $selectStmt->fetchColumn();

if ($memberId) {
    // Member exists, proceed with the reservation
    // Check if the selected room is available
    $selectRoomStmt = $pdo->prepare("SELECT room_id FROM room WHERE room_name = :room_name AND occupancy >= :no_of_guests AND availability = 'yes'"); 
    $selectRoomStmt->bindParam(':room_name', $roomOption);
    $selectRoomStmt->bindParam(':no_of_guests', $numOfPax);
    $selectRoomStmt->execute();
    $roomId = $selectRoomStmt->fetchColumn();

  

    if ($roomId) {
        // Room is available, insert the reservation
        // Prepare the SQL statement

        // Update the availability of the room to 'no'
        $updateRoomStmt = $pdo->prepare("UPDATE room SET availability = 'no' WHERE room_id = :room_id");
        $updateRoomStmt->bindParam(':room_id', $roomId);
        $updateRoomStmt->execute();

        // Calculate the number of nights
        $arrivalDateObj = new DateTime($arrivalDate);
        $departureDateObj = new DateTime($departureDate);
        $numberOfNights = $arrivalDateObj->diff($departureDateObj)->format('%a');


        // Calculate the total bill
        $selectRoomStmt = $pdo->prepare("SELECT price FROM room WHERE room_id = :room_id");
        $selectRoomStmt->bindParam(':room_id', $roomId);
        $selectRoomStmt->execute();
        $price = $selectRoomStmt->fetchColumn();

        $totalBill = $price * $numberOfNights;

        // Output the total bill
        echo "Total Bill: $" . $totalBill;
        echo "\n";
       

        // Convert the DateTime objects to formatted strings
        $arrivalDate = $arrivalDateObj->format('Y-m-d');
        $departureDate = $departureDateObj->format('Y-m-d');

        // Insert data into the Bill table
        $insertBillStmt = $pdo->prepare("INSERT INTO bill (reservation_id, total_amount) 
                                        VALUES (:reservation_id, :total_amount)");
        $insertBillStmt->bindParam(':reservation_id', $reservationId);
        $insertBillStmt->bindParam(':total_amount', $totalBill); 
      
        
        // Checks if departure date is not equal to arrival date
        if($departureDate > $arrivalDate){

        // Execute the prepared statement
        try {
            $pdo->beginTransaction();

             // Insert into the Reservation table
            $insertStmt = $pdo->prepare("INSERT INTO reservation (member_id, room_id, a_date, d_date, no_of_pax) 
            VALUES (:member_id, :room_id, :a_date, :d_date, :no_of_pax)");
            $insertStmt->bindParam(':member_id', $memberId);
            $insertStmt->bindParam(':room_id', $roomId);
            $insertStmt->bindParam(':a_date',  $arrivalDate); 
            $insertStmt->bindParam(':d_date', $departureDate); 
            $insertStmt->bindParam(':no_of_pax', $numOfPax);

            // Execute the insert statement for the reservation
            $insertStmt->execute();

            // Get the reservation_id
            $reservationId = $pdo->lastInsertId();

            // Execute the insert statement for the bill
            $insertBillStmt->execute();


            $pdo->commit();
            echo "Your reservation number is $reservationId <br>";
            echo "Reservation submitted successfully!";
        } catch (PDOException $e) {
            $pdo->rollBack();
            echo "Error: " . $e->getMessage();
        }
      }
      else{
        echo "The departure date cannot be on the same day as the arrival date.";

      }
    } else {
        echo "The selected room is not available.";
    }
} else {
    echo "Member does not exist. Please provide valid information.";
}

// Close the database connection
$pdo = null;
echo "<br><a href = Reservation.php>Return to Hotel Reservation</a>"
?>