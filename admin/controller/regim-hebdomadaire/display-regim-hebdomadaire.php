<?php


$id = $_GET['id'];

$regim_hobd = (new regimHebdo($id))->getRegimHebdo();
include 'vues/regim-hebdomadaire/display-regim_hebdomadaire-vues.php';



?>