<?php



if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
    $id = $_POST['id'];
}
else{
    $passport = false;
}
$station = new station(NULL, $lablel);
$station->setLabel($lablel);
$station->setId($id);
$stationId = $station->update();
$urlListe = Url::generateUrl('station', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>