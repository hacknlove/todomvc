<?
require_once './lib/models/connect.php';

$sth = $dbh->prepare("INSERT INTO tasks (title) VALUES (:title)");

$sth->bindParam(':title', $title);

$sth->execute();

