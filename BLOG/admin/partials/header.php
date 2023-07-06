<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../BLOG/assets_blog/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>

    <!-- ========== Start nav ========== -->
    <nav>
        <div class="container nav_container">
            <a href="index.php" class="nav_logo">Logo</a>
            <ul class="nav_items">
                <li><a href="">Blog</a></li>
                <li><a href="signin.php">Signin</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="../assets/images/avatar1.jpg" alt="" />
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="signup.php">Sing up</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav_btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav_btn"><i class="uil uil-times"></i></button>
        </div>
    </nav>
    <!-- ========== End nav ========== -->
