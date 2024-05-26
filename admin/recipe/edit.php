<?php
require_once('../../db_connect.php');

if (isset($_POST['updateRecipe'])) {
    // Retrieve form data
    $recipeId = $_POST['editRecipeId'];
    $recipeName = $_POST['editRecipeName'];
    $recipeImage = $_POST['editRecipeImage'];
    $categoryType = $_POST['editCategoryType'];
    $directions = $_POST['editDirections'];
    $prepTime = $_POST['editPrepTime'];
    $recipeVideo = $_POST['editRecipeVideo'];
    $ingredients = $_POST['editIngredients'];
    $isApproved = isset($_POST['approval']) ? 1 : 0;

    // Validate and sanitize form data (you can add more validations here)

    // Prepare and execute SQL update query
    $sql = "UPDATE recipe_table SET 
            recipeName = ?,
            recipeImage = ?,
            categoryType = ?,
            directions = ?,
            prepTime = ?,
            recipeVideo = ?,
            ingredients = ?,
            is_approved = ?
            WHERE id = ?";
    
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssii", $recipeName, $recipeImage, $categoryType, $directions, $prepTime, $recipeVideo, $ingredients, $isApproved, $recipeId);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Recipe updated successfully
            header("Location: index.php"); // Redirect to recipe listing page after successful update
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
    // Redirect if form is not submitted properly
    header("Location: edit_recipe.php?id=" . $recipeId); // Provide the correct edit recipe page URL with the recipe ID
    exit();
}
?>
