
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <!-- Link to font awesome for  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- link to box icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- navigation -->
    <nav>
    <a href="index.php">
        <img src="../images/byanjan-removebg-preview.png" alt="logo">
        </a>
        <div class="navigation">
            <ul>
                <li><a href="."><i class="fa-solid fa-house"></i></a></li>
                <li><div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                      <a href="terai.php">Terai Region</a>
                      <a href="hilly.php">Hilly Region</a>
                      <a href="himalayan.php">Himalayan Region</a>
                    </div>
                  </div></li>
<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo ('<li><a href="#">My Profile<i class="fa-solid fa-right-to-bracket"></i></a></li>');

 } else {
    echo ('<li><a href="../login">Log in<i class="fa-solid fa-right-to-bracket"></i></a></li>');
}
?>
                
            </ul>
    </nav>
    <section id="himalayan">
        <h1>Explore Himalayan Region's Popular Cuisines</h1>
        <div class="recipe-col">
            <div class="recipe-sec">
                <img src="../images/Rildok.jpg" alt="">
                <div class="details">
                   <h4>Rildok</h4> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
            <div class="recipe-sec">
                <img src="../images/thukpa.jpg" alt="">
                <div class="details">
                   <h4>Thukpa</h4> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
            <div class="recipe-sec">
                <img src="../images/tingmo.jpg" alt="">
                <div class="details">
                   <h4>Tingmo</h4> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
            <div class="recipe-sec">
                <img src="../images/Rikikur-Aloo-Roti-Sherpa-Potato-Pancake-आलुको-रोटी-1.jpg" alt="">
                <div class="details">
                   <h4>Rikikur</h4> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
            <div class="recipe-sec">
                <img src="../images/shyaphale.jpg" alt="">
                <div class="details">
                   <h4>Shyaphale</h4> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
            <div class="recipe-sec">
                <img src="../images/momoo.jpg" alt="">
                <div class="details">
                   <h4>Momo</h4> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section -->
    <footer>
        <div class="footer-col">
            <h3>Categories</h3>
            <li>Terai Region</li>
            <li>Hilly Region</li>
            <li>Himalayan Region</li>
        </div>

        <div class="footer-col">
            <h3>About</h3>
            <li>About Us</li>
        </div>

        <div class="footer-col">
            <h3>What We provide</h3>
            <li>Best Recipe</li>
            <li>Quantity Calculator</li>
            <li>See ratings</li>
        </div>

        <div class="footer-col">
            <h3>Social Links</h3>
            <div class="social-link">
                <a href="#" target="_blank"><i class="fa-brands fa-facebook" id="facebook"></i></a>
                <a href="#" target="_blank"><i class="fa-brands fa-youtube" id="youtube"></i></a>
                <a href="mailto:nunadas704@gmail.com" target="_blank" id="email"><i class="fa-solid fa-envelope-circle-check"></i></a>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2024  All rights reserved | Byanjan.com</p>
        </div> 
    </footer>
</body>
</html>