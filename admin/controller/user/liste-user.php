<?php

$allusers = (new user())->getAllusers();
include 'vues/user/all-user-vues.php';

?>