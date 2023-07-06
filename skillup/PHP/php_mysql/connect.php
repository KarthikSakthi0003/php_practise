<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {

    $connection = mysqli_connect('localhost', 'root','', 'php_mysql') or die("Connection Failed:" .mysqli_connect_error());

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bdgroup'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bdgroup = $_POST['bdgroup'];

        // sql query

        $sql = "INSERT INTO `users` (`name` ,`email` ,`phone` ,`bdgroup`) VALUES ('$name','$email','$phone','$bdgroup')";

        $query = mysqli_query($connection, $sql);

        if ($query) {
            echo "Entry Succesful";
        } else {
            echo "Error occured";
        }
    }
}
?>