<?php
include "init.php";
$data = $_POST;
$loginze = $data['id'];
$content = R::findOne('game', 'id = ?', [$loginze]);
$usersidget = $content->id; 
$user = R::load('game', $usersidget);
$user->dead = "false";
$user->stamina = "true";
R::store($user);
echo "OK";

?>