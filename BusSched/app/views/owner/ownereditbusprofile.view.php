<!doctype html>
<html lang="en">

<head>
    <?php include '../app/views/components/head.php';?>

    <title>Bus Profile</title>

    <link href="<?= ROOT ?>/assets/css/owner-profile.css" rel="stylesheet">
    
</head>

<body>
<?php
include '../app/views/components/ownernavbar.php';
include '../app/views/components/ownersidebar.php';
?>

<?php
$busno=$_GET['bus_id'];
// print id
// show($busno);
$bus = new Bus();
$businfo = $bus->first(['id' => $busno]);
// show($businfo);

    ?>

<div class="header orange-header">
    <div>
        <h2>Bus Profile</h2>            
    </div>
</div>
<main class="container1">

<div class="row" style="margin-left:50px">
    <!-- <div class="column left">
        <img src="<?= ROOT ?>/assets/images/buses/bus6.png" class="image">
    </div> -->

    <div class="column middle">
   <form method="post" style="background-color:aliceblue;padding-right:10px" id="bus-form" action="<?= ROOT ?>/ownereditbusprofile/updateOwnerBus">
   <?php if (!empty($errors)) : ?>
        <?= implode("<br>", $errors) ?>
    <?php endif; ?>
   
   <div>
        <table>
            <tr>
                <input id="id" name="id" value="<?php echo $businfo->id?>" hidden >
            <td><label for="bus_no" >Bus Number:</label></td>
            <td><input type="" id="bus_no" name="bus_no" value="<?php echo $businfo->bus_no?>" class="my-input"  disabled ></td>
            </tr>
            <tr>
            <td><label for="type">Type:</label></td>
            <td>
            <select class="my-input" id="type" name="type" disabled value="<?=$businfo->type?>">
                <option value="S">Small</option>
                <option value="L">Large</option>
            </select>
            </tr>
            <tr>
            <td><label for="seats_no">Number of Seats:</label></td>
            <td><input type="number" id="seats_no" name="seats_no" value="<?php echo $businfo->seats_no?>" class="my-input" disabled ></td>
            </tr>
            <tr>
            <td><label for="route">Route:</label></td>
            <td><input type="text" id="route" name="route"value="<?php echo $businfo->route?>" class="my-input" disabled ></td>
            </tr>
            <tr>
            <td><label for="start">Starting Halt:</label></td>
            <td><input type="text" id="start" name="start" default value="<?php echo $businfo->start?>" class="my-input" style="  border: none; outline: none;padding-left: 50px;background-color:aliceblue"  disabled  ></td>
            </tr>
            <tr>
            <td><label for="dest">Destination:</label></td>
            <td><input type="text" id="dest" name="dest" value="<?php echo $businfo->dest?>" class="my-input"  disabled ></td>
            </tr>
            <tr>
            <td><label for="conductor">Conductor:</label></td>
            <td><input type="text" id="conductor" name="conductor" value="<?php echo $businfo->conductor?>" class="my-input"  disabled ></td>
            </tr>
            <tr>
            <td><label for="driver">Driver:</label></td>
            <td><input type="text" id="driver" name="driver" value="<?php echo $businfo->driver?>" class="my-input"  disabled  ></td>
            </tr>
         

           <tr>
            <td>  <input id="submit-btn" type="submit" value="Save Changes" class="" ></td>
            <td> <input id="cancel" type="button" value="Cancel"></td>
            </tr>
        
        </table>

        <input id="edit" type="button" value="Edit" >
        
            
    </div>
    </form>
  </div>
</div>




<script>
    //   var table=document.getElementsByTagName('table')[0];
   
    const editButton = document.getElementById('edit');
    const saveButton = document.getElementById('submit-btn');
    const cancelButton = document.getElementById('cancel');
    const form = document.getElementById("bus-form");
    const input = document.querySelector(".my-input");

    editButton.addEventListener("click", function() {
        const formFields = form.querySelectorAll("input");
        formFields.forEach(function(field) {
            field.disabled = false; 
            field.removeAttribute(" disabled");
            editButton.style.display = "none";
            saveButton.style.display = "block";
            cancelButton.style.display = "block";
            input.focus();
        });
        const selectField = form.querySelector("select");
        selectField.disabled = false;
    });

    cancelButton.addEventListener("click",function(){
        window.history.back();
    });    
    </script>
</main>
</body>

</html>


