<?php

require './lib/models/saveTask.php';

$path = explode('?', $_SERVER['HTTP_REFERER'], 2)[0];

header('Location: '.$path);