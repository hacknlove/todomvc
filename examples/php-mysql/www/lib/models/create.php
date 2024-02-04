<?
require_once './lib/models/connect.php';

$sth = $dbh->prepare("INSERT INTO tasks (title, description, start_date, end_date) VALUES (:title, :description, CURDATE(), :endDate)");

$sth->bindParam(':title', $title);
$sth->bindParam(':description', $description);
$sth->bindParam(':endDate', $endDate);

$sth->execute();

