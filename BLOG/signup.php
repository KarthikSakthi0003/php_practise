<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <section class="form_section">
        <div class="container form_section_container">
            <h2>Sign Up</h2>
            <div class="alert_msg_error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name" />
                <input type="text" placeholder="Last Name" />
                <input type="text" placeholder="User Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Create Password" />
                <input type="password" placeholder="Confirm Password" />
                <div class="form_control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="" id="avatar">
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <small>Already have an account? <a href="signin.html">Sign In</a></small>
            </form>
        </div>
    </section>
</body>

</html>