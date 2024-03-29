<?php
include 'components/navbar_new.php';
include 'components/schedulersidebar.php';
?>

<!doctype html>
<html lang="en">

<head>
    <?php include 'components/head.php';?>

    <title>Buses</title>

    <link href="<?= ROOT ?>/assets/css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/schedsidebar.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/schedbus.css">

</head>

<body>



    <main class="container1">

        <div class="header orange-header">
            <div>
                <h3>Buses</h3>
            </div>
            <div><button id="downloadBtn" class="button-grey" onclick="downloadFile()">Download</button></div>
        </div>

        <form method="post" id="view_bus" style="display:none">

            <?php if (!empty($errors)) : ?>
                <?= implode("<br>", $errors) ?>
            <?php endif; ?>

            <div>
                <table class="styled-table" id="tableData">
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
                        <td style="color:#24315e;"><label for="availability">Bus Available</label></td>
                        <td>
                        <div class="toggle-switch">
                            <input type="checkbox" id="toggle" class="toggle-input">
                            <label for="toggle" class="toggle-label"></label>
                        </div>
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
                <th>Bus No.</th>
            <th>Bus Type</th>
            <th>Seats</th>
            <th>Bus Route</th>
            <th>Start</th>
            <th>Destination</th>
            <th>Owner</th>
            <th>Conductor</th>
            <th>Driver</th>
                </tr>

                <?php
                foreach ($buses as $bus) :?>
                    <tr>
                    
                    <td> <?php echo $bus->bus_no ?> </td>
                    <td> <?php echo $bus->type ?></td>
                    <td> <?php echo $bus->seats_no ?></td>
                    <td> <?php echo $bus->route ?></td>
                    <td> <?php echo $bus->start ?></td>
                    <td data-fieldname="dest"><?= $bus->dest; ?></td>
                  <td data-fieldname="owner"><?= $bus->owner ?></td>
                  <td data-fieldname="conductor"><?= $bus->conductor ?></td>
                  <td data-fieldname="driver"><?= $bus->driver ?></td>
                    </tr>
                    <?php endforeach; ?>
                
                
               

            </table>
        </div>

        
        <script src="<?= ROOT ?>/assets/js/downloadbus.js"></script>

    </main>

</body>

</html>