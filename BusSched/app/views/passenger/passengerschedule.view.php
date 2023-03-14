
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Schedule</title>

    <link href="<?= ROOT ?>/assets/css/ticket.css" rel="stylesheet">
    <script src="<?= ROOT ?>/assets/js/schedule.js"></script>
</head>

<body>
    <?php
    include '../app/views/components/navbar.php';
    // include '../app/views/components/passengernavbar.php';
    // get from and to from link if they exist
    $from = isset($_GET['from']) ? $_GET['from'] : '';
    $to = isset($_GET['to']) ? $_GET['to'] : '';
    echo "<script>console.log('from: $from, to: $to');</script>";
    ?>

    <div class="search-bar" style="padding: 10px;">
        <div class="row">
            <div id="from-to">
                <div>
                    <input type="text" name="from" id="from" placeholder="From" <?php if ($from) echo "value=".$from; ?>>                    
                </div>
                <div><input type="text" name="to" id="to" placeholder="To" <?php if ($to) echo "value=".$to; ?>></div>
                <!-- <div style="margin:auto;"><button class="button-orange ticket-button" id="find-button">Find</button></div> -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-10 col-s-10" style="margin: auto;">
            <table style="width: 100%; font-size: 12px;">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Departure Time</th>
                    <th>Starting Halt</th>
                    <th>Bus No</th>
                    <th>Price</th>
                    <th>Seats Available</th>
                    <th>Book</th>
                </tr>
                <?php static $i = 1; ?>
                <?php if($trips): foreach ($trips as $trip): ?>
                <tr data-id = <?= $trip->id ?> class='data-row'>
                    <td><?= $i ?></td>
                    <?php $i++; ?>
                    <td data-fieldname="trip_date"><?= $trip->trip_date ?></td>
                    <td data-fieldname="departure_time"><?= $trip->departure_time ?></td>
                    <td data-fieldname="starting_halt"><?= $trip->starting_halt ?></td>
                    <td data-fieldname="bus_no"><?= $trip->bus_no ?></td>
                    <td data-fieldname="price"></td>
                    <td data-fieldname="seats_available"></td>
                    <td>
                        <?php if (isset($_SESSION['USER'])) { ?>
                            <a href="<?= ROOT ?>/passengerticket"><img src="<?= ROOT ?>/assets/images/icons/buyticket-icon.png" alt="Buy Ticket" style="height:30px"></a>
                        <?php } else { ?>
                            <a href="<?= ROOT ?>/login"><img src="<?= ROOT ?>/assets/images/icons/buyticket-icon.png" alt="Buy Ticket" style="height:30px"></a>
                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; else:?>
                <tr>
                    <td colspan="9" style="text-align:center;color:#999999;"><i>Sorry! No matches found.</i></td>
            </tr>
          <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>