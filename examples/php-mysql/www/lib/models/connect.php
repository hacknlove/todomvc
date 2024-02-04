<?php
session_start();

if (!isset($_SESSION['lastId'])) {
    $_SESSION['lastId'] = -1;
}

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
