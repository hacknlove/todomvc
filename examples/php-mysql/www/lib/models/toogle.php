<?
require_once './lib/models/connect.php';

$_SESSION['tasks'][intval($_POST['id'])]['completed'] = $_POST['toogle'] === 'true' ? true : false;
