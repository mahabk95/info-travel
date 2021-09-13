<?php
//var_dump($_POST);
if(isset($_POST['numero']) && !empty($_POST['numero'])){
    $numero = $_POST['numero'];
}
else{
    $passport = false;
}
if(isset($_POST['status'])){
    $status = $_POST['status'];
}
else{
    $passport = false;
}
if(isset($_POST['station_depart_id']) && !empty($_POST['station_depart_id'])){
    $station_depart_id = $_POST['station_depart_id'];
}
else{
    $passport = false;
}
if(isset($_POST['station_arrivee_id']) && !empty($_POST['station_arrivee_id'])){
    $station_arrivee_id 	 	 = $_POST['station_arrivee_id'];
}
else{
    $passport = false;
}
if(isset($_POST['depot_id']) && !empty($_POST['depot_id'])){
    $depot_id = $_POST['depot_id'];
}
else{
    $passport = false;
}
$Ligne = new Ligne();
$Ligne->setNumero($numero);
$Ligne->setStatus($status);
$Ligne->setDepotId($depot_id);
$Ligne->setReginHebdomadeurId(1);
$Ligne->setStationArriveeId($station_arrivee_id);
$Ligne->setDepotId($depot_id);
$Ligne->setStationDepartId($station_depart_id);
$ligneId = $Ligne->save();

$urlListe = Url::generateUrl('ligne', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>