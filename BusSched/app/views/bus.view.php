
<!doctype html>
<html lang="en">

<head>
    <?php include 'components/head.php';?>
    <title>Available Buses</title>

    <link href="<?= ROOT ?>/assets/css/style2.css" rel="stylesheet">
   
</head>

<body>
<?php
include 'components/ownernavbar.php';
include 'components/ownersidebar.php';
?>
  <main class="container1">

<div class="header orange-header">
    <div>
        <h3>Buses</h3>
    </div>
    <div><button id="btn" class="button-grey">Update Availability</button></div>
</div>

<form method="post" id="view_bus" style="display:none">

    <?php if (!empty($errors)) : ?>
        <?= implode("<br>", $errors) ?>
    <?php endif; ?>

    <div>
        <table class="styled-table">
            <tr>
                <td style="color:#24315e;"><label for="bus_no">Bus No. </label></td>
                <td><input name="bus_no" type="text" class="form-control" id="bus_no" placeholder="Bus No..." required></td>
            </tr>

            <tr>
                <td style="color:#24315e;"><label for="type">Bus Type </label></td>
                <td>
                    <select name="type" id="type" class="form-control" required>
                        <option disabled selected value>--select an option--</option>
                        <option value="L">Luxury</option>
                        <option value="S">Semi-Luxury</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td style="color:#24315e;"><label for="seats_no">Capacity </label></td>
                <td><input name="seats_no" type="number" class="form-control" id="seats_no" placeholder="Available no. of seats..." required></td>
            </tr>

            <tr>
                <td style="color:#24315e;"><label for="availability">Bus Available? </label></td>
                <td>
                    <label class="switch">
                        <input type="checkbox" id="availability" name="availability" value="1">
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>

            <tr>
                <td style="color:#24315e;"><label for="route">Route </label></td>
                <td><input name="route" type="text" class="form-control" id="route" placeholder="Bus route..." required></td>
            </tr>

            <tr>
                <td style="color:#24315e;"><label for="start">Start </label></td>
                <td><input name="start" type="text" class="form-control" id="start" placeholder="Starting halt..." required></td>
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
            <th>Bus No.</th>
            <th>Bus Type</th>
            <th>No. of Seats</th>
            <th>Bus Available?</th>
            <th>Bus Route</th>
            <th>Start</th>
        </tr>

        <?php
        foreach ($buses as $bus) {
            echo "<tr>";
            echo "<td> $bus->id </td>";
            echo "<td> $bus->bus_no </td>";
            echo "<td> $bus->type </td>";
            echo "<td> $bus->seats_no </td>";
            echo "<td> $bus->availability </td>";
            echo "<td> $bus->route </td>";
            echo "<td> $bus->start </td>";
            echo "</tr>";
        } ?>

    </table>
</div>

<script src="<?= ROOT ?>/assets/js/bus.js"></script>
</main>
</body>

</html>


