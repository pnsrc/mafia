<?php
include "init.php";
$data = $_POST;
$loginze = $data['id'];
$user = R::load('game', $loginze);
$user->sit = "true";
R::store($user);
echo "OK";
?>