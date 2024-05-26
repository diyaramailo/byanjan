<?php
include('../header.php');
?>

<!-- Add New Recipe Form -->
<div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="mb-4 text-center">Add New Recipe</h2>
            <!-- Form to Add Recipe -->
            <form id="addRecipeForm" method="POST" action="create.php">
                <div class="form-group">
                    <label for="recipeName">Recipe Name</label>
                    <input type="text" class="form-control" id="recipeName" name="recipeName" required>
                </div>
                <div class="form-group">
                    <label for="recipeImage">Recipe Image URL</label>
                    <input type="text" class="form-control" id="recipeImage" name="recipeImage" required>
                </div>
                <div class="form-group">
                    <label for="categoryType">Category Type</label>
                    <select class="form-control" id="categoryType" name="categoryType" required>
                        <option value="">Select Category</option>
                        <option value="Terai">Terai</option>
                        <option value="Himalayan">Himalayan</option>
                        <option value="Hilly">Hilly</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="directions">Directions</label>
                    <textarea class="form-control" id="directions" name="directions" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="prepTime">Preparation Time</label>
                    <input type="text" class="form-control" id="prepTime" name="prepTime" required>
                </div>
                <div class="form-group">
                    <label for="recipeVideo">Recipe Video URL</label>
                    <input type="text" class="form-control" id="recipeVideo" name="recipeVideo">
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <textarea class="form-control" id="ingredients" name="ingredients" rows="6" required></textarea>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="saveRecipe" style="background-color: #1b1364; color:white">Save Recipe</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('../footer.php');
?>