<?php

require_once './lib/models/connect.php';

$sth = $dbh->prepare("UPDATE tasks SET title = :title, description = :description, end_date = :endDate WHERE id = :id");

$sth->execute([
    ':title' => $title,
    ':description' => $description,
    ':endDate' => $end_date,
    ':id' => $id
]);
