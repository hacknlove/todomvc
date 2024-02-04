<?php
require_once './lib/models/connect.php';

$sth = $dbh->prepare("SELECT COUNT(*) FROM tasks WHERE completed = 0");

$sth->execute();

$count = $sth->fetch();

$remaining = $count[0];