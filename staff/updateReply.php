<?php
        $reply = $_POST['reply'];
        $msg_id = $_POST['messageID']; 
        $conn = mysqli_connect('localhost', 'root', '', 'firefly_hotel');

        $sql = "UPDATE `message` SET `reply`='$reply' WHERE `msg_id`= '$msg_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            $_GET['memberid'] = $_POST['memberid'];
            $conn->close();
            echo "<br><a href = \"chat.php?memberid=" . $_GET['memberid'] . "\">Return to Chat</a>";
        } else {
           echo "Error updating record: " . $conn->error;
        }

        

?>