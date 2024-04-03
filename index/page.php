<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link rel="stylesheet" href="index.css">
    <!-- Link to font awesome for  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- link to box icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body>
    <!-- navigation -->
    <nav>
        <img src="../images/byanjan-removebg-preview.png" alt="logo">
        <div class="navigation">
            <ul>
                <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                <li><div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                      <a href="terai.php">Terai Region</a>
                      <a href="hilly.php">Hilly Region</a>
                      <a href="himalayan.php">Himalayan Region</a>
                    </div>
                  </div></li>
                <li><a href="login.php">My Profile<i class="fa-solid fa-right-to-bracket"></i></a></li>
            </ul>
    </nav>
    <!-- name and rating -->
    <section id="rec-name">
        <div class="rec-detail">
            <h6></h6>
            <h1>Kheer</h1>
        </div>
    </section>
    <!-- section for name -->
    <section id="intro">
        <div class="intro-div">
            <div class="intro-intro">
                <p>This rice pudding is the best I've ever tasted, and it gets rave reviews from everyone who tastes it! Sprinkle with nutmeg or cinnamon, if desired. For creamier pudding, use short or medium-grain rice. Mostly popular in all region of Nepal(esp.Hilly)</p>
            </div>
            <div class="intro-img">
                <img src="../images/kheer.jpg" alt="">
            </div>
        </div>
    </section>

    <!--  section for intro-->

    <section id="introsec">
        <div class="intro-box">
            <h3>Preparation</h3>
            <ul>
                <li>Rinse ¼ cup basmati rice a couple of times in fresh water and then soak in enough water for 15 to 20 minutes.
                </li>
                <li>While the rice grains are soaking, take 1-litre full-fat milk in a heavy wide pan or saucepan or kadai.</li>
                
            </ul>
        </div>
    </section>
    <!-- section for ingredrient -->

    <section id="ingredient">
        <h3>Ingredient</h3>
        <table>
            <tr>
                <th>Ingredient</th>
                <th>Quantity</th>
                <th>Unit</th>
            </tr>
            <tr>
                <td>Potato</td>
                <td>1</td>
                <td>KG</td>
            </tr>
        </table>
    </section>

    <!-- Section for calculator -->
    <section id="calculator">
        <a href="calculator_design.php">Calculate Required Quantity here</a>
    </section>


    <!-- section for review -->
    <section id="Review">
        <div class="main_container">
            <h1>Your Review is Everything</h1>
            <div class="card">
                <div class="card-header">Sample Product</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt -4 mb-4">
                            <b> <span id="average-rating">0.0</span></b>
                        </h1>
                        <div class="mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3> <span id="total_review">0</span>Review</h3>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <div class="progress-label-left"><b>5</b> <i class="fa-solid fa-star"></i></div>

                            <div class="progress-label-right">(<span class="total-five-star-review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>                           
                        </p>
                        <p>
                            <div class="progress-label-left"><b>4</b> <i class="fa-solid fa-star"></i></div>

                            <div class="progress-label-right">(<span class="total-four-star-review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>3</b> <i class="fa-solid fa-star"></i></div>

                            <div class="progress-label-right">(<span class="total-three-star-review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>
                        </p>
                        <p><div class="progress-label-left"><b>2</b> <i class="fa-solid fa-star"></i></div>

                            <div class="progress-label-right">(<span class="total-two-star-review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div></p>
                        <p>
                            <div class="progress-label-left"><b>1</b> <i class="fa-solid fa-star"></i></div>

                            <div class="progress-label-right">(<span class="total-one-star-review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h3 class="mt-4 mt-3"> Write Review Here</h3>
                        <button type="button" name="add_review" class="btn btn-primary">Review</button>
                    </div>
                </div>
            </div>
            <div class="mt-5" id="review_content"></div>
        </div>

    </section>

    <div id="review_modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal1-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fa-solid fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fa-solid fa-star star-light submit_star mr-2" id="submit_star_2" data-rating="2"></i>
                        <i class="fa-solid fa-star star-light submit_star mr-2" id="submit_star_2" data-rating="3"></i>
                        <i class="fa-solid fa-star star-light submit_star mr-4" id="submit_star_4" data-rating="4"></i>
                        <i class="fa-solid fa-star star-light submit_star mr-5" id="submit_star_5" data-rating="5"></i>
                    </h4>
                    <div class="form-group">
                        <input type="text" name="user_name" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_review" class="form-control" placeholder="Type Review Here">
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            var rating_data = 0;
    
            $('#add_review').click(function(){
    
                $('#review_modal').modal('show');
            });
    
            $(document).on('mouseenter','.submit_star', function(){
                var rating = $(this).data('rating');
    
                reset_background();
    
                for(var count = 1; count <= rating; count++){
                    $('#submit_star'+count).addClass('text-warning');
                }
            });
    
            function reset_background(){
                for(var count=1; count <= 5;count++){
                  $('#submit_star_'+count).addClass('star_light');
                  
                  $('#submit_star_'+count).removeClass('text-warning');
                }
            }
            $(document).on('mouseleave','.submit_star',function(){
                reset_background();
            });
    
            $(document).on('click', '.submit_star', function(){
                rating_data = $(this).data('rating');
            });

            $('#save_review').click(function(){
                 var user_name = $('#user_name').val();

                 var user_review = $('#user_review'.val());

                 if(user_name == '' || user_review ==''){
                    alert("Please Fill Both Field");
                    return false;
                 }
                 else
                 {
                    $.ajax({
                        url:""
                    })
                 }

            });
    
            
    
        });
    </script>
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
            <p>Copyright &copy; 2024  All rights reserved | Byanjan.com</p>
        </div> 
    </footer>
</body>
</html>

<!-- <div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal1-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4">
                    <i class="fa-solid fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fa-solid fa-star star-light submit_star mr-2" id="submit_star_2" data-rating="2"></i>
                    <i class="fa-solid fa-star star-light submit_star mr-2" id="submit_star_2" data-rating="3"></i>
                    <i class="fa-solid fa-star star-light submit_star mr-4" id="submit_star_4" data-rating="4"></i>
                    <i class="fa-solid fa-star star-light submit_star mr-5" id="submit_star_5" data-rating="5"></i>
                </h4>
                <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input type="text" name="user_review" class="form-control" placeholder="Type Review Here">
                </div>
                <div class="form-group text-center mt-4">
                    <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <script>
    $(document).ready(function(){
        var rating_data = 0;

        $('#add_review').click(function(){

            $('#review_modal').modal('show');
        });

        $(document).on('mouseenter','.submit_star', function(){
            var rating = $(this).data('rating');

            reset_background();

            for(var count = 1; count <= rating; count++){
                $('#submit_star'+count).addClass('text-warning');
            }
        });

        function reset_background(){
            for(var count=1; count <= 5;count++){
              $('#submit_star_'+count).addClass('star_light');
              
              $('#submit_star_'+count).removeClass('text-warning');
            }
        }
        $(document).on('mouseleave','.submit_star',function(){
            reset_background();
        });

        $(document).on('click', '.submit_star', function(){
            rating_data = $(this).data('rating');
        })



    });
</script> -->