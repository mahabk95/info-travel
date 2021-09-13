<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}

$prog_saionaire = (new prog_saisonaire($id))->getProgrammeSaison();


include 'vues/pogramme-saisonaire/form-programme-saisonaire-vues.php';


?>