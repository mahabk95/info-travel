<?php


$idligne = $_GET['id'];
$ligne = (new ligne())->getLigneById($idligne);
include 'vues/ligne/display-ligne-vues.php';

?>