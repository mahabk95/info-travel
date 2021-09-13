<?php

if(isset($_POST['regim_hebdomadeur_id']) && !empty($_POST['regim_hebdomadeur_id'])){
    $regim_hebdomadeur_id = $_POST['regim_hebdomadeur_id'];
}
else{
    $passport = false;
}
if(isset($_POST['programme_saisonaire_id']) && !empty($_POST['programme_saisonaire_id'])){
    $programme_saisonaire_id = $_POST['programme_saisonaire_id'];
}
else{
    $passport = false;
}if(isset($_POST['heure-depart']) && !empty($_POST['heure-depart'])){
    $heuresDepart = $_POST['heure-depart'];
}
else{
    $passport = false;
}
if(isset($_POST['heure-arrivee']) && !empty($_POST['heure-arrivee'])){
    $heuresArrivee = $_POST['heure-arrivee'];
}
else{
    $passport = false;
}
if(isset($_POST['num-depart']) && !empty($_POST['num-depart'])){
    $numsDepart = $_POST['num-depart'];
}
else{
    $passport = false;
}
if(isset($_POST['lineId']) && !empty($_POST['lineId'])){
    $lineId = $_POST['lineId'];
}
else{
    $passport = false;
}
if(isset($_POST['direction_id']) && !empty($_POST['direction_id'])){
    $directionId = $_POST['direction_id'];
}
else{
    $passport = false;
}
$lineId = 6;
//var_dump($heuresDepart);


foreach ($heuresDepart as $k => $hd){
    $horairesLine = new HorairesLigne();
    $horairesLine->setRegimHebdomadeurId($regim_hebdomadeur_id)
        ->setProgrammeSaisonaireId($programme_saisonaire_id)
        ->setLigneId($lineId)
        ->setDirection($directionId);
    $horairesLine->setHeureDepart($hd)->setHeureArrivee($heuresArrivee[$k])->setNumeroDepart($numsDepart[$k]);

    $horairesLine->save();
}
die;



$urlListe = Url::generateUrl('hor_ligne', 'liste');
Message::getMessage($urlListe, "les données ont été enregistrer avec success")



?>