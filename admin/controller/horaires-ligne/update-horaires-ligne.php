<?php



if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
    $id = $_POST['id'];
}
else{
    $passport = false;
}
$hor_ligne = new hor_ligne(NULL, $lablel);
$hor_ligne->setLabel($lablel);
$hor_ligne->setId($id);
$hor_ligneId = $hor_ligne->update();
$urlListe = Url::generateUrl('hor_ligne', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>