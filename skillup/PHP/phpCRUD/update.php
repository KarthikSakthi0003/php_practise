<?php
include "config.php";
if (isset($_POST['update'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    $sql = "UPDATE 'users' SET 'firstname'=$first_name,'lastname'=$last_name,'email'=$email,'password'=$password,'gender'=$gender,";

    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "Record updated Succesfully";
    } else {
        echo "Error:" . $sql . "<br/>" . $conn->error;
    }


    if (isset($_GET['id'])) {
        # code...
        $user_id = $_GET['id'];

        $sql = "SELECT *FROM 'users' WHERE 'id'='$user_id'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $first_name = $row['firstname'];
                $last_name = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
                $id = $row['id'];
            }
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
            <form action="" method="post">
                <fieldset>
                    <legend>
                        Update Information:
                    </legend>
                    <label for="firstname">First name:</label>
                    <input type="text" name="firstname" id="firstname" value="<?php echo $first_name; ?>" />
                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                    <br />
                    <label for="lastname">Last name:</label>
                    <input type="text" name="lastname" id="lastname" value="<?php echo $last_name; ?>" />
                    <br />
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" />
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>" />

                    <br />
                    <label for="gender">
                        Gender:
                    </label>
                    <input type="radio" name="gender" id="gender" value="Male" <?php if ($gender == "Male") {
                                                                                    echo "checked";
                                                                                } ?> />
                    <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") {
                                                                            echo "checked";
                                                                        } ?> />
                    <br />
                    <br />
                    <input type="submit" value="Update" name="update">
                </fieldset>
            </form>
        </body>

        </html>

<?php
    } else {
        // if the id value is not valid ,redirect the user back to view.php page
        header('Location: view.php');
    }
};
?>