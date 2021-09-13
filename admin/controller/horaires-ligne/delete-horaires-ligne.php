<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$hor_ligneId = (new hor_ligne($id))->delete();

$urlListe = Url::generateUrl('hor_ligne', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>