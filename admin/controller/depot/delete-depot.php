<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$depotId = (new Depot($id))->delete();

$urlListe = Url::generateUrl('depot', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>