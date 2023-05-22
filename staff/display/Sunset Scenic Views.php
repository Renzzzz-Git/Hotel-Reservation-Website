<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/sunsetRoomDisplay.css">

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
    <li style="float:right;"><a href="../Staff_homepage.php">Back</a></li>
    <li style="float:right;"><a href="Filter.php">Filter</a></li>
  </ul>

  
<h1><center>Sunset Scenic Views</center></h1>

<?php

  $room15_16And17 = array(
  "Price" => "$500 per night",
  "Number of Beds" => "1",
  "Category" => "Sunset Scenic View",
  "Bed Type" => "King-size Bed"
  );
  
  $room18_19And20 = array(
  "Price" => "$700 per night",
  "Number of Beds" => "4",
  "Category" => "Sunset Scenic View",
  "Bed Type" => "2 King-size Bed, 2 Single-size Bed"
  );

?>

<div class="sunsetcontent">
<div class="centerBox">
<div class="roomData">

  <br>
  <b>Senset Scenic View Room 15, 16, and 17</b><br><br>
  <b>Price: </b><?php echo $room15_16And17['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room15_16And17['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room18_19And20['Category'];?><br>
  <b>Bed Type: </b><?php echo $room18_19And20['Bed Type'];?><br><br>

  <b>Senset Scenic View Room 18, 19, and 20</b><br><br>
  <b>Price: </b><?php echo $room18_19And20['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room18_19And20['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room18_19And20['Category'];?><br>
  <b>Bed Type: </b><?php echo $room18_19And20['Bed Type'];?><br><br>

  <form action="../../member/MemberLogin.php">
      <input type="submit" value="Make A Reservation" />
  </form>

    <br>
  <img src="Sunset Scenic Rooms/Balcony Lounge.jpg" class="roomImageDisplay">
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

  <img src="Sunset Scenic Rooms/Multiple rooms.jpg" class="roomImageDisplay">
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

  <img src="Sunset Scenic Rooms/Two Single Beds.jpg" class="roomImageDisplay">
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
  <b>Single Beds</b>
  <br>
  <br>
  <br>

</div>
<div class="roomArticle">

        <p>
        Welcome to our hotel's Sunset Scenic View Rooms or west-facing rooms, where you can experience awe-inspiring sunset views that will make your stay truly unforgettable.
        </p>

        <p>
        As you step into the room, you will be greeted by a warm and welcoming atmosphere, with tasteful decor and soft lighting that creates a cozy and relaxing ambiance. The west-facing windows offer an unobstructed view of the horizon, promising a breathtaking sunset every evening.
        </p>

        <p>
        The room is spacious and comfortable, with all the amenities you need to make your stay enjoyable and convenient. These rooms are offered in two single size beds, a king-size bed, or 2 queen size beds and two single size beds. Either option is sure to be plush beds with premium bedding ensures a restful night's sleep, while the seating balcony provides a comfortable spot to read or enjoy a glass of wine while taking in the stunning sunset views.
        </p>
  
        <p>
        The west-facing rooms are designed to make the most of the spectacular sunset views, with large windows that allow natural light to flood the room. You can watch the sun slowly set over the horizon, painting the sky with vibrant hues of orange, pink, and red, creating an unforgettable sight.
        </p>

        <p>
        The room is equipped with all the latest technology, including a large flat-screen TV, high-speed internet, and a sound system, allowing you to stay connected and entertained throughout your stay.
        </p>

        <p>
        The ensuite bathroom is modern and spacious, with all the amenities you need to refresh and rejuvenate. You can take a relaxing soak in the bathtub or a refreshing shower while enjoying the breathtaking sunset views.
        </p>

  <br>
  <br>
  <img src="Sunset Scenic Rooms/bathroom.jpg" class="roomImageDisplaySecondIndentionSpecial">
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

  <img src="Sunset Scenic Rooms/Master_s Bedroom.jpg" class="roomImageDisplay" >
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