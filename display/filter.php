<!DOCTYPE html>
<html>
<head>

  <style>

        /*-------------------------NAV BAR---------------------*/
        

    .navbar {
    list-style-type: none;
    margin-bottom: 0;
    padding: 0;
    overflow: hidden;
    background-color: #2A1B0E;
    color: white;
    margin-left: 10px;
    margin-right: 10px;
    height: 90px;
   
  }
  
  
  
  .navlink {
    float: left;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: Arial;
    font-size: 16px;
   
  }
  
  li a:hover:not(.active) {
    color: goldenrod;
  }
  
  .active {
    color: goldenrod;
  }
  
  
  
  .leftlinks{
    margin-left: 130px;
  }





        /*-----------------------FORM--------------------------*/
        form {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            max-width: 800px;
            margin: 0 auto;
            margin-top:40px;

            
        }

        label {
            flex: 0 0 100px;
            text-align: right;
            margin-right: 5px;
            font-family:arial;
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

        h2{
            margin-left:603px;
            margin-top:100px;
            font-family:arial;
            color:darkgreen;
        }

        .roomlist{
            color:green;
        }

        ul{
        
            margin-left:580px;
            margin-right:580px;
            font-family:arial;
            font-weight:bold;
            font-size:16px;
            color:black;

        }

       

    </style>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<body>

<!---------------------------------------------NAV BAR-------------------------------------------------------->

<img src="../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px">
<ul>
    <div class="leftlinks">
    <li><a href="../member/MemberLogin.php">Make Reservation</a></li>
    <li><a href="Courtyard.php">Courtyard</a></li>
    <li><a href="Ocean View Cottages.php">Ocean View Cottages</a></li>
    <li><a href="Penthouse Units.php">Penthouse</a></li>
    <li><a href="Sunrise Scenic Views.php">Sunrise Scenic Views</a></li>
    <li><a href="Sunset Scenic Views.php">Sunset Scenic Views</a></li>
  </div>
    <li style="float:right;"><a href="../homepage.php">Back</a></li>
    <li style="float:right;"><a href="Filter.php">Filter</a></li>
  </ul>

  <!----------------------------------------FILTER------------------------------------------------------------>


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
    $sql = "SELECT room_name, room_number, bed_type, occupancy, price FROM Room WHERE ";
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
    echo "<h2></h2>";
    echo '<table style="margin: 0 auto; text-align: center; border-collapse: collapse; border: 1px solid #ddd; font-family: Arial;">';
    echo '<tr><th style="border: 1px solid #ddd; padding: 8px;">Room Name</th><th style="border: 1px solid #ddd; padding: 8px;">Room Number</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Bed Type</th><th style="border: 1px solid #ddd; padding: 8px;">Occupancy</th><th style="border: 1px solid #ddd; padding: 8px;">Price</th></tr>';
    foreach ($roomNames as $room) {
        $roomNumber = $room['room_number'];
        $roomName = $room['room_name'];
        $bedty = $room['bed_type'];
        $occu = $room['occupancy'];
        $pri = $room['price'];
        echo '<tr><td style="border: 1px solid #ddd; padding: 8px;">'.$roomName.'</td><td style="border: 1px solid #ddd; padding: 8px;">'.$roomNumber.'</td>
        <td style="border: 1px solid #ddd; padding: 8px;">'.$bedty.'</td><td style="border: 1px solid #ddd; padding: 8px;">'.$occu.'</td><td style="border: 1px solid #ddd; padding: 8px;">'.$pri.'</td></tr>';
    }
    echo '</table>';
} else {
    echo '<p>No rooms found with the selected filters.</p>';
}

}

?>