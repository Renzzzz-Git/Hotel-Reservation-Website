<!DOCTYPE html>
<html>
<head>
    <title>Hotel Filter</title>
    <style>
        form {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            max-width: 800px;
            margin: 0 auto;
        }

        label {
            flex: 0 0 100px;
            text-align: right;
            margin-right: 10px;
        }

        select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            font-size: 16px;
            flex: 0 0 200px;
            appearance: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

    </style>
    <link rel="stylesheet" href="css/courtyardRoomDisplay.css">
</head>
<body>

<img src="../../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px">
<ul>
    <div class="leftlinks">
    <li><a href="../Reservation.php">Make Reservation</a></li>
    <li><a href="Courtyard.php">Courtyard</a></li>
    <li><a href="Ocean View Cottages.php">Ocean View Cottages</a></li>
    <li><a href="Penthouse Units.php">Penthouse</a></li>
    <li><a href="Sunrise Scenic Views.php">Sunrise Scenic Views</a></li>
    <li><a href="Sunset Scenic Views.php">Sunset Scenic Views</a></li>
  </div>
    <li style="float:right;"><a href="../Memberhomepage.php">Back</a></li>
    <li style="float:right;"><a href="Filter.php">Filter</a></li>
  </ul>

<form method="POST">
    <label for="room-type">Room Type:</label>
    <select id="room-type" name="room-type"> 
        <option value="">Any</option>
        <option value="Penthouse">Penthouse</option>
        <option value="Ocean View Cottage">Ocean View Cottage</option>
        <option value="Sunrise Scenic View">Sunrise Scenic View</option>
        <option value="Sunset Scenic View">Sunset Scenic View</option>
        <option value="Courtyard">Courtyard</option>
    </select>

    <label for="bed-type">Bed Type:</label>
<select id="bed-type" name="bed-type"> 
    <option value="">Any</option>
    <option value="Single">Single</option>
    <option value="Queen">Queen</option>
    <option value="King">King</option>
</select>

<label for="occupancy">Occupancy:</label>
<select id="occupancy" name="occupancy"> 
    <option value="">Any</option>
    <option value="1">1 person</option>
    <option value="2">2 people</option>
    <option value="3">3 people</option>
    <option value="4">4 people</option>
    <option value="5">5 people</option>
    <option value="6">6 people</option>
</select>

<label for="price-range">Price Range:</label>
<select id="price-range" name="price-range"> 
    <option value="">Any</option>
    <option value="300-500">$300 - $500</option>
    <option value="500-1000">$500 - $1000</option>
    <option value="1000+">$1000+</option>
</select>

<input type="submit" value="Filter">

</form>
</body>
</html>
<?php

//Connect to database
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

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the filter values
    $roomType = isset($_POST['room-type']) ? $_POST['room-type'] : '';
    $bedType = isset($_POST['bed-type']) ? $_POST['bed-type'] : '';
    $occupancy = isset($_POST['occupancy']) ? $_POST['occupancy'] : '';
    $priceRange = isset($_POST['price-range']) ? $_POST['price-range'] : '';

    // Prepare the SQL statement
    $sql = "SELECT room_name, room_number FROM Room WHERE ";
    $conditions = array();
    $parameters = array(); // Initialize the parameters array

    // Add the conditions 
    if ($roomType !== '') {
        $conditions[] = "room_name = :roomType";
        $parameters[':roomType'] = $roomType; 
    }

    //BED TYPE

    if ($bedType !== '') {
        $bedTypeValues = explode(",", $bedType);
        $bedTypePlaceholders = array();
        foreach ($bedTypeValues as $index => $value) {
            $placeholder = ":bedType" . $index;
            $bedTypePlaceholders[] = $placeholder;
            $parameters[$placeholder] = '%' . $value . '%';
        }
        $bedTypeConditions = implode(" OR ", array_map(function ($placeholder) {
            return "bed_type LIKE " . $placeholder;
        }, $bedTypePlaceholders));
        $conditions[] = "(" . $bedTypeConditions . ")";
    }

    //OCCUPANCY

    if ($occupancy !== '') {
        $conditions[] = "occupancy >= :occupancy";
        $parameters[':occupancy'] = $occupancy; 
    }

    //PRICE RANGE

    if ($priceRange !== '') {
        if ($priceRange === '300-500') {
            $conditions[] = "price >= 300 AND price <= 500";
        } elseif ($priceRange === '500-1000') {
            $conditions[] = "price >= 500 AND price <= 1000";
            } elseif ($priceRange === '1000+') {
            $conditions[] = "price >= 1000";
            }
            }

    
            // Combine the conditions with AND
if (!empty($conditions)) {
    $sql .= implode(' AND ', $conditions);
} else {
    $sql .= "1"; // No conditions, select all rooms
}

// Prepare and execute the SQL statement
$stmt = $pdo->prepare($sql);

// Bind the parameter values
foreach ($parameters as $placeholder => $value) {
    $stmt->bindValue($placeholder, $value);
}

$stmt->execute();

// Fetch the room names and room numbers
$roomNames = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output the filtered room names
if (!empty($roomNames)) {
    echo "<h2>Filtered Rooms:</h2>";
    echo "<ul>";
    foreach ($roomNames as $room) {
        $roomNumber = $room['room_number'];
        $roomName = $room['room_name'];
        echo "<br> <li>$roomName Room Number: $roomNumber</li> <br>";
    }
    echo "</ul>";
} else {
    echo "<p>No rooms found with the selected filters.</p>";
}

}

?>


