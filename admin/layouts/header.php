<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    //if user is not loginn then he cant access the admin dashboard  if he tried to then he will be redirected to login page
    header('Location: ../login');

    exit();
}
$title = 'Admin Dashboard';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- link to css -->
    <link rel="stylesheet" href=<?php echo $cssLocation ?>>
    <!-- link to the icons library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div>
        <section id="menu">
            <div class="logo">
                <img src="byanjan-removebg-preview.png" alt="">
                <h2>Byanjan</h2>
            </div>
            <div class="items">
                <li><i class="fa-solid fa-bowl-rice"></i><a href="http://localhost/Byanjan/admin/recipe" rel="noreferrer">Recipes</a></li>
                <li><i class="fa-solid fa fa-check"></i><a href="http://localhost/Byanjan/admin/recipe/approval" rel="noreferrer">Recipes Approval</a></li>
                <li><i class="fa-regular fa-star"></i><a href="http://localhost/Byanjan/admin/recipe/ratings" rel="noreferrer">Ratings</a></li>
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    echo '<li><i class="fa-solid fa-gear"></i><a href="http://localhost/Byanjan/logout.php" rel="noreferrer">Log out</a></li>';
                }
                ?>
            </div>
        </section>


        <section id="interface">