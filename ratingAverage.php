<?php
  $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel');
  $query = $conn->query("SELECT * FROM `ratereview`");
  $fetch = $query->fetch_all();
  $row = $query->num_rows;
  $sum = 0;
  foreach($fetch as $rating)
  {
    $sum += $rating['2'];
  }
  $average = $sum / $row;

  echo "Hotel Rating Average: " . $average;
  echo "<br><a href=\"homepage.php\">Return Homepage</a>"

?>