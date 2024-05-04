<!-- View Recipe Modal -->
<div class="modal fade" id="viewRecipeModal<?php echo $recipe['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewRecipeModalLabel<?php echo $recipe['id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewRecipeModalLabel<?php echo $recipe['id']; ?>">View Recipe: <?php echo $recipe['recipeName']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $recipe['recipeImage']; ?>" class="img-fluid" alt="<?php echo $recipe['recipeName']; ?>">
                    </div>
                    <div class="col-md-6">
                        <p><strong>Category Type:</strong> <?php echo $recipe['categoryType']; ?></p>
                        <p><strong>Directions:</strong></p>
                        <p><?php echo nl2br($recipe['directions']); ?></p>
                        <p><strong>Preparation Time:</strong> <?php echo $recipe['prepTime']; ?></p>
                        <?php if (!empty($recipe['recipeVideo'])) : ?>
                            <p><strong>Recipe Video URL:</strong> <a href="<?php echo $recipe['recipeVideo']; ?>" target="_blank"><?php echo $recipe['recipeVideo']; ?></a></p>
                        <?php endif; ?>
                        <p><strong>Ingredients:</strong></p>
                        <ul>
                            <?php 
                            $ingredients = explode("\n", $recipe['ingredients']);
                            foreach ($ingredients as $ingredient) {
                                echo '<li>' . trim($ingredient) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
