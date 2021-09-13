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
$ProgrammeSaisoniaire = new prog_saisonaire();
$ProgrammeSaisoniaire->setLabel($label);
$ProgrammeSaisoniaire->setDateDebut($date_debut);
$ProgrammeSaisoniaire->setDateFin($date_fin);
$prog_saisonaireId = $ProgrammeSaisoniaire->save();

$urlListe = Url::generateUrl('programme-saisonaire', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")
?>