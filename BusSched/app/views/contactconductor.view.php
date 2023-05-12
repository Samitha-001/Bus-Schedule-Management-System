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

    <link href="<?= ROOT ?>/assets/css/mobilestyle.css" rel="stylesheet">
</head>

<body>
<?php include 'components/navbarcon.php'; 
        // include 'components/conductorsidebar.php';
?>
    <!-- // <nav class="navbar">
    //     <div>
            // <h2><a href="<?= ROOT ?>/admins" id="logo-white">BusSched</a></h2>
     //     </div>
    //     <ul class="nav-links">
    //         <div class="menu">
    //             <a href="<?= ROOT ?>/admins">
    //                 <li><img src="<?= ROOT ?>/assets/images/profile-icon.png" class="nav-bar-img"></li>
    //             </a>
    //             <a href="<?= ROOT ?>/logout">
    //             <li class="signup-button" style="margin-left:7px"><a href="<?= ROOT ?>/login">Logout</a></li>
    //             </a>
    //         </div>
    //     </ul>
    // </nav> --> 
<!-- 
    <div class="wrapper">
        <div class="sidebar">
        <li><a href="<?= ROOT ?>/conductors" style="color:#9298AF;">Dashboard</a></li>
            <!--<li><a href="" style="color:#9298AF;">Location</a></li>-->

            <!-- <li><a href="<?= ROOT ?>/conductorschedules" style="color:#9298AF;">Schedules</a></li>
            <li><a href="<?= ROOT ?>/busprofileconductors" style="color:#9298AF;">Buses</a></li>
            <!--<li><a href="<?= ROOT ?>/busprofileconductors" style="color:#9298AF;">Ratings</a></li>-->
            <!-- <li><a href="<?= ROOT ?>/activetickets" style="color:#9298AF;">Bus Tickets</a></li>
            <li><a href="<?= ROOT ?>/conductorfares" style="color:#9298AF;">Bus Fares</a></li>
            <li><a href="<?= ROOT ?>/breakdowns" style="color:#9298AF;">Breakdowns</a></li>
            <li><a href="<?= ROOT ?>/contactowners" style="color:#9298AF;">contacts</a></li>
        </div>
    </div> --> 

    <main class="container1">
        <div class="header orange-header">
        <div class="col-1">
            
            <table>
                <tr>
                    
                    <th style="padding-left:30px"><a href="<?= ROOT ?>/contactdrivers" ><h3>Drivers</h3></a></th>
                    <th style="padding-left:30px"><a href="<?= ROOT ?>/contactconductors" ><h3>Conductors</h3></a></th>
                </tr>
                
            </table> 
        </div>
            
        </div>

        <div class="data-table">
        <div class="selection">
                <table >
                <tr>
                    
                    
                </tr>
                
            </table>   
        </div>
    <div class="col-2">
        <h1>Conductors</h1>
    <table border='1' class="styled-table">
               

<?php
                
                $testuser = new User();
                $conductorContacts = $testuser->getContactDetails('conductor');
                // show($driverContacts);
                // $i = 0;
                foreach ($conductorContacts as $conductorContact) {

                    echo "<tr>";
                    echo "<th>Assinged Bus</th>";
                    echo "<td> $conductorContact[assigned_bus] </td>";
                    echo "<tr>";

                    echo "<tr>";
                    echo "<th></th>";
                    echo "<th>Name</th>";
                    echo "<td>$conductorContact[name]</td>";
                    echo "</tr>";
                    

                    echo "<tr>";
                    echo "<th></th>";
                    echo "<td>Email</td>";
                    echo "<td> $conductorContact[email] </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th></th>";
                    echo "<td>Address</td>";
                    echo "<td>$conductorContact[address]</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                    echo "<th></th>";
                    echo "<td>Contact No</td>";
                    echo "<td> $conductorContact[phone] </td>";
                    echo "</tr>";

                   

                
                } ?>
            </table>
    
        </div>
    </div>

        

    </main>

</body>

</html>