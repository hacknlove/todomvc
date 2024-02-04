<?php 

$id = intval($_POST['id']);
$title = $_POST['title'];
$description = $_POST['description'];
$end_date = $_POST['endDate'];

require './lib/controllers/saveTrack.php';