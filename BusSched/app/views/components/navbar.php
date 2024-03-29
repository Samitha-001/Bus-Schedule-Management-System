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
                <?php
                if (isset($_SESSION['USER'])) {
                    if ($_SESSION['USER']->role == 'passenger') {
                        ?>
                        <?php
                        if (strpos($current_url, '/home') == true) { // checks if current URL is home page
                            ?>
                            <a href="#about-scroll">About us</a>
                            <a href="#fare-scroll">Bus fare</a>
                        <?php } else { ?>
                            <a href="<?= ROOT ?>/home#about-scroll">About us</a>
                            <a href="<?= ROOT ?>/home#fare-scroll">Bus fare</a>
                        <?php } ?>
                        <a href="<?= ROOT ?>/passengerschedule">Schedule & Tickets</a>
                        <!-- <a href="<?= ROOT ?>/passengerschedule">Buy tickets</a> -->
                        <a href="<?= ROOT ?>/passengertickets">My tickets</a>


                    <?php }
                } ?>

                <!-- if the user is logged in -->
                <?php if (isset($_SESSION['USER'])) { ?>
                <a id="bell-icon"><img src="<?= ROOT ?>/assets/images/icons/Bell_Icon.png" width="25"></a>
                
                <a href="<?= ROOT ?>/passengerprofile"><img src="<?= ROOT ?>/assets/images/icons/profile-icon.png" width="25"></a>
                <!-- change logout style -->
                <a href="<?= ROOT ?>/logout" style="padding-top:5px;">
                    <li class="signup-button"
                        style="border: 2px solid #f4511e;background-color:black;">Logout
                    </li>
                </a>
            </div>
        </ul>

        <!-- if user is logged out -->
        <?php } else { ?>
            <?php
            if (strpos($current_url, '/home') == true) { // checks if current URL is home page
                ?>
                <a href="#about-scroll">About us</a>
                <a href="#fare-scroll">Bus fare</a>
            <?php } else { ?>
                <a href="<?= ROOT ?>/home#about-scroll">About us</a>
                <a href="<?= ROOT ?>/home#fare-scroll">Bus fare</a>
            <?php } ?>
            <a href="<?= ROOT ?>/passengerschedule">Schedule & Tickets</a>
            <!-- <a href="<?= ROOT ?>/passengerschedule">Buy tickets</a> -->

            <a href="<?= ROOT ?>/login" style="padding-top:5px;">
                <li class="signup-button" style="background-color:black; border: 2px solid #f4511e;">Login</li>
            </a>
            <a href="<?= ROOT ?>/passengersignup" style="padding-top:5px;">
                <li class="signup-button" style="border: 2px solid #f4511e;">Sign up</li>
            </a>
            </div>
            </ul>
        <?php } ?>

        <div class="burger" id="hamburger">
            <div onclick="openNav()"><img src="<?= ROOT ?>/assets/images/hamburger.png" height="15"></div>
        </div>

    </nav>

    <!-- side navigation bar for smaller screens -->
    <div id="Sidenav" class="sidenav">

        <a onclick="closeNav()" class="sidenav-logo"><img src="<?= ROOT ?>/assets/images/logo.png" width="120"></a>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div id="sidenav-links-div">
            <?php if (isset($_SESSION['USER'])) { ?>
                <a class="li" href="<?= ROOT ?>/passengerprofile">My Profile</a>

                <a href="<?= ROOT ?>/passengerschedule">Schedule & Tickets</a>
                <a href="<?= ROOT ?>/passengertickets">My tickets</a>
                <!-- <a href="<?= ROOT ?>/passengerschedule">Buy tickets</a> -->

            <?php } else { ?>
                <!-- <a href="<?= ROOT ?>/passengerschedule">Bus schedule</a>
        <a href="<?= ROOT ?>/login">Bus tickets</a> -->
                <?php
                if (strpos($current_url, '/home') == true) { // checks if current URL is home page
                    ?>
                    <a onclick="closeNav()" href="#about-scroll">About us</a>
                    <a onclick="closeNav()" href="#fare-scroll">Bus fare</a>
                <?php } else { ?>
                    <a href="<?= ROOT ?>/home#about-scroll">About us</a>
                    <a href="<?= ROOT ?>/home#fare-scroll">Bus fare</a>
                <?php } ?>
                <a href="<?= ROOT ?>/passengerschedule">Schedule & Tickets</a>
                <!-- <a href="<?= ROOT ?>/passengerschedule">Buy tickets</a> -->

            <?php } ?>
            <?php
            if (strpos($current_url, '/home') == true) { // checks if current URL is home page
                ?>
                <a href="#fare-scroll">Bus fare</a>
            <?php } else { ?>
                <a href="<?= ROOT ?>/home#fare-scroll">Bus fare</a>
            <?php } ?>

            <div class="login-buttons">
                <!-- if user is logged in -->
                <?php if (isset($_SESSION['USER'])) { ?>
                    <a class="signup-button" style="background-color:black; border: 2px solid #f4511e;"
                       href="<?= ROOT ?>/logout">Logout</a>

                    <!-- if user is logged out -->
                <?php } else { ?>
                    <a class="sidenav-login-button" href="<?= ROOT ?>/login">Login</a>
                    <a class="sidenav-signup-button" href="<?= ROOT ?>/passengersignup">Sign up</a>
                <?php } ?>
            </div>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("Sidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("Sidenav").style.width = "0";
        }
    </script>

<?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role == 'passenger') { ?>
    <script>
        const ROLE = 'passenger'
        const USERNAME = '<?= $_SESSION['USER']->username ?>'

        //Breakdown notifications
        let funcBreakdown = (d) => {
            new Toast('fa fa-bus', 'rgba(255,0,0,0.78)', 'Bus Breakdown', d.message, true, 3000)
        }
        try {
            new Socket().receive_data("breakdown", funcBreakdown, ROLE, USERNAME)
        } catch (e) {
            new Toast('fa fa-wifi', 'rgba(255,0,0,0.78)', 'Bad Connection', 'Please check your internet connection', true, 3000)
        }

        //Trip notifications
        let funcTrip = (d) => {
            new Toast('fa fa-bus', '#a0ff00', "Trip Started", d.message, true, 3000)
        }
        try {
            new Socket().receive_data("trip-start", funcTrip, ROLE, USERNAME)
        } catch (e) {
            new Toast('fa fa-wifi', 'rgba(255,0,0,0.78)', 'Bad Connection', 'Please check your internet connection', true, 3000)
        }

        //Bus delayed notifications
        let funcDelayed = (d) => {
            new Toast('fa fa-clock-o', 'rgba(255,0,0,0.78)', 'Bus Delayed', d.message, true, 3000)
        }
        try {
            new Socket().receive_data("delay", funcDelayed, ROLE, USERNAME)
        } catch (e) {
            new Toast('fa fa-wifi', 'rgba(255,0,0,0.78)', 'Bad Connection', 'Please check your internet connection', true, 3000)
        }

        //Points refund notifications
        let funcRefund = (d) => {
            new Toast('fa fa-money', '#a0ff00', 'Points Refunded', d.message, true, 3000)
        }
        try {
            new Socket().receive_data("refund", funcRefund, ROLE, USERNAME)
        } catch (e) {
            new Toast('fa fa-wifi', 'rgba(255,0,0,0.78)', 'Bad Connection', 'Please check your internet connection', true, 3000)
        }
    </script>
<?php } ?>