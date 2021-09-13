<?php



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $passport = false;
}

$user = (new user($id))->getuser();

include 'vues/user/form-user-vues.php';


?>