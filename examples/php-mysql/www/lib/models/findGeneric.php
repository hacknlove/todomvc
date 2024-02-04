<?php

switch ($sort) {
    case 'active':
        $sql .= " ORDER BY completed";
        break;
    case 'completed':
        $sql .= " ORDER BY completed DESC";
        break;
    case 'deadline':
    case 'deadline':
        $sql .= " ORDER BY end_date";
        break;
    case '-deadline':
        $sql .= " ORDER BY end_date DESC";
        break;
    case 'created_at':
        $sql .= " ORDER BY start_date";
        break;
    case '-created_at':
        $sql .= " ORDER BY start_date DESC";
        break;
    case 'title':
        $sql .= " ORDER BY title";
        break;
    case '-title':
        $sql .= " ORDER BY title DESC";
        break;
}

$sth = $dbh->prepare($sql);

$sth->execute();

$tasks = $sth->fetchAll();
