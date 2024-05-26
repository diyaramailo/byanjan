<?php
require_once('../../../db_connect.php');

// Check if the form is submitted and the recipe ID is set
if (isset($_POST['recipe_id'])) {
    // Sanitize the recipe ID
    $recipeId = mysqli_real_escape_string($conn, $_POST['recipe_id']);

    // Update the recipe to set is_approved to 1 (approved)
    $sql = "UPDATE recipe_table SET is_approved = 1 WHERE id = $recipeId";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the approval page with a success message
        header("Location: index.php?approve_success=1");
        exit();
    } else {
        // Redirect back to the approval page with an error message
        header("Location: index.php?approve_error=1");
        exit();
    }
} else {
    // If the form is not submitted or the recipe ID is not set, redirect back to the approval page
    header("Location: approval.php");
    exit();
}
?>
