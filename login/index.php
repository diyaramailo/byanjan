<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: ../index");
    exit();
}
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$db_password = ""; // Your MySQL password
$dbname = "byanjan";
$passwordErr = "";
$emailErr = "";
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Enter a valid email address";
         
    }
else
 {   $sql = "SELECT * FROM registration WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Password correct, set session and redirect
            $_SESSION['logged_in'] = true;
            header("Location: ../index");
            exit();
        } else {
            // Password incorrect
            $passwordErr = "Password Incorrect";        }
    } else {
        // User not found
        $passwordErr = "Invalid email or password";
    }}
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section>
        <div class="top">
            <div class="left">
                <img src="../images/yellow.jpg" alt="">
            </div>
            <div class="right">
                <img src="../images/byanjan.png" alt="">
            
                <form method="POST" name="m__register_form" target="_blank">
                    <h4>Welcome to Byanjan!</h4>

                    <div class="group">
                        <label>E-mail</label>
                        <input type="text" id="m_email" name="email" placeholder="yourmail@example.com">
                    </div>
                    <?php
                        echo ($emailErr);
                        ?>

                    <div class="group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                        <?php
                        echo ($passwordErr);
                        ?>
                    </div>
                
                    <div class="group">   
                        <button type="submit" name="Submit">Login</button>
                    </div>
                </form>
               

            </div>
        </div>
    </section>
</body>
</html>