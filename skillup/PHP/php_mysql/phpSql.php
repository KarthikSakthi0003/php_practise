<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./connect.php" method="POST">
        <label for="user">Name:</label>
        <input type="text" name="name" id="name" required />
        <br> <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <br> <br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" />
        <br> <br>
        <label for="bloodgroup">Blood group</label>
        <input type="text" name="bdgroup" id="bdgroup">
        <input type="submit" value="submit" name="submit" />
    </form>
</body>

</html>l