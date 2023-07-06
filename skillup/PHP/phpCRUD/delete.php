<?php 
include "config.php";

if (isset($_GET['id'])) {
    # code...
    $user_id= $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id`=`$user_id`";

    $result = $conn->query($sql);
    if ($result == TRUE) {
        # code...
        echo "Record deleted Succesfully";
    }
    else{
        echo "Error" . $sql ."<br/>" . $conn->error;
    }
}

?>