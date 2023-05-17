<?php
	session_start();

    if(!isset($_SESSION['username'])){
        header('location:../homepage.php');
        
    }
?>

<?php
// Replace the placeholders with your actual database credentials



// Retrieve form data
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$arrivalDate = $_POST['arrival-d'];
$departureDate = $_POST['departure-d'];
$contactNumber = $_POST['contact-num'];
$numOfPax = $_POST['num-of-pax'];
$roomOption = $_POST['room-num'];
$paymentOption = $_POST['payment-option'];


$member_id = $_SESSION['member_id'];


if($arrivalDate < $departureDate)
{
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `room` WHERE `room_number` = '$roomOption'");
    $fetch = $query->fetch_array();
    $roomId = $fetch['room_id'];

    $A_Query = $conn->query("SELECT * FROM `reservation` WHERE `a_date` = '$arrivalDate' && `room_id` = '$roomId'");
    $a_row = $A_Query->num_rows;

    $D_Query = $conn->query("SELECT * FROM `reservation` WHERE `room_id` = '$roomId' && `d_date` = '$departureDate'");
    $d_row = $D_Query->num_rows;



    $sql = "INSERT INTO `reservation` (reservation_id, member_id, room_id, a_date, d_date, no_of_pax, checkin_status) VALUES (DEFAULT, '$member_id', '$roomId', '$arrivalDate', '$departureDate', '$numOfPax', '')";

    if($a_row > 0 || $d_row > 0)
    {
        echo "Reservation With similar arrival or departure date has been detected, reservation cancelled";
        echo "<br><a href=\"Reservation.php\">Go back to reservation</a>";
    }else{
        $conn->query($sql);
        echo "Reservation Added Successfully";
        echo "<br><a href=\"Reservation.php\">Go back to reservation</a>";

    }
    $conn->close();
}
else{
    echo "Arrival Date cannot be after the Departure Date";
    echo "<br><a href=\"Reservation.php\">Go back to reservation</a>";
}


?>

