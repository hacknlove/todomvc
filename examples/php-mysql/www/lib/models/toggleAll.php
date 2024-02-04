<?php

require_once './lib/models/connect.php';

$toggle = false;

foreach ($_SESSION['tasks'] as $task) {
    if (!$task['completed']) {
        $toggle = true;
        break;
    }
}

foreach ($_SESSION['tasks'] as $id => $task) {
    $_SESSION['tasks'][$id]['completed'] = $toggle;
}