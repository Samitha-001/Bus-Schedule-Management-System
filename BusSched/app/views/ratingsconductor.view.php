<?php
if (!isset($_SESSION['USER'])) {
    redirect('home');
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php include 'components/head.php';?>


    <title>Contacts</title>

    <link href="<?= ROOT ?>/assets/css/style2.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar">
        <div>
            <h2><a href="<?= ROOT ?>/admins" id="logo-white">BusSched</a></h2>
        </div>
        <ul class="nav-links">
            <div class="menu">
                <a href="<?= ROOT ?>/admins">
                    <li><img src="<?= ROOT ?>/assets/images/profile-icon.png" class="nav-bar-img"></li>
                </a>
                <a href="<?= ROOT ?>/logout">
                    <li class="button-orange">Logout</li>
                </a>
            </div>
        </ul>
    </nav>

    <div class="wrapper">
        <div class="sidebar">
            <li><a href="<?= ROOT ?>/admins" style="color:#9298AF;">Dashboard</a></li>
            <li><a href="#" style="color:#9298AF;">Location</a></li>
            <li><a href="#" style="color:#9298AF;">Schedules</a></li>
            <li><a href="<?= ROOT ?>/buses" style="color:#9298AF;">Buses</a></li>
            <li><a href="#" style="color:#9298AF;">Ratings</a></li>
            <li><a href="#" style="color:#9298AF;">Bus Tickets</a></li>
            <li><a href="<?= ROOT ?>/fares" style="color:#9298AF;">Bus Fares</a></li>
            <li><a href="#" style="color:#9298AF;">Breakdowns</a></li>
            <li><a href="<?= ROOT ?>/halts" style="color:#9298AF;">Contacts<</a></li>
        </div>
    </div>

    <main class="container1">
        <div class="header orange-header">
            <div>
                <h3>Contacts</h3>
            </div>
            
        </div>

        <div class="data-table">
        <!-- <div class="selection">
                <table >
                <tr>
                    <th><button id="btn" class="button-grey">Bus Owner</button></th>
                    <th><button id="btn" class="button-grey">Drivers</button></th>
                    <th><button id="btn" class="button-grey">Conductors</button></th>
                </tr>
                
            </table>    -->
        </div>

            <table border='1' class="styled-table">
                <tr>
                    <th>Name</th>
                    <th>EmailAddress</th>
                    <th>Contact No</th>
                    <th>Assinged Bus</th>
                </tr>

                <?php
                foreach ($contactowners as $owner) {
                    echo "<tr>";
                    echo "<td> $owner->name </td>";
                    echo "<td> $owner->email </td>";
                    echo "<td> $owner->tp </td>";
                    echo "<td> $owner->bus_no </td>";
                    echo "</tr>";
                } ?>

            </table>
        </div>

        <script src="<?= ROOT ?>/assets/js/bus.js"></script>

    </main>

</body>

</html>