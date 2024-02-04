<?php

$tasks = [];

if (isset($_POST['newTask'])) {
    require './lib/models/create.php';
}

require './lib/models/findAll.php';

require './lib/views/main.php';
