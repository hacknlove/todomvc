<?php
require_once './lib/models/connect.php';

$tasks = [];

foreach($_SESSION['tasks'] as $task) {
    if ($task['completed']) {
        $tasks[] = $task;
    }
};

