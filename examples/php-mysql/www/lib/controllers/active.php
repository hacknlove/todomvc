<?php

require './lib/models/findActive.php';
$remaining = count($tasks);

$type = 'active';

require './lib/views/main.php';
