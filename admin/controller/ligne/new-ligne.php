<?php

$allstations = (new Station())->getAllstations();
$stations = (new Station())->getAllstations();
$depots = (new Depot())->getAllDepots();
$regimes = (new RegimHebdo())->getAllregimHebdo();
$ligne = new ligne();


include 'vues/ligne/form-ligne-vues.php';



?>