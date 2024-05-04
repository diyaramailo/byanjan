<?php
require_once('../../db_connect.php');

if (isset($_POST['confirmDelete']) && isset($_POST['recipeId'])) {
    $recipeId = $_POST['recipeId'];
    $sql = "DELETE FROM recipe_table WHERE id = $recipeId";

    if (mysqli_query($conn, $sql)) {
        header("Location: .");
        exit();
    } else {
        echo "Error deleting recipe: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

?>
