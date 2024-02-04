<?php

if (isset($_POST['toogle'])) {
    require './lib/models/toogle.php';
}

require './lib/models/findAll.php';

require './lib/views/main.php';
