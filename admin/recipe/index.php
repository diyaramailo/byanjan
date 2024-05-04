<?php
require_once('../../db_connect.php');

// Query to fetch all recipes from the database
$sql = "SELECT * FROM recipe_table";
$result = mysqli_query($conn, $sql);

// Check if recipes exist
if (mysqli_num_rows($result) > 0) {
    $recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $recipes = [];
}

// Include header
$pageTitle = "Recipes";
$cssLocation = '../admin.css';
include('../layouts/header.php');
?>

<div class="container mt-5">
    <h2 class="mb-4">All Recipes</h2>
    <?php
    include('addModal.php')
    ?>
    <!-- Add Recipe Button -->
    <a href="#" id="addRecipeBtn" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addRecipeModal">Add Recipe</a>


    <!-- Recipe Listing -->
    <div class="row">
        <?php foreach ($recipes as $recipe) : ?>
            <div class="col-md-4 m-4 pd-2">
                <div class="card mb-6">
                    <img src="<?php echo $recipe['recipeImage']; ?>" class="card-img-top" alt="<?php echo $recipe['recipeName']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $recipe['recipeName']; ?></h5>
                        <p class="card-text"><?php echo $recipe['directions']; ?></p>


                        <!-- View Recipe Button -->
                        <a href="#" class="btn btn-primary mr-2" data-toggle="modal" data-target="#viewRecipeModal<?php echo $recipe['id']; ?>">View</a>

                        <!-- Edit Recipe Button -->
                        <a href="#" class="btn btn-secondary mr-2" data-toggle="modal" data-target="#editRecipeModal<?php echo $recipe['id']; ?>">Edit</a>

                        <!-- Delete Recipe Button -->
                        <a href="#" class="btn btn-danger mr-2" data-toggle="modal" data-target="#deleteRecipeModal<?php echo $recipe['id']; ?>">Delete</a>
                        <?php include('deleteModal.php') ?>
                        <?php include('editModal.php') ?>	
                        <?php include('viewModal.php') ?>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Include footer
include('../layouts/footer.php');
?>