<?php
require_once('../../db_connect.php');

// Check if recipe_id is set in the URL
if(isset($_GET['recipe_id'])) {
    // Sanitize the input to prevent SQL injection
    $recipe_id = mysqli_real_escape_string($conn, $_GET['recipe_id']);

    // Fetch recipe details from the database
    $sql = "SELECT * FROM recipe_table WHERE id = $recipe_id";
    $result = mysqli_query($conn, $sql);

    // Check if the query executed successfully and if the recipe exists
    if($result && mysqli_num_rows($result) > 0) {
        $recipe = mysqli_fetch_assoc($result);
    } else {
        // Redirect to a 404 page or display a message if the recipe doesn't exist
        // For example:
        header("Location: 404.php");
        exit();
    }
} else {
    // Redirect to a 404 page or display a message if recipe_id is not provided in the URL
    // For example:
    header("Location: 404.php");
    exit();
}

// Include header
include('../header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo $recipe['recipeImage']; ?>" class="img-fluid rounded recipe-image mx-auto d-block" alt="Image of <?php echo $recipe['recipeName']; ?>">
        </div>
    </div>
</div>

<div class="container-fluid recipe-details">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="recipe-title display-4 mb-3"><?php echo $recipe['recipeName']; ?></h1>
                    <h6 class="recipe-category text-muted text-uppercase mb-4"><?php echo $recipe['categoryType']; ?></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="recipe-intro mb-4">
                        <p class="lead"><?php echo $recipe['directions']; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="recipe-details mb-4">
                        <p><strong>Prep Time:</strong> <?php echo $recipe['prepTime']; ?></p>
                        <?php if (!empty($recipe['recipeVideo'])): ?>
                            <p><strong>Video:</strong> <a href="<?php echo $recipe['recipeVideo']; ?>" target="_blank">Watch Recipe Video</a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="recipe-section">
                        <h3 class="mb-3">Ingredients</h3>
                        <ul class="list-unstyled ingredients-list">
                            <?php echo $recipe['ingredients']; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="recipe-section">
                        <h3 class="mb-3">Preparation</h3>
                        <ul class="list-unstyled preparation-list">
                            <?php echo $recipe['directions']; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// Include footer
include('../footer.php');
?>
