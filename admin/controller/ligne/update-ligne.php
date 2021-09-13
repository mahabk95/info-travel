<?php

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
if(isset($_POST['id']) && !empty($_POST['id'])){

    $id = $_POST['id'];
}
else{
    $passport = false;
}
if(isset($_POST['regin_hebdomadeur_id']) && !empty($_POST['regin_hebdomadeur_id'])){

    $regin_hebdomadeur_id = $_POST['regin_hebdomadeur_id'];
}
else{
    $passport = false;
}

$ligne = new ligne();
$ligne->setNumero($numero);

$ligne->setStatus($status);
$ligne->setStationArriveeId($station_arrivee_id);
$ligne->setStationDepartId($station_depart_id);
$ligne->setDepotId($depot_id);
$ligne->setReginHebdomadeurId($regin_hebdomadeur_id);
$ligne->setId($id);

$ligneId = $ligne->update();
$urlListe = Url::generateUrl('ligne', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>