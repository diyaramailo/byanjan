<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true ) {
    //if user is not loginn then he cant access the admin dashboard  if he tried to then he will be redirected to login page
    header('Location: http://localhost/Project/login');
    
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link to css -->
    <link rel="stylesheet" href="admin.css">
    <!-- link to the icons library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div>
        <section id="menu">
            <div class="logo">
                <img src="byanjan-removebg-preview.png" alt="">
                <h2>Byanjan</h2>
            </div>
            <div class="items">
            <li><i class="fa-solid fa-chart-pie"></i><a href="#" rel="noreferrer">User Management</a></li>
            <li><i class="fa-solid fa-layer-group"></i><a href="#" rel="noreferrer">Categories</a></li>
            <li><i class="fa-solid fa-bowl-rice"></i><a href="../recipecrud" rel="noreferrer">Recipes</a></li>
            <li><i class="fa-regular fa-star"></i><a href="#" rel="noreferrer">Ratings</a></li>
            <li><i class="fa-regular fa-comment"></i><a href="#" rel="noreferrer">Comments</a></li>
            <?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo '<li><i class="fa-solid fa-gear"></i><a href="http://localhost/Project/logout.php" rel="noreferrer">Log out</a></li>';
}
?>     
            </div>
        </section>
        <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div>
                        <i id="menu-btn" class="fas fa-bars"></i>
                    </div>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text">
                    </div>
                </div>
                <div class="profile">
                    <i class="fas fa-bell"></i>
                    <img src="chef.jpg" alt="">
                </div>
            </div>
            <h3 class="i-name">Dashboard</h3>
            <div class="values">
                <div class="val-box">
                    <i class="fas fa-users"></i>
                    <div>
                        <h3>8,937</h3>
                        <span>New Users</span>
                    </div>
                </div>
                <div class="val-box">
                    <i class="fa-solid fa-user-plus"></i>
                    <div>
                        <h3>20,678</h3>
                        <span>Online Users</span>
                    </div>
                </div>
                <div class="val-box">
                    <i class="fa-solid fa-users"></i>
                    <div>
                        <h3>30,457</h3>
                        <span>Total Users</span>
                    </div>
                </div>
                <div class="val-box">
                    <i class="fa-solid fa-face-grin-stars"></i>
                    <div>
                        <h3>25,045</h3>
                        <span>Ratings</span>
                    </div>
                </div>
    
            </div>
            <div class="board">
                <table width="100%">
                   <thead>
                    <tr>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Status</td>
                        <td>Role</td>
                        <td></td>
                    </tr>
                   </thead>  
                   <tbody>
                    <tr>
                        <td class="people">
                            <img src="omar.jpg" alt="">
                            <div class="people-de">
                                <h5>Sugam Thapa</h5>
                                <p><a href="mailto:sugam234@gmail.com" target="_blank" rel="noreferrer">sugam234@gmail.com</a></p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web dev</p>
                        </td>
                        <td class="active"><p>Active</p></td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="" rel="noreferrer">Edit</a></td>
                        
    
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="omar.jpg" alt="">
                            <div class="people-de">
                                <h5>Sugam Thapa</h5>
                                <p><a href="mailto:sugam234@gmail.com" target="_blank" rel="noreferrer">sugam234@gmail.com</a></p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web dev</p>
                        </td>
                        <td class="active"><p>Active</p></td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#" rel="noreferrer">Edit</a></td>
                        
    
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="omar.jpg" alt="">
                            <div class="people-de">
                                <h5>Sugam Thapa</h5>
                                <p><a href="mailto:sugam234@gmail.com" target="_blank" rel="noreferrer">sugam234@gmail.com</a></p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web dev</p>
                        </td>
                        <td class="active"><p>Active</p></td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#" rel="noreferrer">Edit</a></td>
                        
    
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="omar.jpg" alt="">
                            <div class="people-de">
                                <h5>Sugam Thapa</h5>
                                <p><a href="mailto:sugam234@gmail.com" target="_blank" rel="noreferrer">sugam234@gmail.com</a></p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web dev</p>
                        </td>
                        <td class="active"><p>Active</p></td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#" rel="noreferrer">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="omar.jpg" alt="">
                            <div class="people-de">
                                <h5>Sugam Thapa</h5>
                                <p><a href="mailto:sugam234@gmail.com" target="_blank" rel="noreferrer">sugam234@gmail.com</a></p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web dev</p>
                        </td>
                        <td class="active"><p>Active</p></td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#" rel="noreferrer">Edit</a></td>
                    </tr>
                   </tbody>  
                    
                </table>
            </div>
        </section>
    
    
    
        
    </div>
    
</body>
</html>