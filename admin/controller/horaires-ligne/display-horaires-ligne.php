<?php


$idhor_ligne = $_GET['id'];
$hor_ligne = (new hor_ligne($idhor_ligne))->getDepot();
include 'vues/horaires-ligne/display-horaires-ligne-vues.php';



?>