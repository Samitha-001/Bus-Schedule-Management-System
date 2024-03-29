
<!doctype html>
<html lang="en">

<head>
    <?php include '../app/views/components/head.php';?>

    <title>Buses Owned</title>

    <link href="<?= ROOT ?>/assets/css/owner-profile.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/owner_view.css" rel="stylesheet">

    <style>
         table tr:not(:first-child){
            cursor:pointer;transition: all.25s ease-in-out;
         }
    </style>
   
</head>

<body>
<?php
include '../app/views/components/ownernavbar.php';
include '../app/views/components/ownersidebar.php';
?>

<div class="header orange-header">
    <div>
        <h3>My buses</h3>
    </div>
    <div><a href="<?= ROOT ?>/ownerregisterbus" class="button-grey" >Register bus</a></div>
</div>


<main class="container">
<div class='row'>
<div class="col-10 col-s-10" style="margin: auto; padding:0px;">

    <br>
    <table id="table" class="schedule-table">
        <tr>
            <th>#</th>
            <th>Bus No.</th>
            <th>Type</th>
            <th>Seats No.</th>
            <th>Route</th>
            <th>Start</th>
            <th>Destination</th>
            <th>Owner</th>
            <th>Conductor</th>
            <th>Driver</th>
        </tr>

        
        <?php
        // if not empty, then display the buses
        if ($buses):
        foreach ($buses as $bus): ?>
       
            <tr data-href="<?= ROOT ?>/ownereditbusprofile?bus_id=<?=$bus->id?>">
                <td><?= $bus->id ?></td>
                <td><?= $bus->bus_no ?></td>
                <td><?= $bus->type ?></td>
                <td><?= $bus->seats_no ?></td>
                <td><?= $bus->route ?></td>
                <td><?= $bus->start ?></td>
                <td><?= $bus->dest ?></td>
                <td><?= $bus->owner ?></td>
                <td><?= $bus->conductor ?></td>
                <td><?= $bus->driver ?></td>
            </tr>
           
        <?php endforeach;
            else : ?>
            <tr>
                <td colspan="10">No buses found</td>
            </tr>
        <?php endif;?>
    </table>
</div>

    
</div>
    <script>

        document.addEventListener("DOMContentLoaded",()=>{
            const rows = document.querySelectorAll("tr[data-href]");

            rows.forEach(row=>{
                row.addEventListener("click",()=>{
                    window.location.href=row.dataset.href;

                });
            });
        });
    </script>

<!-- <script src="<?= ROOT ?>/assets/js/bus.js"></script> -->
</main>
</body>

</html>


