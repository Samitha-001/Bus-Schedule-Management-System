<nav class="navbar">
    <div>
        <a href="<?= ROOT ?>/home"><img src="<?= ROOT ?>/assets/images/logo.png" width="150"></a>
    </div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <div class="menu">
            <?php
            if (isset($_SESSION['USER'])) {
            ?>
                <li><a href="<?= ROOT ?>/buses">Buses</a></li>
                <li><a href="<?= ROOT ?>/halts">Halts</a></li>
                <li><a href="<?= ROOT ?>/fares">Fare</a></li>
                <li class="button-orange"><a href="<?= ROOT ?>/logout">Logout</a></li>
        </div>
    </ul>
<?php } else {
?>

    <li><a href="#services" onclick="goToSection()">Services</a></li>
    <li><a href="#about" onclick="goToSection()">About</a></li>
    <li><a href="#contact" onclick="goToSection()">Contact</a></li>
    <a href="<?= ROOT ?>/login">
        <li class="button-orange" style="background-color:black; border: 2px solid #f4511e;">Login</li>
    </a>
    <a href="<?= ROOT ?>/passengersignup">
        <li class="button-orange" style="border: 2px solid #f4511e;">Sign Up</li>
    </a>
    </div>
    </ul>
<?php } ?>

<div class="burger">
    <div><a href=#><img src="<?= ROOT ?>/assets/images/hamburger.png" height="15"></a></div>
</div>
</nav>