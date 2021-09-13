<?php



if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
    $id = $_POST['id'];
}
else{
    $passport = false;
}
$depot = new Depot(NULL, $lablel);
$depot->setLabel($lablel);
$depot->setId($id);
$depotId = $depot->update();
$urlListe = Url::generateUrl('depot', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>