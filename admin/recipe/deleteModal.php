    <!-- Delete Recipe Confirmation Modal -->
    <div class="modal fade" id="deleteRecipeModal<?php echo $recipe['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteRecipeModalLabel<?php echo $recipe['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteRecipeModalLabel<?php echo $recipe['id']; ?>">Delete Recipe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the recipe "<?php echo $recipe['recipeName']; ?>"?</p>
                    <!-- Form to Submit Delete Request -->
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="recipeId" value="<?php echo $recipe['id']; ?>">
                        <button type="submit" class="btn btn-danger" name="confirmDelete">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </form>
                </div>
            </div>
        </div>
    </div>