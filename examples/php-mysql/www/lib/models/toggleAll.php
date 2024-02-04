<?php

require_once './lib/models/connect.php';

$sthIsThereAnyUncompleted = $dbh->prepare("SELECT * FROM tasks WHERE completed = false LIMIT 1");

$sthIsThereAnyUncompleted->execute();

$completed = $sthIsThereAnyUncompleted->rowCount() != 0;

$sth = $dbh->prepare("UPDATE tasks SET completed = ?");

$sth->execute([$completed]);
