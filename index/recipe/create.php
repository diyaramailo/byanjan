<?php
session_start();
require_once('../../db_connect.php');

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $recipeName = $_POST['recipeName'];
    $recipeImage = $_POST['recipeImage'];
    $categoryType = $_POST['categoryType'];
    $directions = $_POST['directions'];
    $prepTime = $_POST['prepTime'];
    $recipeVideo = $_POST['recipeVideo'];
    $ingredients = $_POST['ingredients'];
    $userId = $_SESSION['userId'];
    $isApproved = 0;

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO recipe_table (user_id, recipeName, recipeImage, categoryType, directions, prepTime, recipeVideo, ingredients, is_approved) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("isssssssi", $userId, $recipeName, $recipeImage, $categoryType, $directions, $prepTime, $recipeVideo, $ingredients, $isApproved);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to success page or recipes list
        header('Location: index.php?categoryType=' . $categoryType . '&approve_success=Your recipe has been submitted successfully. It will be approved by the admin soon.');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
