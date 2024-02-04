<?php 

$id = intval($_POST['id']);
$title = $_POST['title'];
$description = $_POST['description'];

require './lib/controllers/saveTrack.php';