<?php

$passport = true;
if(isset($_POST['label']) && !empty($_POST['label'])){
    $label = $_POST['label'];
}
else{
    $passport = false;
}

if(isset($_POST['date_debut']) && !empty($_POST['date_debut'])){
    $date_debut = $_POST['date_debut'];
}
else{
    $passport = false;}

if(isset($_POST['date_fin']) && !empty($_POST['date_fin'])){
    $date_fin  = $_POST['date_fin'];}
else{
    $passport = false;
}
if(isset($_POST['id']) && !empty($_POST['id'])){
    $id  = $_POST['id'];}
else{
    $passport = false;
}
$prog_saisonaire = new prog_saisonaire();
$prog_saisonaire->setId($id);
$prog_saisonaire->setLabel($label);
$prog_saisonaire->setDateDebut($date_debut);
$prog_saisonaire->setDateFin($date_fin);
$prog_saisonairetId = $prog_saisonaire->update();
$urlListe = Url::generateUrl('programme-saisonaire', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>