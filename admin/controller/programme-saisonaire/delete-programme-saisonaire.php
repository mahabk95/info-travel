<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$prog_saionaireId = (new prog_saisonaire($id))->delete();

$urlListe = Url::generateUrl('programme-saisonaire', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>