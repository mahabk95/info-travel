<?php



if(isset($_POST['label']) && !empty($_POST['label'])){
    $lablel = $_POST['label'];
    $id = $_POST['id'];
}
else{
    $passport = false;
}
$user = new Depot(NULL, $lablel);
$user->setLabel($lablel);
$user->setId($id);
$userId = $user->update();
$urlListe = Url::generateUrl('user', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>