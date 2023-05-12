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
} else if ($_SESSION['USER']->role == 'driver') {
    redirect('drivers');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php';?>
    <link href="<?= ROOT ?>/assets/css/mobilestyle.css" rel="stylesheet">
    <title>Conductor - Home</title>
</head>

<body>
        <?php include 'components/navbarcon.php'; 
        // include 'components/conductorsidebar.php';
        ?>
    <!-- <nav class="navbar">
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

    </nav> -->
<!-- 
    <div class="wrapper">
        <div class="sidebar">
        <li><a href="<?= ROOT ?>/conductors" style="color:#9298AF;">Dashboard</a></li> -->
            <!--<li><a href="" style="color:#9298AF;">Location</a></li>-->
            <!-- <li><a href="<?= ROOT ?>/conductorschedules" style="color:#9298AF;">Schedules</a></li>
            <li><a href="<?= ROOT ?>/busprofileconductors" style="color:#9298AF;">Buses</a></li>
            <li><a href="<?= ROOT ?>/activetickets" style="color:#9298AF;">Bus Tickets</a></li>
            <li><a href="<?= ROOT ?>/conductorfares" style="color:#9298AF;">Bus Fares</a></li>
            <li><a href="<?= ROOT ?>/breakdowns" style="color:#9298AF;">Breakdowns</a></li>
            <li><a href="<?= ROOT ?>/contactowners" style="color:#9298AF;">contacts</a></li>
        </div>
    </div>  -->

    <!-- -->
    <div class="header orange-header">
        <div class="col-1">
            

        <div class="card-container" id="greeting-card">
            <h2>
                <?php
                echo "Welcome " . $_SESSION['USER']->username . "!";
                ?>
            </h2>
        </div>
</div>
</div>

        <!-- <div class="col-3">
        <div class="card-container span-col-2">
        </div>
        </div> -->

<main class="container1"> 
<div class="col-4">  
        <div class="card-container" id="location-card">
            <a href="<?= ROOT ?>/conductors" >
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
    <!-- </div> -->

<!-- <div class="col-5">  -->
        <div class="card-container" id="ratings-card">
        <a href="<?= ROOT ?>/conductorratings">
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
            </a>
        </div>
<!-- </div> 

<div class="col-6">  -->

        <div class="card-container" id="schedules-card">
        <a href="<?= ROOT ?>/conductorschedules" >
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
            </a>
 </div> 
        </div>
</div> 
<div class="col-5">  
        <div class="card-container" id="breakdowns-card">
            <a href="<?= ROOT ?>/breakdowns">
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
<!-- </div>

 <div class="col-9">  -->
        <div class="card-container" id="fare-card">
        <a href="<?= ROOT ?>/conductorfares">
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
            </a>
        </div>
    <!-- </div>
    <div class="col-10">  -->
        <div class="card-container" id="contacts-card">
        <a href="<?= ROOT ?>/contactowners">
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
            </a>
        </div>

        </div>
     
    <div class="col-7"> 

        <div class="card-container" id="tickets-card">
        <a href="<?= ROOT ?>/activetickets" >
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
            </a>
        </div>
    </div>  
</main> 


</body>

</html>