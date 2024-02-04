<?php

require_once './lib/models/connect.php';

$sth = $dbh->prepare("DELETE FROM tasks WHERE id = ?");

$sth->execute([$id]);
