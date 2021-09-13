<?php


$idstation = $_GET['id'];
$station = (new station($idstation))->getstation();
include 'vues/station/display-station-vues.php';



?>