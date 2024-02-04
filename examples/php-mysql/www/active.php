<?php 

$edit = isset($_GET['edit']) ? intval($_GET['edit']) : null;

$sort = isset($_GET['sort-by']) ? $_GET['sort-by'] : null;

include './lib/controllers/active.php';