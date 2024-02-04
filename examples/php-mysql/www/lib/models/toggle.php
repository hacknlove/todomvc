<?
require_once './lib/models/connect.php';

$sth = $dbh->prepare("UPDATE tasks SET completed = :completed WHERE id = :id");

$sth->bindParam(':completed', $completed);
$sth->bindParam(':id', $id);

$sth->execute();
