<style>
    .disable-link {
        pointer-events: none;
    }
</style>

<?php
    $id = $_SESSION['member_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel') or die('Unable to connect');
    $query = $conn->query("SELECT * FROM `reservation` WHERE `member_id` = '$id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $row = $query->num_rows;

    if($row > 0){
        $disable = '';
    }else{
        $disable = 'disable-link';
    }

    

?>