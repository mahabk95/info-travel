<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$regim_hobdtId = (new RegimHebdo($id))->delete();

$urlListe = Url::generateUrl('regim-hebdomadaire', 'liste');
Message::getMessage($urlListe, "les données ont été supprimé avec success")



?>