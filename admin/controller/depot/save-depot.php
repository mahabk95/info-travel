<?php

if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
}
else{
    $passport = false;
}
$depotId = (new Depot(NULL, $lablel))->save();

$urlListe = Url::generateUrl('depot', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>