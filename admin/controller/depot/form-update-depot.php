<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}

$depot = (new Depot($id))->getDepot();

include 'vues/depot/form-depot-vues.php';


?>