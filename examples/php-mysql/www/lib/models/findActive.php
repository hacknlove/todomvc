<?php
require_once './lib/models/connect.php';

$sth = $dbh->prepare("SELECT * FROM tasks WHERE completed = 0");

$sth->execute();

$tasks = $sth->fetchAll();

$remaining = count($tasks);
