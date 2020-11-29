<?php
	$victim =$_SESSION['logged_user']->code;
  $books = R::count( 'game', 'code = ?', [$victim] );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Комната <?php echo $_SESSION['logged_user']->code; ?></title>
</head>
<body>
<div align="left">
<h4>Номер комнаты: <?php echo $_SESSION['logged_user']->code; ?></h4><a href="/game/stop">закрыть комнату</a><p>Ваша роль <?php echo $_SESSION['logged_user']->role;?></br></p> <p>Ваш ник в игре: <?php echo $_SESSION['logged_user']->nick; ?></p>
</div>
<div id="dead">
<?php
if ($_SESSION['logged_user']->role == "Шериф") {
	$results=R::getAll('SELECT * FROM `game` WHERE `code` = '.$victim.'');
echo '<div id="1" class="collection" style=" margin-left: auto; margin-right: auto; width: 50%">
        <a href="#!" class="collection-item active">Выберет вашу цель</a>';
foreach($results as $row){
	    echo '    <p>
      <label>
        <input name="id" value="'.$row['id'].'" type="radio" />
        <span>'.$row['nick'].'</span>
      </label>
    </p>';
	
}
	echo '<button class="waves-effect waves-light btn" onclick="summon()">Посадить</button>';
	echo '</div>';
}
if ($_SESSION['logged_user']->role == "Мафия") {
	$results=R::getAll('SELECT * FROM `game` WHERE `code` = '.$victim.'');
echo '<div id="2" class="collection" style=" margin-left: auto; margin-right: auto; width: 50%">
        <a href="#!" class="collection-item active">Выберет вашу жертву</a>';
foreach($results as $row){
	    echo '    <p>
      <label>
        <input name="id" value="'.$row['id'].'" type="radio" />
        <span>'.$row['nick'].'</span>
      </label>
    </p>';
	
}

		echo '<button class="waves-effect waves-light btn" onclick="kill()">Убить</button>';
	echo '</div>';
}
if ($_SESSION['logged_user']->role == "Врач") {
	$results=R::getAll('SELECT * FROM `game` WHERE `code` = '.$victim.'');
echo '<div id="3" class="collection" style=" margin-left: auto; margin-right: auto; width: 50%">
        <a href="#!" class="collection-item active">Выберете пациента</a>';
foreach($results as $row){
	    echo '    <p>
      <label>
        <input name="id" value="'.$row['id'].'" type="radio" />
        <span>'.$row['nick'].'</span>
      </label>
    </p>';
	
}
		echo '<button class="waves-effect waves-light btn" onclick="save()">Вылечить</button>';
	echo '</div>';
}
?>
</br>
<button class="waves-effect waves-light btn"  onclick="checkme()">Проверить состояние</button>
</div>
</body>
<style type="text/css">
div#demo {
    margin: 2%;
}
</style>
<script src="/etc/game.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

</html>