<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/sunriseRoomDisplay.css">

</head>
<body>

<img src="../../photos/logo.png" style="width: 160px; height: 100px;position: absolute;top: 10px;left: 15px">
<ul>
    <div class="leftlinks">
    <li><a href="Courtyard.php">Courtyard</a></li>
    <li><a href="Ocean View Cottages.php">Ocean View Cottages</a></li>
    <li><a href="Penthouse Units.php">Penthouse</a></li>
    <li><a href="Sunrise Scenic Views.php">Sunrise Scenic Views</a></li>
    <li><a href="Sunset Scenic Views.php">Sunset Scenic Views</a></li>
  </div>
    <li style="float:right;"><a href="../Memberhomepage.php">Back</a></li>
    <li style="float:right;"><a href="Filter.php">Filter</a></li>
  </ul>

  
<h1><center>Sunrise Scenic Views</center></h1>

<?php

  $room10And11 = array(
  "Price" => "$400 per night",
  "Number of Beds" => "1",
  "Category" => "Sunrise Scenic View",
  "Bed Type" => "Single-size Bed"
  );
  
  $room12_13And14 = array(
  "Price" => "$500 per night",
  "Number of Beds" => "1",
  "Category" => "Sunrise Scenic View",
  "Bed Type" => "Single-size Bed"
  );

?>

<div class="sunrisecontent">

<div class="centerBox">
<div class="roomData">
  <br>
  <b>Sunrise Scenic View Room 10 and 11</b><br><br>
  <b>Price: </b><?php echo $room10And11['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room10And11['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room10And11['Category'];?><br>
  <b>Bed Type: </b><?php echo $room10And11['Bed Type'];?><br><br>

  <b>Sunrise Scenic View Room 12, 13, and 14</b><br><br>
  <b>Price: </b><?php echo $room12_13And14['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room12_13And14['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room12_13And14['Category'];?><br>
  <b>Bed Type: </b><?php echo $room12_13And14['Bed Type'];?><br><br>

  <form action="../Reservation.php">
      <input type="submit" value="Make A Reservation" />
  </form>

  <br>
  <img src="Sunrise Scenic Rooms/Lounge.jpg" class="roomImageDisplay">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <b>Lounge</b>
  <br>
  <br>
  <br>

  <img src="Sunrise Scenic Rooms/bathroom.jfif" class="roomImageDisplay">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <b>Bathroom</b>
  <br>
  <br>
  <br>

  <img src="Sunrise Scenic Rooms/multiple beds.jpg" class="roomImageDisplay">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <b>Family Room</b>
  <br>
  <br>
  <br>

</div>

<div class="roomArticle">

        <p>
        Welcome to our hotel's Sunrise Scenic View Rooms or east-facing rooms, where you can experience breathtaking sunrise views that will make your stay truly unforgettable.
        </p>

        <p>
        As you enter the room, you will be greeted by a warm and inviting atmosphere, with soft lighting and tasteful decor that creates a cozy and relaxing ambiance. The east-facing windows offer a stunning view of the horizon, with the promise of a magnificent sunrise every morning.
        </p>

        <p>
        The room is spacious and comfortable, with all the amenities you need to make your stay comfortable and convenient. These rooms are offered in single size beds, a king-size bed, or 2 queen size beds and two single size beds. Either option is sure to be plush beds with premium bedding ensures a restful night's sleep, while the balcony provides a cozy spot to read or enjoy your morning coffee.
        </p>
  
        <p>
        The east-facing rooms are designed to take full advantage of the spectacular sunrise views, with large windows that flood the room with natural light. You can wake up to the sight of the sun rising over the horizon, casting a warm glow across the room and filling it with a sense of peace and tranquility.
        </p>

        <p>
        The room is equipped with all the latest technology, including a large flat-screen TV, high-speed internet, and a sound system. You can stay connected with friends and family, catch up on work, or simply relax and enjoy the view.
        </p>

        <p>
        The ensuite bathroom is spacious and modern, with all the amenities you need to refresh and rejuvenate. You can take a refreshing shower or a relaxing soak in the bathtub while enjoying the stunning sunrise views.
        </p>

  <br>
  <br>
  <img src="Sunrise Scenic Rooms/Single size bed.jpg" class="roomImageDisplaySecondIndentionSpecial">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <b>Solo Bedroom</b>
  <br>
  <br>
  <br>

  <img src="Sunrise Scenic Rooms/King-size bed.jpg" class="roomImageDisplaySecondIndention" >
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <b>Couple Bedroom
  </b>
  <br>
  <br>
  <br>

</div>
</div>
</div>

</body>
</html>