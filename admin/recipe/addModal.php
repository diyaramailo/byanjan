<!-- Add Recipe Modal -->
<div class="modal fade" id="addRecipeModal" tabindex="-1" role="dialog" aria-labelledby="addRecipeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRecipeModalLabel">Add New Recipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                        <input type="text" class="form-control" id="categoryType" name="categoryType" required>
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

                    <button type="submit" class="btn btn-primary" name="saveRecipe">Save Recipe</button>
                </form>

            </div>
        </div>
    </div>
</div>