<?php
require_once('../../../db_connect.php');

// Query to fetch recipes awaiting approval from the database
$sql = "SELECT * FROM recipe_table WHERE is_approved = 0 ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// Check if recipes exist
if (mysqli_num_rows($result) > 0) {
    $recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $recipes = [];
}

// Include header
$pageTitle = "Recipes Awaiting Approval";
$cssLocation = '../../admin.css';
include('../../layouts/header.php');
?>

<div class="container mt-5">
    <h2 class="mb-4">Recipes Awaiting Approval</h2>
    
    <!-- Recipe Approval Table -->
    <?php if (isset($_GET['approve_success'])) : ?>
        <div class="alert alert-success" role="alert">
            Recipe approved successfully.
        </div>
    <?php endif; ?>
    <?php if(count($recipes) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Directions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($recipes as $recipe) : ?>
                    <tr>
                        <td><?php echo $recipe['id']; ?></td>
                        <td><?php echo $recipe['recipeName']; ?></td>
                        <td><?php echo $recipe['directions']; ?></td>
                        <td>
                            <!-- Approve Recipe Form -->
                            <form action="approve.php" method="POST" style="display: inline;">
                                <input type="hidden" name="recipe_id" value="<?php echo $recipe['id']; ?>">
                                <button type="submit" class="btn btn-success" name="approve">Approve</button>
                            </form>

                            <!-- Delete Recipe Form -->
                            <form action="../delete.php" method="POST" style="display: inline;">
                                <input type="hidden" name="recipeId" value="<?php echo $recipe['id']; ?>">
                                <input type="hidden" name="confirmDelete" value="1">
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            No recipes awaiting approval.
        </div>
    <?php endif; ?>
</div>

<?php
// Include footer
include('../../layouts/footer.php');
?>
