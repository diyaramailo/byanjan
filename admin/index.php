<?php
// Include header

$cssLocation = "admin.css";
include('layouts/header.php');
?>

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
                <td class="active">
                    <p>Active</p>
                </td>
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
                <td class="active">
                    <p>Active</p>
                </td>
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
                <td class="active">
                    <p>Active</p>
                </td>
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
                <td class="active">
                    <p>Active</p>
                </td>
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
                <td class="active">
                    <p>Active</p>
                </td>
                <td class="role">
                    <p>Owner</p>
                </td>
                <td class="edit"><a href="#" rel="noreferrer">Edit</a></td>
            </tr>
        </tbody>

    </table>
</div>
<?php
// Include header
include('layouts/footer.php');
?>