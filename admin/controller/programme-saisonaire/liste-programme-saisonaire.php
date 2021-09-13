<?php

$allprog_saisonaires = (new prog_saisonaire())->getAllProgramSaisoniaire();
include 'vues/pogramme-saisonaire/all-programme-saisonaire-vues.php';

?>