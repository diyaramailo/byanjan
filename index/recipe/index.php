<?php
include('../header.php');
?>
<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user is logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // Check if all required fields are set
        if (isset($_POST['recipe_id']) && isset($_POST['rating'])) {
            require_once('../../db_connect.php');

            print_r($_POST);
            //   sleep(10);
            // Sanitize and validate inputs
            $recipe_id = mysqli_real_escape_string($conn, $_POST['recipe_id']);
            $rating = intval($_POST['rating']); // Convert rating to integer
            $user_id = $_SESSION['userId'];

            // Check if a review already exists for the recipe and user
            $check_review_sql = "SELECT * FROM review WHERE recipe_id = ? AND user_id = ?";
            $stmt = mysqli_prepare($conn, $check_review_sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ii", $recipe_id, $user_id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row_count = mysqli_num_rows($result);

                // Close the statement
                mysqli_stmt_close($stmt);

                if ($row_count > 0) {
                    // Review already exists, update the existing review
                    $update_review_sql = "UPDATE review SET rating = ? WHERE recipe_id = ? AND user_id = ?";
                    $stmt = mysqli_prepare($conn, $update_review_sql);
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "iii", $rating, $recipe_id, $user_id);
                        mysqli_stmt_execute($stmt);

                        // Close the statement
                        mysqli_stmt_close($stmt);
                    } else {
                        // Error in preparing SQL statement
                        echo "Error: " . mysqli_error($conn);
                    }
                } else {
                    // Review doesn't exist, insert a new review
                    $insert_review_sql = "INSERT INTO review (user_id, recipe_id, rating) VALUES (?,?,?)";
                    $stmt = mysqli_prepare($conn, $insert_review_sql);
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "iii", $user_id, $recipe_id, $rating);
                        mysqli_stmt_execute($stmt);

                        // Close the statement
                        mysqli_stmt_close($stmt);
                    } else {
                        // Error in preparing SQL statement
                        echo "Error: " . mysqli_error($conn);
                    }
                }
            } else {
                // Error in preparing SQL statement
                echo "Error: " . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);

            // Redirect back to the previous page or any other page as needed
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } else {
            // Required fields are missing
            echo "Error: Required fields are missing.";
        }
    } else {
        // User is not logged in
        $error = "You must be logged in to rate a recipe.";
    }
}

?>
<section id="terai">
    <!-- show error message -->
    <?php if (isset($error)) : ?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['approve_success'])) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['approve_success']; ?>
        </div>
    <?php endif; ?>
    <h1>Explore <?php echo isset($_GET['categoryType']) ? $_GET['categoryType'] : ''; ?> Region's Popular Cuisines</h1>


    <div class="recipe-col">
        <?php
        require_once('../../db_connect.php');

        // Check if the categoryType query parameter is set

        if (isset($_GET['categoryType'])) {
            $categoryType = $_GET['categoryType'];

            // Prepare the SQL statement with a parameter
            $sql = "SELECT rt.*, COALESCE(r.rating, 0) AS user_rating
                        FROM recipe_table rt
                        LEFT JOIN review r ON rt.id = r.recipe_id AND r.user_id = ?
                        WHERE categoryType = ? and is_approved=true";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "is", $_SESSION['userId'],$categoryType,);
        }
        else if (isset($_GET['my_recipe'])) {
            // Prepare the SQL statement with a parameter
            $sql = "SELECT rt.*, COALESCE(r.rating, 0) AS user_rating
                        FROM recipe_table rt
                        LEFT JOIN review r ON rt.id = r.recipe_id AND r.user_id = ?
                        WHERE rt.user_id = ? and is_approved=true";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ii", $_SESSION['userId'], $_SESSION['userId']);
        }
         else {
            // Prepare the SQL statement without a parameter
            $sql = "SELECT rt.*, COALESCE(r.rating, 0) AS user_rating
                        FROM recipe_table rt
                        LEFT JOIN review r ON rt.id = r.recipe_id AND r.user_id = ?
                        WHERE is_approved=true";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $_SESSION['userId']);
        }
        // Prepare and bind the parameter
        if ($stmt) {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="recipe-sec">
                        <img src="<?php echo $row['recipeImage']; ?>" alt="<?php echo $row['recipeName']; ?>">
                        <div class="details">
                            <h4><?php echo $row['recipeName']; ?></h4>
                            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
                                <div class="rating">
                                    <form action="." method="POST" id="ratingForm<?php echo $row['id']; ?>">
                                        <input type="hidden" name="recipe_id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="rating" value="<?php echo $row['user_rating']; ?>">
                                        <span class="fa fa-star" onclick="setRating(1, <?php echo $row['id']; ?>)" style="<?php if ($row['user_rating'] >= 1) echo "color: orange;"; ?>"></span>
                                        <span class="fa fa-star" onclick="setRating(2,<?php echo $row['id']; ?>)" style="<?php if ($row['user_rating'] >= 2) echo "color: orange;"; ?>"></span>
                                        <span class="fa fa-star" onclick="setRating(3,<?php echo $row['id']; ?>)" style="<?php if ($row['user_rating'] >= 3) echo "color: orange;"; ?>"></span>
                                        <span class="fa fa-star" onclick="setRating(4,<?php echo $row['id']; ?>)" style="<?php if ($row['user_rating'] >= 4) echo "color: orange;"; ?>"></span>
                                        <span class="fa fa-star" onclick="setRating(5,<?php echo $row['id']; ?>)" style="<?php if ($row['user_rating'] >= 5) echo "color: orange;"; ?>"></span>
                                    </form>



                                </div>


                            <?php endif; ?>
                            <a href="detail.php?recipe_id=<?php echo $row['id']; ?>">
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </a>
                        </div>
                    </div>
        <?php
                }
            } else {
                echo "<div> There is no recipe </div>";
            }

            // Close the statement and connection
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
        ?>
    </div>
</section>
<!-- footer section -->
<footer>
    <div class="footer-col">
        <h3>Categories</h3>
        <li>Terai Region</li>
        <li>Hilly Region</li>
        <li>Himalayan Region</li>
    </div>
    <div class="footer-col">
        <h3>About</h3>
        <li>About Us</li>
    </div>
    <div class="footer-col">
        <h3>What We provide</h3>
        <li>Best Recipe</li>
        <li>Quantity Calculator</li>
        <li>See ratings</li>
    </div>
    <div class="footer-col">
        <h3>Social Links</h3>
        <div class="social-link">
            <a href="#" target="_blank"><i class="fa-brands fa-facebook" id="facebook"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-youtube" id="youtube"></i></a>
            <a href="mailto:nunadas704@gmail.com" target="_blank" id="email"><i class="fa-solid fa-envelope-circle-check"></i></a>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright &copy; 2024 All rights reserved | Byanjan.com</p>
    </div>
</footer>

<script>
    function setRating(rating, row_id) {
        // Get the input field within the form with the specified ID
        const inputField = document.querySelector('#ratingForm' + row_id + ' input[name="rating"]');

        // Set the value of the input field
        inputField.value = rating;

        // Log the rating and the form ID for debugging
        console.log(rating);
        console.log('ratingForm' + row_id);

        // Submit the form
        document.getElementById('ratingForm' + row_id).submit();

    }
</script>

</body>

</html>