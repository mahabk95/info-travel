<?php


$idprog_saionaire = $_GET['id'];
$prog_saionaire = (new prog_saisonaire($idprog_saionaire))->getProgrammeSaison();
include 'vues/pogramme-saisonaire/display-programme-saisonaire-vues.php';



?>