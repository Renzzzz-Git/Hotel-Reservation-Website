<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/courtyardRoomDisplay.css">

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

  
<h1><center>Courtyard</center></h1>
  
<?php

  $room21_22And23 = array(
  "Price" => "$300 per night",
  "Number of Beds" => "2",
  "Category" => "Courtyard",
  "Bed Type" => "2 Single-size Bed"
  );
  
  $room24_25And26 = array(
  "Price" => "$300 per night",
  "Number of Beds" => "1",
  "Category" => "Courtyard",
  "Bed Type" => "King-size Bed"
  );
  
  $room27_28_29_30 = array(
  "Price" => "$400 per night",
  "Number of Beds" => "4",
  "Category" => "Courtyard",
  "Bed Type" => "2 Bunk Bed"
  );
  
?>

<div class="CourtyardContent">


<div class="centerBox">
<div class="roomData">

  <br>
  <b>Courtyard Room 21, 22 and 23</b><br><br>
  <b>Price: </b><?php echo $room21_22And23['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room21_22And23['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room21_22And23['Category'];?><br>
  <b>Bed Type: </b><?php echo $room21_22And23['Bed Type'];?><br><br>

  <b>Courtyard Room 24, 25 and 26</b><br><br>
  <b>Price: </b><?php echo $room24_25And26['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room24_25And26['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room24_25And26['Category'];?><br>
  <b>Bed Type: </b><?php echo $room24_25And26['Bed Type'];?><br><br>

  <b>Courtyard Room 27, 28, 29 and 30</b><br><br>
  <b>Price: </b><?php echo $room27_28_29_30['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room27_28_29_30['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room27_28_29_30['Category'];?><br>
  <b>Bed Type: </b><?php echo $room27_28_29_30['Bed Type'];?><br><br>

  <form action="../../member/MemberLogin.php">
      <input type="submit" value="Make A Reservation" />
  </form>

  <br>
  <img src="Courtyard/two single beds.jfif" class="roomImageDisplay">
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

  <img src="Courtyard/kingsize bed.jfif" class="roomImageDisplay">
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
  <b>Kingsize Bed</b>
  <br>
  <br>
  <br>


	</div>
  <div class="roomArticle">


        <p>
        Welcome to our hotel's courtyard rooms, nestled near our beautiful garden and sparkling swimming pool.
        </p>

        <p>
        As you enter the room, you will be greeted by a serene and tranquil atmosphere, with tasteful decor that creates a cozy and relaxing ambiance. The courtyard location provides a peaceful escape from the hustle and bustle of the city, allowing you to fully unwind and recharge.
        </p>

        <p>
        The room is spacious and comfortable, with all the amenities you need to make your stay enjoyable and convenient. These rooms are offered in two single size beds, a king-size bed, or 4 single size beds. Either option is sure to be plush bed with premium bedding ensures a restful night's sleep, while the seating area provides a comfortable spot to read or enjoy the garden and pool views.
        </p>
  
        <p>
        The courtyard rooms offer easy access to our beautifully landscaped garden, where you can take a leisurely stroll, enjoy a picnic, or simply relax and soak up the sunshine. You can also take a refreshing dip in our sparkling swimming pool, which is just steps away from your room.
        </p>

        <p>
        The ensuite bathroom is modern and spacious, with all the amenities you need to refresh and rejuvenate. You can take a relaxing soak in the bathtub or a refreshing shower after a day of exploring the city or lounging by the pool.
        </p>

  <img src="Courtyard/4 single beds.jfif" class="roomImageDisplay">
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
  <b> Bunk Beds</b>
  <br>
  <br>
  <br>

  <img src="Courtyard/bathroom.jpg" class="roomImageDisplay">
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

  </div>
</div>


</div>




</body>
</html>