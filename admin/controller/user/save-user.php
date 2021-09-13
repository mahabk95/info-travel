<?php

if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
}
else{
    $passport = false;
}
$userId = (new user(NULL, $lablel))->save();

$urlListe = Url::generateUrl('user', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>