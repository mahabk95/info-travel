<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}
$allstations = (new Station())->getAllstations();
$stations = (new Station())->getAllstations();
$depots = (new Depot())->getAllDepots();
$regimes = (new RegimHebdo())->getAllregimHebdo();
$ligne = (new Ligne($id))->getLigne();


include 'vues/ligne/form-ligne-vues.php';


?>