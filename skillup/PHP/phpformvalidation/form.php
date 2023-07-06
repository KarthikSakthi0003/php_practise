<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //defining variable 
    $fullname = $email = $gender = $comment = $number = $age = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = test_input($_POST["name"]);
        $email = test_input($_POST['email']);
        $gender = test_input($_POST['gender']);
        $comment = test_input($_POST['comment']);
        $number = test_input($_POST['number']);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    ?>

    <h2>Form validation</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        Fullname:<input type="text" name="name" />
        <br /> <br />
        email: <input type="text" name="email" /> <br><br>
        Number: <input type="text" name="number"> <br> <br>
        Age: <input type="text" name="Age" />
        Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea> <br> <br>
        Gender: Male:<input type="radio" name="gender" id="" value="male" />
       <br>Female: <input type="radio" name="gender" id="" value="female" />
        <br> <br>
        <input type="submit" value="Click here" name="Click here" />
    </form>

    <?php
    echo "<h2>Your input:</h2>";
    echo $fullname;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $gender;
    echo "<br/>";
    echo $fullname;
    echo "<br/>";
    echo $fullname;
    echo "<br/>";
    ?>
</body>

</html>