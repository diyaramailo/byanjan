<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$db_password = ""; // Your MySQL password
$dbname = "byanjan";
$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $recipeImage = $_FILES["recipeImage"]["name"];
    $recipeName = $_POST["recipeName"];
    $categoryType = $_POST["categoryType"];
    $ingredients = $_POST["ingredient"];
    $directions = $_POST["directions"];
    $prepTime = $_POST["prepTime"];
    $recipeVideo = $_FILES["recipeVideo"]["name"];

    // File upload paths
    $targetRecipeImage = "../uploads" . basename($recipeImage);
    $targetRecipeVideo = "../uploads" . basename($recipeVideo);

    // Move uploaded files to target directory
    move_uploaded_file($_FILES["recipeImage"]["tmp_name"], $targetRecipeImage);
    move_uploaded_file($_FILES["recipeVideo"]["tmp_name"], $targetRecipeVideo);

    // Insert data into database
    $sql = "INSERT INTO recipe_table (recipeImage, recipeName, categoryType, ingredients, directions, prepTime, recipeVideo)
            VALUES ('$recipeImage', '$recipeName', '$categoryType', '$ingredients', '$directions', '$prepTime', '$recipeVideo')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT recipeImage, recipeName FROM recipe_table";
$result = $conn->query($sql);

// Check if there are any recipes
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Display recipe with thumbnail image and name
        echo '<div class="recipe">';
        echo '<img src="' . $row["recipeImage"] . '" alt="Recipe Image">';
        echo '<h3>' . $row["recipeName"] . '</h3>';
        echo '</div>';
    }
} else {
    echo "No recipes found";
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recipe CRUD</title>
<link rel="stylesheet" type="text/css" href="recipecrud.css"> 
</head>
<body>
<div class="container">
    <div class="create-recipe-btn">
    <a href="..\recipe\index.php">
        <button id="createRecipeBtn">Create Recipe <span>+</span></button>
        </a>
    </div>

</div>
</body>
</html>
