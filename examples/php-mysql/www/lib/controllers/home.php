<?php

$tasks = [];

if (isset($_POST['newTask'])) {
    require './lib/models/create.php';
}

if (isset($_POST['toogle'])) {
    require './lib/models/toogle.php';
}

if (isset($_POST['delete'])) {
    require './lib/models/delete.php';
}

require './lib/models/findAll.php';

require './lib/views/main.php';
