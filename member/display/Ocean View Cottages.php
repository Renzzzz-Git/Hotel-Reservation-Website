<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/oceanViewDisplay.css">

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

  <h1><center>Ocean View Cottages</center></h1>
  
<?php

$room3And4 = array(
    "Price" => "$600 per night",
    "Number of Beds" => "1",
    "Category" => "Ocean View Cottage",
    "Bed Type" => "Single-size Bed"
    );
    
    $room5And6 = array(
    "Price" => "$700 per night",
    "Number of Beds" => "1",
    "Category" => "Ocean View Cottage",
    "Bed Type" => "King-size Bed"
    );
    
    $room7_8And9 = array(
    "Price" => "$900 per night",
    "Number of Beds" => "5",
    "Category" => "Ocean View Cottage",
    "Bed Type" => "4 Single-size Beds, 1 Queen-size Bed"
    );
  
  
?>

<div class="oceanviewcontent">


<div class="centerBox">
<div class="roomData">
  <br>
  <b>Ocean View Cottages Room 3 and 4</b><br><br>
  <b>Price: </b><?php echo $room3And4['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room3And4['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room3And4['Category'];?><br>
  <b>Bed Type: </b><?php echo $room3And4['Bed Type'];?><br><br>

  <b>Ocean View Cottages Room 5 and 6</b><br><br>
  <b>Price: </b><?php echo $room5And6['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room5And6['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room5And6['Category'];?><br>
  <b>Bed Type: </b><?php echo $room5And6['Bed Type'];?><br><br>

  <b>Ocean View Cottages Room 7, 8 and 9</b><br><br>
  <b>Price: </b><?php echo $room7_8And9['Price'];?><br>
  <b>Number of Bed: </b><?php echo $room7_8And9['Number of Beds'];?><br>
  <b>Category: </b><?php echo $room7_8And9['Category'];?><br>
  <b>Bed Type: </b><?php echo $room7_8And9['Bed Type'];?><br><br>

  <form action="../Reservation.php">
      <input type="submit" value="Make A Reservation" />
  </form>

  <br>
  <br>
  <img src="Ocean View Huts/Lounge.jpg" class="roomImageDisplaySecondIndention" >
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
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lounge
  </b>
  <br>
  <br>
  <br>

  <img src="Ocean View Huts/Multiple.jpg" class="roomImageDisplayFirstIndention" >
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
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;Family Rooms
  </b>
  <br>
  <br>
  <br>

  <img src="Ocean View Huts/Single Bed.jpg" class="roomImageDisplaySecondIndention" >
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
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lounge
  </b>
  <br>
  <br>
  <br>

</div>

<div class="roomArticle">
        <p>
        Welcome to our hotel ocean view hut, where you can experience the ultimate in beachfront luxury.
        </p>

        <p>
        Our Ocean view huts come in a single bed variety because we support our single and contented/soul searching clients. A master's bedroom variety with a king size bed for couples looking for a seaside getaway. And lastly, the groupie getaway variety fit for friends or family looking for a seaside getaway - the groupie getaway room is equipped with 4 single-size beds and a queen-size bed.
        </p>

        <p>
        The hut features a spacious and comfortable bed, allowing you to sleep peacefully to the sound of the ocean waves. The bedroom is decorated with soothing beach-inspired decor and offers plenty of natural light, creating a serene and calming environment.
        </p>
  
        <p>
        Attached to the bedroom is a private bathroom, complete with modern fixtures and a spacious shower. You can indulge in a refreshing shower or relax in the luxurious bathtub after a long day of beach activities.
        </p>

        <p>
        The ocean hut is  erected on the sea and also features a simple lounge area, where you can enjoy breathtaking views of the ocean while sipping a cocktail or reading a book. The lounge is equipped with comfortable seating, creating the perfect atmosphere for a lazy afternoon in the sun.
        </p>

        <p>
        At our hotel, we pride ourselves on providing our guests with exceptional service and amenities. You will have access to our beachfront pool, fitness center, and spa, where you can indulge in a variety of treatments and services. Our friendly and knowledgeable staff is available 24/7 to ensure that your stay is comfortable and enjoyable, and we are always happy to assist with any requests or questions you may have.
        </p>
  <br>
  <br>
  <img src="Ocean View Huts/General View.jpg" class="roomImageDisplaySecondIndention" >
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
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cottage
  </b>
  <br>
  <br>
  <br>

  <img src="Penthouse/Main Bedroom.jpg" class="roomImageDisplayFirstIndention" >
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
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;Couple Bedroom
  </b>
  <br>
  <br>
  <br>

  <img src="Ocean View Huts/Bathroom.jpg" class="roomImageDisplaySecondIndentionSpecial" >
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
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bathroom
  </b>
  <br>
  <br>
  <br>

</div>
</div>

</div>

</body>
</html>