<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="recipe.css">
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ingredientsList = document.getElementById('ingredientsList');

            function addIngredientInput() {
                const newIngredientInput = document.createElement('input');
                newIngredientInput.type = 'text';
                newIngredientInput.className = 'ingredient';
                newIngredientInput.required = true;
                newIngredientInput.placeholder = 'Ingredient';
                if (ingredientsList.lastElementChild.tagName === 'INPUT' && ingredientsList.lastElementChild.value !== '') {
                    ingredientsList.appendChild(document.createTextNode(', '));
                }
                ingredientsList.appendChild(newIngredientInput);
            }

            addIngredientInput();

            ingredientsList.addEventListener('input', function (event) {
                const lastIngredientInput = ingredientsList.lastElementChild;
                if (event.target === lastIngredientInput && lastIngredientInput.value !== '') {
                    addIngredientInput();
                }
            });
        });
    </script>
    <div class="container">
        <h1>Add Recipe</h1>
        <form id="recipeForm" action="../recipecrud/index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="recipeImage">Recipe Image:</label>
                <input type="file" id="recipeImage" name="recipeImage" accept="image/*">
            </div>
            <div class="form-group">
                <label for="recipeName">Recipe Name:</label>
                <input type="text" id="recipeName" name="recipeName" required>
            </div>
            <div class="form-group">
                <label for="categoryType">Category Type:</label>
                <select id="categoryType" name="categoryType" required>
                    <option value="hilly">Hilly</option>
                    <option value="himalayan">Himalayan</option>
                    <option value="terai">Terai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients:</label>
                <input type="text" id="ingredient" name="ingredient" required></li>
            </div>
            <div class="form-group">
                <label for="directions">Directions:</label>
                <textarea id="directions" name="directions" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="prepTime">Preparation Time:</label>
                <input type="text" id="prepTime" name="prepTime" required>
            </div>
            <div class="form-group">
                <label for="recipeVideo">Recipe Video:</label>
                <input type="file" id="recipeVideo" name="recipeVideo" accept="video/*">
            </div>
            <div class="form-group">
                <button type="submit">Save</button>
                <button type="button" id="closeForm">Close</button>
            </div>
        </form>
    </div>
</body>
</html>
