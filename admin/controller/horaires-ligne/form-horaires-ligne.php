<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}

$hor_ligne = (new hor_ligne($id))->gethor_lignet();

include 'vues/horaires-ligne/form-horaires-ligne-vues.php';


?>