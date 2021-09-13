<?php



if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
    $id = $_POST['id'];
}
else{
    $passport = false;
}
$regim_hobd = new RegimHebdo();
$regim_hobd->setLabel($lablel);
$regim_hobd->setId($id);
$regim_hobdId = $regim_hobd->update();
$urlListe = Url::generateUrl('regim-hebdomadaire', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>