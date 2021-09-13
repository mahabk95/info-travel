<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$userId = (new user($id))->delete();

$urlListe = Url::generateUrl('user', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>