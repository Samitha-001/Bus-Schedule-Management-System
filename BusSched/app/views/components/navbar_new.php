<?php
//   gets current URL
$current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<nav class="navbar">
    <div>
        <a href="<?= ROOT ?>/home"><img src="<?= ROOT ?>/assets/images/logo.png" width="120"></a>
    </div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <div class="nav-menu">
            

            

            

            <!-- if the user is logged in -->
            <?php if (isset($_SESSION['USER'])) { ?>
            <a href="<?= ROOT ?>/schedulerprofile"><img src="<?= ROOT ?>/assets/images/icons/profile-icon.png" width="30"  style="align:center"></a>
            <!-- <a href="<?= ROOT ?>/schedulersnotification"><img src="<?= ROOT ?>/assets/images/icons/Bell_Icon.png" width="30"  style="align:center"></a> -->
                <li class="signup-button" style="margin-left:7px"><a href="<?= ROOT ?>/logout">Logout</a></li>
            </div>
        </ul>

        <!-- if user is logged out -->
    <?php } else { ?>
        <a href="<?= ROOT ?>/login">
            <li class="signup-button" style="background-color:black; border: 2px solid #f4511e;">Login</li>
        </a>
        <a href="<?= ROOT ?>/passengersignup">
            <li class="signup-button" style="border: 2px solid #f4511e;">Sign up</li>
        </a>
        </div>
        </ul>
    <?php } ?>

    <!-- <div class="burger" id="hamburger">
        <div onclick="openNav()"><img src="<?= ROOT ?>/assets/images/hamburger.png" height="15"></div>
    </div> -->

</nav>

<!-- side navigation bar for smaller screens -->
<div id="Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="services" href="<?= ROOT ?>/schedulers">My profile</a>

    

    <!-- <?php if (strpos($current_url, '/home') == true) { ?>
        <a class="services" href="#about">About</a>
    <?php } else { ?>
        
    <?php } ?> -->

    <?php if (strpos($current_url, '/home') == true) { ?>
        <a class="li" href="#contact">Contact</a>
    <?php } else { ?>
        <a class="li" href="<?= ROOT ?>/home#contact">Contact</a>
    <?php } ?>

    <div class="login-buttons">
        <!-- if user is logged in -->
        <?php if (isset($_SESSION['USER'])) { ?>
            <a class="sidenav-signup-button" href="<?= ROOT ?>/logout">Logout</a>

            <!-- if user is logged out -->
        <?php } else { ?>
            <a class="sidenav-login-button" href="<?= ROOT ?>/login">Login</a>
            <a class="sidenav-signup-button" href="<?= ROOT ?>/passengersignup">Sign up</a>
            <!-- </div> -->
        <?php } ?>
    </div>

</div>

<script>
function openNav() {
    document.getElementById("Sidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("Sidenav").style.width = "0";
}
</script>