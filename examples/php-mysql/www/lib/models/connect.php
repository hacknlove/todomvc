<?php

require_once './lib/config.php';

$dsn = "mysql:dbname={$dbconfig['dbname']};host={$dbconfig['dbhost']}";

$dbh = new PDO($dsn, $dbconfig['dbuser'], $dbconfig['dbpassword']);
