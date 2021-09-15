<?php

$passport = true;
if(isset($_GET['id']) && !empty($_GET['id'])){
    $ligne_id = $_GET['id'];
}
else{
    $passport = false;
}
$ligne = (new Ligne($ligne_id))->getLigne();
$horairesLigne = (new HorairesLigne())->getHorairesLigneByLineId($ligne_id);

$programmeSaison = (new prog_saisonaire($horairesLigne['programme_saisonaire_id']))->getProgrammeSaison();
$regimHebdo = (new RegimHebdo($horairesLigne['regim_hebdomadeur_id']))->getRegimHebdo();


$stationDepart  = (new Station($ligne->getStationDepartId()))->getStation();
$stationArrivee = (new Station($ligne->getStationArriveeId()))->getStation();

include 'vues/horaires-ligne/display-horaires-ligne-vues.php';



?>