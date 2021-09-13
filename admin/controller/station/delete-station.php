<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$stationId = (new station($id))->delete();

$urlListe = Url::generateUrl('station', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>