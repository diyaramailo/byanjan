<?php
require_once('../../db_connect.php');

if (isset($_POST['saveRecipe'])) {
    // Retrieve form data
    $recipeName = $_POST['recipeName'];
    $recipeImage = $_POST['recipeImage'];
    $categoryType = $_POST['categoryType'];
    $directions = $_POST['directions'];
    $prepTime = $_POST['prepTime'];
    $recipeVideo = $_POST['recipeVideo'];
    $ingredients = $_POST['ingredients'];

    // Validate and sanitize form data (you can add more validations here)

    // Prepare and execute SQL insert query
    $sql = "INSERT INTO recipe_table (recipeName, recipeImage, categoryType, directions, prepTime, recipeVideo, ingredients) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssss", $recipeName, $recipeImage, $categoryType, $directions, $prepTime, $recipeVideo, $ingredients);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Recipe added successfully
            header("Location: index.php"); // Redirect to recipe listing page
            exit();
        } else {
            // Error in executing SQL
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        // Error in preparing SQL statement
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    // Redirect to add recipe page if form is not submitted properly
    header("Location: add_recipe.php");
    exit();
}
?>
