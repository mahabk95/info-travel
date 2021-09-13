<?php


$iduser = $_GET['id'];
$user = (new user($idDepot))->getuser();
include 'vues/user/display-user-vues.php';



?>