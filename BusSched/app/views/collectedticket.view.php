<?php
if (!isset($_SESSION['USER'])) {
    redirect('home');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Bus Tickets</title>

    <link href="<?= ROOT ?>/assets/css/style2.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar">
    <div>
        <a href="<?= ROOT ?>/home"><img src="<?= ROOT ?>/assets/images/logo.png" width="120"></a>
    </div>
        <ul class="nav-links">
            <div class="menu">
           <a href="<?= ROOT ?>/admins">
                    <li><img src="<?= ROOT ?>/assets/images/profile-icon.png" class="nav-bar-img"></li>
                </a>
                <a href="<?= ROOT ?>/logout">
                <li class="signup-button" style="margin-left:7px"><a href="<?= ROOT ?>/login">Logout</a></li>
                </a>
            </div>
        </ul>
    </nav>

    <div class="wrapper">
        <div class="sidebar">
            <li><a href="<?= ROOT ?>/conductors" style="color:#9298AF;">Dashboard</a></li>
            <!--<li><a href="" style="color:#9298AF;">Location</a></li>-->
            <li><a href="<?= ROOT ?>/conductorschedules" style="color:#9298AF;">Schedules</a></li>
            <li><a href="<?= ROOT ?>/busprofileconductors" style="color:#9298AF;">Buses</a></li>
            <!--<li><a href="<?= ROOT ?>/busprofileconductors" style="color:#9298AF;">Ratings</a></li>-->
            <li><a href="<?= ROOT ?>/activetickets" style="color:#9298AF;">Bus Tickets</a></li>
            <li><a href="<?= ROOT ?>/fares" style="color:#9298AF;">Bus Fares</a></li>
            <li><a href="<?= ROOT ?>/breakdowns" style="color:#9298AF;">Breakdowns</a></li>
            <li><a href="<?= ROOT ?>/contactowners" style="color:#9298AF;">contacts</a></li>
        </div>
    </div>

    <main class="container1">
        <div class="header orange-header" style="width:100%">
        <table >
                <tr>
                    <th style="padding-left:60px;"><a href="<?= ROOT ?>/activetickets" >Active Tickets</a></th>
                    <th style="padding-left:60px;"><a href="<?= ROOT ?>/collectedtickets" >Collected Tickets</a></th>
                </tr>
                
            </table> 
        </div>

        <div class="data-table">
        <div class="selection">
                  
        </div>

            <table border='1' class="styled-table">
                <tr>
                    <th>TicketID</th>
                    <th>From</th>
                    <th>To</th>
                    <th>BusNo</th>
                    <th>Passengers</th>
                    <th>Departure_time</th>   
                    <th>Date</th>
                </tr>

                <?php
                foreach ($collectedtickets as $ticket) {
                    echo "<tr>";
                    echo "<td> $ticket->id </td>";
                    echo "<td> $ticket->from </td>";
                    echo "<td> $ticket->to </td>";
                    echo "<td> $ticket->bus_no </td>";
                    echo "<td> $ticket->passengers</td>";
                    echo "<td> $ticket->departure_time </td>";
                    echo "<td> $ticket->date </td>";
                    echo "</tr>";
                } ?>

            </table>
        </div>

        <script src="<?= ROOT ?>/assets/js/bus.js"></script>

    </main>

</body>

</html>