<?php
$servername = "localhost";
$databaseroot = "root";
$password = "";
$databasename = "registerform";

$conn = mysqli_connect($servername, $databaseroot, $password, $databasename);

if (mysqli_connect_error()) {
    # code...
    exit("Error connecting to the database" . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    # code...
    exit('Empty Field(s)');
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    # code...
    exit("Values Empty");
}

if ($stmt = $conn->prepare('SELECT id,password FROM users WHERE username= ?')) {
    # code...
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        # code...
        echo"Username Already exists.";
    }
    else{
        if ($stmt=$conn->prepare('INSERT INTO users (username,password,email)VALUES (?,?,?)')) {
            # code...
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $stmt->bind_param('sss',$_POST['username'],$password,$_POST['email']);
            $stmt -> execute();

            echo "Succesfully registered.";
        }
        else{
            echo "Error occured";
        }
    }
    $stmt->close();

}

else{
    echo'Error Occured in final';
}

$conn->close();