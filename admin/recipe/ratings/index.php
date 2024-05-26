<?php
require_once('../../../db_connect.php');

// Query to fetch recipes and their ratings from the database
$sql = "SELECT r.*, AVG(rt.rating) AS avg_rating 
        FROM recipe_table r 
        LEFT JOIN review rt ON r.id = rt.recipe_id 
        GROUP BY r.id 
        ORDER BY r.id DESC";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if (!$result) {
    echo "Error fetching recipes: " . mysqli_error($conn);
    die();
    // Handle the error as needed, maybe log it
} else {
    // Check if recipes exist
    if (mysqli_num_rows($result) > 0) {
        try {
            $recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            echo "Error fetching recipes: " . $e->getMessage();
        }
    } else {
        $recipes = [];
    }
}

// Include header
$pageTitle = "Recipe Ratings";
$cssLocation = '../../admin.css';
include('../../layouts/header.php');
?>

<div class="container mt-5">
    <h2 class="mb-4">Recipe Ratings</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Directions</th>
                <th>Average Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $recipe) : ?>
                <tr>
                    <td><?php echo $recipe['id']; ?></td>
                    <td><?php echo $recipe['recipeName']; ?></td>
                    <td><?php echo $recipe['directions']; ?></td>
                    <td><?php echo $recipe['avg_rating'] ? number_format($recipe['avg_rating'], 1) : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
// Include footer
include('../../layouts/footer.php');
?>
