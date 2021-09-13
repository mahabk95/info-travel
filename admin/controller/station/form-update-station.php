<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}

$station = (new station($id))->getstation();

include 'vues/station/form-station-vues.php';


?>