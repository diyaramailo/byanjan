
<?php
include('./header.php');
?>
<section id="home">
    <div class="swiper-wrapper">
        <!-- slide 1 -->
        <div class="container">
            <div class="home-text">
                <h1>Discover the rich tapestry of <br>Nepali flavors, <br>where every dish tells <br>story of tradition and taste</h1>
                <?php if (isset($_SESSION['userId'])) : ?>
                    <a href="./recipe" class="btn">Explore<i class='bx bx-right-arrow-alt'></i></a>
                <?php else : ?>
                <a href="../registration" class="btn">Sign up<i class='bx bx-right-arrow-alt'></i></a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- section for region -->
<section id="features">
    <h1>What we aim for?</h1>
    <p>We are here to promote Nepali taste globally.</p>
    <div class="fea-base">
        <div class="fea-box">
            <h3>Himalayan Region Cuisines</h3>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="fea-box">
            <h3>Hilly Region Cuisines</h3>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="fea-box">
            <h3>Terai Region Cuisines</h3>
            <i class="fa-solid fa-star"></i>
        </div>
    </div>
</section>


<!-- Section for best recipe of the week -->
<section id="bestrecipe">
    <h1>Best Rated Recipes!</h1>
    <div class="recipe-col">
        <?php
        require_once('../db_connect.php');

        $sql = "SELECT rt.*, COALESCE(SUM(r.rating), 0) AS total_rating
        FROM recipe_table rt
        LEFT JOIN review r ON rt.id = r.recipe_id
        GROUP BY rt.id
        ORDER BY total_rating DESC
        LIMIT 3";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="recipe-col">
                    <div class="recipe-sec">
                        <img src="<?php echo $row['recipeImage']; ?>" alt="<?php echo $row['recipeName']; ?>">
                        <div class="details">
                            <h4><?php echo $row['recipeName']; ?></h4>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No recipes found.";
        }

        ?>
    </div>
</section>

<!-- section for try new recipe -->
<section id="tryrecipe">
    <h1>What Would You Like to Try Making Today?</h1>
    <div class="try-col">
        <?php
        // Establish a new database connection
        require_once('../db_connect.php');

        $sql = "SELECT * FROM recipe_table ORDER BY RAND() LIMIT 3";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="try-sec">
                    <img src="<?php echo $row['recipeImage']; ?>" alt="<?php echo $row['recipeName']; ?>">
                    <div class="details">
                        <h4><?php echo $row['recipeName']; ?></h4>
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No recipes found.";
        }

        mysqli_close($conn);
        ?>
    </div>
</section>

<?php
include('./footer.php');
?>