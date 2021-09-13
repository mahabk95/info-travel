<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}

$regimeHebdo = (new RegimHebdo($id))->getRegimHebdo();

include 'vues/regim-hebdomadaire/form-regim-hebdomadaire-vues.php';


?>