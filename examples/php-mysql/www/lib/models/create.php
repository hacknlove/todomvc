<?
require_once './lib/models/connect.php';

$_SESSION['lastId']++;

$_SESSION['tasks'][] = [
    'id' => $_SESSION['lastId'],
    'title' => $_POST['newTask'],
    'completed' => false
];
