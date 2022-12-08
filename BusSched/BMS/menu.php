<?php 
    require_once('includes/connection.php');
    session_start();
?>

<style>
    <?php 
        require "css/menu.css";
    ?>
</style>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Scheduler Page</title>
</head>
<body>
<input type="checkbox" id="menu">
    <nav>
        <label for=""><img src="<?php echo "img/Logo.png"?>"></label>
        <ul>
        <li><a href="#">Services</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#"><img src="img/Bell Icon.png" alt="Bell"></a></li>
          <li><a href="#"><img src="img/Profile.png " alt="Profile"></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <label for="menu" class="menu-bar">
            <i class="fa fa-bars"></i>
        </label>
    </nav>
    <div class="side-menu">
        <a href="profile.php"><span><img src="img/Profile.png" alt="Profile"></span></a>
        <a href="fare_table.php"><span><img src="img/Ticket.png" alt="Fare"></span></a>
        <a href="bus_schedule.php"><span><img src="img/icons8-timetable-50 2.png" alt="Schedule"></span></a>
        <a href="bus_list.php"><span><img src="img/Bus Icon.png" alt="Bus List"></span></a>

        <a href="logout.php" class="Logout"><span>Logout</span></a>
    </div>

    