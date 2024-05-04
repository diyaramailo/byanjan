<?php
require_once('../../db_connect.php');

if (isset($_POST['saveRecipe'])) {
    // Retrieve form data
    $recipeName = $_POST['recipeName'];
    $recipeImage = $_POST['recipeImage'];

    // Validate and sanitize form data (you can add more validations here)

    // Prepare and execute SQL insert query
    $sql = "INSERT INTO recipe_table (recipeName, recipeImage) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $recipeName, $recipeImage);
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
