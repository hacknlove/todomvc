<?php
require_once './lib/models/connect.php';

$sth = $dbh->prepare("SELECT * FROM tasks WHERE completed = 1");

$sth->execute();

$tasks = $sth->fetchAll();

