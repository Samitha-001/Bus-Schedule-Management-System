<?php
if (!isset($_SESSION['USER'])) {
    redirect('home');
}
// show($_SESSION['USER']->role)
if ($_SESSION['USER']->role == 'passenger') {
    redirect('home');
} else if ($_SESSION['USER']->role == 'admin') {
    redirect('admins');
} else if ($_SESSION['USER']->role == 'scheduler') {
    redirect('schedulers');
} else if ($_SESSION['USER']->role == 'owner') {
    redirect('owners');
} else if ($_SESSION['USER']->role == 'conductor') {
    redirect('conductors');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php';?>

    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style2.css">
    <title>Conductor - Home</title>
</head>

<body>

    <nav class="navbar">
        <div>
            <h2><a href="<?= ROOT ?>/conductors" id="logo-white">BusSched</a></h2>
        </div>

        <ul class="nav-links">
            <div class="menu">
                <a href="<?= ROOT ?>/conductors">
                    <li><img src="<?= ROOT ?>/assets/images/icons/profile-icon.png" class="nav-bar-img"></li>
                </a>
                <a href="<?= ROOT ?>/logout">
                    <li class="button-orange" style="border: 2px solid #f4511e;">Logout</li>
                </a>
            </div>
        </ul>

    </nav>

    <div class="wrapper">
        <div class="sidebar">
            <li><a href="<?= ROOT ?>/conductors" style="color:white;"><b>Dashboard</b></a></li>
            <li><a href="#" style="color:#9298AF;">Location</a></li>
            <li><a href="#" style="color:#9298AF;">Ratings</a></li>
            <li><a href="#" style="color:#9298AF;">Schedules</a></li>
            <li><a href="#" style="color:#9298AF;">Buses</a></li>
            <li><a href="#" style="color:#9298AF;">Breakdowns</a></li>
            <li><a href="#" style="color:#9298AF;">Bus Fares</a></li>
            <li><a href="#" style="color:#9298AF;">Contacts</a></li>
            <li><a href="#" style="color:#9298AF;">Tickets</a></li>
        </div>
    </div>

    <main class="container">

        <div class="card-container" id="greeting-card">
            <h2>
                <?php
                echo "Welcome " . $_SESSION['USER']->username . "!";
                ?>
            </h2>
        </div>

        <div class="card-container" id="info-card">
            <ul>
                <p style="font-size: 32px;">Personal Info</p>
                <table class="styled-table">
                    <tr>
                        <th>Username: </th>
                        <td>
                            <?= $_SESSION['USER']->username ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Name: </th>
                        <td>
                            <?= $data[0]->name ?>
                        </td>
                    <tr>
                        <th>Email: </th>
                        <td>
                            <?= $_SESSION['USER']->email ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Phone: </th>
                        <td>
                            <?= $data[0]->phone ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Address: </th>
                        <td>
                            <?= $data[0]->address ?>
                        </td>
                    </tr>
                </table>
            </ul>
        </div>

        <div class="card-container span-col-2">

        </div>

        <div class="card-container" id="location-card">
            <a href="#">
                <div class="overlay">
                    <div class="items"></div>
                    <div class="items head">
                        <p>Location</p>
                        <hr>
                    </div>
                    <div class="items users">
                        <!-- <p>Bus details</p> -->
                    </div>
                </div>
            </a>
        </div>

        <div class="card-container" id="ratings-card">
            <div class="overlay">
                <div class="items"></div>
                <div class="items head">
                    <p>Ratings</p>
                    <hr>
                </div>
                <div class="items users">
                    <p>User ratings</p>
                </div>
            </div>
        </div>

        <div class="card-container" id="schedules-card">
            <div class="overlay">
                <div class="items"></div>
                <div class="items head">
                    <p>Schedules</p>
                    <hr>
                </div>
                <div class="items users">
                    <p>Bus schedules</p>
                </div>
            </div>
        </div>

        <div class="card-container" id="buses-card">
            <div class="overlay">
                <div class="items"></div>
                <div class="items head">
                    <p>Buses</p>
                    <hr>
                </div>
                <div class="items users">
                    <p>Bus details</p>
                </div>
            </div>
        </div>

        <div class="card-container" id="breakdowns-card">
            <a href="#">
                <div class="overlay">
                    <div class="items"></div>
                    <div class="items head">
                        <p>Breakdowns</p>
                        <hr>
                    </div>
                    <div class="items users">
                        <!-- <p>Bus details</p> -->
                    </div>
                </div>
            </a>
        </div>

        <div class="card-container" id="fare-card">
            <div class="overlay">
                <div class="items"></div>
                <div class="items head">
                    <p>Bus Fare</p>
                    <hr>
                </div>
                <div class="items users">
                    <!-- <p>User ratings</p> -->
                </div>
            </div>
        </div>

        <div class="card-container" id="tickets-card">
            <div class="overlay">
                <div class="items"></div>
                <div class="items head">
                    <p>Contacts</p>
                    <hr>
                </div>
                <div class="items users">
                    <p>Contact details of drivers, conductors</p>
                </div>
            </div>
        </div>

        <div class="card-container" id="tickets-card">
            <div class="overlay">
                <div class="items"></div>
                <div class="items head">
                    <p>Bus Tickets</p>
                    <hr>
                </div>
                <div class="items users">
                    <p><a href="#">Tickets sold</a><br></p>
                </div>
            </div>
        </div>
    </main>


</body>

</html>