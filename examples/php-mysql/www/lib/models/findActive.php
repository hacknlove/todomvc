<?php
require_once './lib/models/connect.php';

$sql = "SELECT * FROM tasks WHERE completed = 0";

require './lib/models/findGeneric.php';
