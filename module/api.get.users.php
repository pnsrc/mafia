<?php
/*
*	API user.get
*	Получаем список игроков, находящихся в комнате, работает по POST запросу
*	Включая, самого игрока.
*/
include 'init.php';
header('Content-Type: application/json');
$data = $_POST;
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
$victim = $json_obj->coderoom;
if ($victim == '') {
	echo '{"error" : "Its not code room !","code" : "code_not_input"}';
exit();
}
$results=R::getAll('SELECT * FROM `game` WHERE `code` = '.$victim.'');
if ($results == 'NULL') {
	echo '
	{
		"error" : "'.$victim.' is not code room !"
	}';
exit();
}
echo '
{
	"users" : [';
foreach($results as $row){
echo '
{
	"id" : "'.$row['id'].'",
	"nickname" : "'.$row['nick'].'",
	"role" : "'.$row['role'].'",
	"status" : [
	{
		"dead" : "'.$row['dead'].'",
		"stamina" : "'.$row['stamina'].'",
		"is_arested" : "'.$row['sit'].'"
	}]
},';
}
echo '
{
	"coderoom" : "'.$victim.'",
	"date" : "'.date("Y-m-d H:i:s").'"
}
]}';

?>