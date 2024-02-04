<?php
require_once './lib/models/connect.php';

$sth = $dbh->prepare("SELECT * FROM tasks");

$sth->execute();

$tasks = $sth->fetchAll();
