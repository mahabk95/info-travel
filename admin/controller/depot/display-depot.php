<?php


$idDepot = $_GET['id'];
$depot = (new Depot($idDepot))->getDepot();
include 'vues/depot/display-depot-vues.php';



?>