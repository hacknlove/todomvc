<?php

require_once './lib/models/connect.php';

$sth = $dbh->prepare("UPDATE tasks SET title = :title, description = :description WHERE id = :id");

$sth->execute([
    ':title' => $title,
    ':description' => $description,
    ':id' => $id
]);
