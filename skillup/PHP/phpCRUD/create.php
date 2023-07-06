<?php
include "config.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO 'users' ('firstname','lastname','email','password','gender') VALUES ('$first_name','$last_name','$email','$password','$gender')";


    $result = $conn->query($sql);

    if ($result == TRUE) {

        # code...
        echo "New record created succesfully";
    } else {
        echo "ERROR:" . $sql . "<br/>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Sign-up form</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>
                Personal Information:
            </legend>
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" id="firstname" />
            <br /> <br />
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" id="lastname" />
            <br /> <br />
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
            <br /> <br />
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />

            <br />
            <br />
            <label for="gender">
                Gender:
            </label>
            <input type="radio" name="gender" id="gender" value="Male" /> Male
            <input type="radio" name="gender" value="Female" /> Female
            <br />
            <br />
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>