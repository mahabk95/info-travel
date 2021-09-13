<?php

if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
}
else{
    $passport = false;
}
$stationId = (new station(NULL, $lablel))->save();

$urlListe = Url::generateUrl('station', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>