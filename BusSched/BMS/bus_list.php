<?php
require_once "menu.php";

if(!isset($_SESSION['user_id']))
    header('Location: login.php');
?>
<div class="data">Bus List and other options will be shown here</div>