<?php
if (!isset($_SESSION['USER'])) {
    redirect('home');
}
// show($_POST);
?>

<!doctype html>
<html lang="en">

<head>
    <?php include 'components/head.php';?>

    <title>Fares</title>

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
            <li><a href="#" style="color:#9298AF;">Users</a></li>
            <li><a href="#" style="color:#9298AF;">Schedules</a></li>
            <li><a href="<?= ROOT ?>/buses" style="color:#9298AF;">Buses</a></li>
            <li><a href="<?= ROOT ?>/breakdowns" style="color:#9298AF;">Breakdowns</a></li>
            <li><a href="#" style="color:#9298AF;">Ratings</a></li>
            <li><a href="#" style="color:#9298AF;">Tickets</a></li>
            <li><a href="<?= ROOT ?>/fares" style="color:white;"><b>Bus Fares</b></a></li>
            <li><a href="#" style="color:#9298AF;">Routes</a></li>
            <li><a href="<?= ROOT ?>/halts" style="color:#9298AF;">Halts</a></li>
        </div>
    </div>

    <main class="container1">

        <div class="header orange-header">
            <div>
                <h3>Bus Fares</h3>
            </div>
            <div><button id="btn" class="button-grey">Add New</button></div>
        </div>

        <form method="post" id="view_fare" style="display:none">

            <?php if (!empty($errors)) : ?>
                <?= implode("<br>", $errors) ?>
            <?php endif; ?>

            <div style="background-color: red;">
                <table class="styled-table" style="border-radius: 20px;">
                    <tr>
                        <td><label for="source">From</label></td>
                        <td><input type="text" class="form-control" name="source" id="source" placeholder="Starting halt..."></td>
                    </tr>

                    <tr>
                        <td><label for="dest">To</label></td>
                        <td>
                            <input type="text" name="dest" class="form-control" id="dest" placeholder="Destination halt...">
                        </td>
                    </tr>

                    <tr>
                        <td><label for="route_bus">Route</label></td>
                        <td><input type="text" name="route_bus" class="form-control" id="route_bus" placeholder="Bus route..."></td>
                    </tr>

                    <tr>
                        <td><label for="type_bus">Type </label></td>
                        <td>
                            <select name="type_bus" id="type_bus" class="form-control">
                                <option disabled selected value>--select an option--</option>
                                <option value="L">Luxury</option>
                                <option value="S">Semi-Luxury</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="amount">Amount</label></td>
                        <td><input type="number" name="amount" class="form-control" id="amount" placeholder="Bus fare..."></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td align="right">
                            <button class="button-green" type="submit">Save</button>
                            <button class="button-cancel" onclick="cancel()">Cancel</button>
                        </td>
                    </tr>

                </table>
            </div>
        </form>

        <div>
            <br>
            <table border='1' class="styled-table">
                <tr>
                    <th>#</th>
                    <th>From</th>
                    <th>Route</th>
                    <th>To</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Last Updated</th>
                    <!-- <th>Action</th> -->
                </tr>

                <?php
                foreach ($fares as $fare) {
                    echo "<tr>";
                    echo "<td> $fare->id </td>";
                    echo "<td> $fare->source </td>";
                    echo "<td> $fare->dest </td>";
                    echo "<td> $fare->route_bus </td>";
                    echo "<td> $fare->type_bus </td>";
                    echo "<td> $fare->amount</td>";
                    echo "<td> $fare->last_updated </td>";
                    echo "</tr>";
                } ?>

            </table>
        </div>

        <script src="<?= ROOT ?>/assets/js/bus.js"></script>
    </main>

</body>

</html>