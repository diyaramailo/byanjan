<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to font awesome for  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- link to box icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="http://localhost/Byanjan/index/index.css">
    <link rel="stylesheet" href="http://localhost/Byanjan/index/header.css">
    <?php
    if (isset($additional_css)) {
        echo '<link rel="stylesheet" href="' . $additional_css . '">';
    }
    ?>
</head>
<body>
    <!-- navigation -->

<nav>

    <img src="http://localhost/Byanjan/images/byanjan-removebg-preview.png" alt="logo">
    <div class="navigation">
        <ul>
            <li><a href="http://localhost/Byanjan/index"><i class="fa-solid fa-house"></i></a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                        <a href="http://localhost/Byanjan/index/recipe?categoryType=Terai">Terai Region</a>
                        <a href="http://localhost/Byanjan/index/recipe?categoryType=Hilly">Hilly Region</a>
                        <a href="http://localhost/Byanjan/index/recipe?categoryType=Himalayan">Himalayan Region</a>
                    </div>
                </div>
            </li>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<a href="http://localhost/Byanjan/index/recipe/add.php"><button class="dropbtn" style="margin: 10px">Add Recipe</button></a>';
                echo '<li><a href="http://localhost/Byanjan/index/recipe?my_recipe=1">My Recipe<i class="fa-solid fa-right-to-bracket"></i></a></li>';
                echo '<li><a href="http://localhost/Byanjan/logout.php">Logout<i class="fa-solid fa-right-to-bracket"></i></a></li>';
            } else {
                echo '<li><a href="http://localhost/Byanjan/login">Log in<i class="fa-solid fa-right-to-bracket"></i></a></li>';
            }
            ?>
        </ul>
</nav>