<?php 

$title = $_POST['newTask'];
$description = $_POST['description'];
$endDate = $_POST['endDate'];
require './lib/controllers/create.php';