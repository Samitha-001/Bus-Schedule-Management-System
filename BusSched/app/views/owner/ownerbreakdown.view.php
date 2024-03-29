<?php
if (!isset($_SESSION['USER'])) {
    redirect('home');
}
?>


<!doctype html>
<html lang="en">

<head>
    <?php include '../app/views/components/head.php';?>

    <title>Breakdowns</title>

    <link href="<?= ROOT ?>/assets/css/owner-profile.css" rel="stylesheet">
    
    <script src="<?= ROOT ?>/assets/js/ownerbreakdown.js"></script>
    
</head>

<body>
<?php
include '../app/views/components/ownernavbar.php';
include '../app/views/components/ownersidebar.php';
$bus = new Bus();
$buses = $bus->getOwnerBuses($_SESSION['USER']->username);

$temp = new Breakdown();
$temp->update(1, ['time_to_repair' => 199]);
?>

    <div class="header orange-header">
        <div>
            <h2>Breakdowns</h2>
        </div>
    </div>
    <main class="container">
<?php
$owner = $_SESSION['USER']->username;
$history_breakdowns = new Breakdown();
$history_breakdown = $history_breakdowns->getOwnerBreakdowns($owner);
?>

<!-- current breakdown if any -->
    <div>
        <h3 style="margin-bottom:10px;">Current Breakdowns</h3>
        <?php
        // go through $breakdowns and get breakdowns with status = "repairing"
        $current_breakdowns = array();
        foreach ($breakdowns as $breakdown) {
            if ($breakdown->status == "repairing") {
                array_push($current_breakdowns, $breakdown);
            }
        }

        if (count($current_breakdowns) > 0) {
            ?>
            <table border='1' class='styled-table'>
                <tr>
                    <th>#</th>
                    <th>Breakdown time</th>
                    <th>Bus</th>
                    <th>Description</th>
                    <th>Estimated repair time (mins)</th>
                    <th></th>
                </tr>

                <?php
                // display each current breakdown
                foreach ($current_breakdowns as $breakdown) {?>
                    <tr>
                        <td> <?=$breakdown->id?> </td>
                        <td> <?=$breakdown->breakdown_time?> </td>
                        <td> <?=$breakdown->bus_no?> </td>
                        <td> <?=$breakdown->description?> </td>
                        <td> 
                            <form method="post" action="<?=ROOT?>/ownerbreakdowns/modifyBreakdown/<?=$breakdown->id?>" style="padding:0px;">
                                <input id="repair-time" name="time_to_repair" type="number" value="<?=$breakdown->time_to_repair?>" disabled>
                                <button id="submit-edit-btn" type="submit" style="display:none;"></button>
                            </form>
                        </td>
                        <td>
                            <button id="breakdown-repaired-btn" class="button-green" data-breakdown-id='<?=$breakdown->id?>'>repaired</button>
                            <button id="breakdown-edit-btn" class="button-green" style="border:#f15f22;background-color:#f15f22;" data-breakdown-id='<?=$breakdown->id?>'>edit</button>

                            <button id="breakdown-save-btn" class="button-green" style="border:#f15f22;background-color:#f15f22; display:none;">save</button>
                            <button id="breakdown-cancel-btn" class="button-green" style="border:red;background-color:red; display:none;">cancel</button>
                        </td>
                    </tr>

                    <?php
                }
                echo "</table>";
            } else echo "<p style='width:100%; text-align:center;'>No current breakdowns</p>";
        ?>
    </div>
    
        <div class="w-100 p-5">
            <h3 style="margin-bottom:10px;">Add Breakdowns</h3>

    <!-- add breakdown -->
        <form method="post" id="view_breakdown">

            <?php if (!empty($errors)): ?>
            <?= implode("<br>", $errors) ?>
                <?php endif; ?>

                <div>
                   
                <table class="styled-table">
                        <tr>
                            <td style="color:#24315e;"><label for="bus_no">Bus No. </label></td>
                            <td>
                            <select id="bus_no" name="bus_no"   class="form-control" required>
                              
                               
                               <?php 
                                 foreach ($buses as $bus) {
                                 ?>
                                   <option><?php echo $bus->bus_no; ?> </option>
                                   <?php 
                                   }
                                  ?>
                               
                            </select>
                            </td>
                        </tr>
            

                        <tr>
                            <td style="color:#24315e;"><label for="description">Description </label></td>
                            <td><input name="description" type="text" class="form-control" id="description"
                                    placeholder="Description..." required></td>
                        </tr>
                        <tr>
                            <td style="color:#24315e;"><label for="time_to_repair">Time to Repair </label></td>
                            <td><input name="time_to_repair" type="text" class="form-control" id="time_to_repair"
                                    placeholder="Time to repair..." required></td>
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

        </div>
    </main>

</body>

</html>