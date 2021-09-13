<?php

if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
}
else{
    $passport = false;
}
$regim_hobdId = (new RegimHebdo(NULL, $lablel))->save();

$urlListe = Url::generateUrl('regim-hebdomadaire', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>