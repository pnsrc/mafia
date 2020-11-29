<?php
include 'init.php';
$data = $_POST;
$loginze = $_SESSION['logged_user']->id;
$content = R::findOne('game', 'id = ?', [$loginze]);
$usersidget = $content->dead;
$usersidget2 = $content->sit;
$usersidget3 = $content->stamina;

//Подключаем игровую логику
//Теперь вся игра понимает действия
include 'logic.game.php';

$delete = R::load('game', $loginze);
R::trash($delete);
unset($_SESSION['logged_user']);
?>