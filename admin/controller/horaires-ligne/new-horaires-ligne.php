<?php
$passport = true;
if(isset($_GET['id']) && !empty($_GET['id'])){
    $ligne_id = $_GET['id'];
}
else{
    $passport = false;
}


$ligne = (new Ligne($ligne_id))->getLigne();

$stationDepart  = (new Station($ligne->getStationDepartId()))->getStation();
$stationArrivee = (new Station($ligne->getStationArriveeId()))->getStation();

$hor_ligne = new HorairesLigne();


include 'vues/horaires-ligne/form-horaires-ligne-vues.php';



?>