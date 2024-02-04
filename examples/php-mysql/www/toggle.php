<?php 

$id = intval($_POST['id']);
$completed = $_POST['toggle'] === 'true' ? true : false;;

require './lib/controllers/toggle.php';