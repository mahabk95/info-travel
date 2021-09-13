<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$ligneId = (new ligne($id))->delete();

$urlListe = Url::generateUrl('ligne', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>