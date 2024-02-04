<?php
require_once './lib/models/connect.php';

$remaining= 0;

foreach($_SESSION['tasks'] as $task) {
    if (!$task['completed']) {
        $remaining++;
    }
};

