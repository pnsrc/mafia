<?php 
	require 'module/init.php';
$data = $_POST;
$loginze = $_SESSION['logged_user']->id;
$content = R::findOne('game', 'id = ?', [$loginze]);
$delete = R::load('game', $loginze);
R::trash($delete);
unset($_SESSION['logged_user']);
header('Location: /');
?>
