<!-- Edit Recipe Modal -->
<div class="modal fade" id="editRecipeModal<?php echo $recipe['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editRecipeModalLabel<?php echo $recipe['id']; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editRecipeModalLabel<?php echo $recipe['id']; ?>">Edit Recipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to Edit Recipe -->
                <form method="POST" action="edit.php">
                    <input type="hidden" name="editRecipeId" value="<?php echo $recipe['id']; ?>">
                    
                    <div class="form-group">
                        <label for="editRecipeName">Recipe Name</label>
                        <input type="text" class="form-control" id="editRecipeName" name="editRecipeName" value="<?php echo $recipe['recipeName']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editRecipeImage">Recipe Image URL</label>
                        <input type="text" class="form-control" id="editRecipeImage" name="editRecipeImage" value="<?php echo $recipe['recipeImage']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editCategoryType">Category Type</label>
                        <input type="text" class="form-control" id="editCategoryType" name="editCategoryType" value="<?php echo $recipe['categoryType']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editDirections">Directions</label>
                        <textarea class="form-control" id="editDirections" name="editDirections" rows="4" required><?php echo $recipe['directions']; ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="editPrepTime">Preparation Time</label>
                        <input type="text" class="form-control" id="editPrepTime" name="editPrepTime" value="<?php echo $recipe['prepTime']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editRecipeVideo">Recipe Video URL</label>
                        <input type="text" class="form-control" id="editRecipeVideo" name="editRecipeVideo" value="<?php echo $recipe['recipeVideo']; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="editIngredients">Ingredients</label>
                        <textarea class="form-control" id="editIngredients" name="editIngredients" rows="6" required><?php echo $recipe['ingredients']; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="updateRecipe">Update Recipe</button>
                </form>
            </div>
        </div>
    </div>
</div>
