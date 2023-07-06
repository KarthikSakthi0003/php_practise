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
            <h2>Add Post</h2>
            <div class="alert_msg_error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title" />
                <select name="" id="">
                    <option value="1">Travel</option>
                    <option value="1">Art</option>
                    <option value="1">Science & Technology</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                </select>
                <div class="form_control">
                    <input type="checkbox" name="" id="is_featured"/>
                    <label for="is_featured">Featured</label>
                </div>
                <div class="form_control">
                    <label for="thumbnail">Add Thumbnail</label>
                    <input type="file" name="" id="thumbnail">
                </div>
                <textarea name="" rows="4" placeholder="Body"></textarea>
              
                <button type="submit" class="btn">Add Post</button>
                
                <small>Don't have an account? <a href="signup.html">Sign up</a></small>
            </form>
        </div>
    </section>
</body>

</html>