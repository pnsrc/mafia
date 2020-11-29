<?php
include "module/init.php";
include "module/make.game.php";
function isMobile() { 

return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
};

if(isMobile()){
} else { 
  include 'game/desktop.php';
  exit();
   };
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Мафия</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<div id="demo">
<body class="string" align='center'>
<?php if ( isset ($_SESSION['logged_user'])) : ?>
<?php 
include 'game/normal.php';
?>
<?php else : ?>
	<div class="main welcome">
	<h1>Мафия. Онлайн</h1></br>
	<p>Только хардкор, в вашей сессии могут быть 3 мафии, один шериф,</br> а может и не быть.</br> Делитесь сессиями, сообщайте друзьям код комнаты.  </br>Играйте с друзьями, либо с незнакомцами.</p></br><p id="text"></p></br>
		<form action="/" method="POST">
	<div id="last_name" style="margin-left: auto; margin-right: auto; width: 50%"class="input-field col s6">
    <input id="nickroom" placeholder="Ник для игры" name="nick" type="text" class="validate">
          <label for="last_name">Никнейм</label>
    </div>
	<div  id="first_name" style=" margin-left: auto; margin-right: auto; width: 50%" class="input-field col s6">
    <input id="coderoom" placeholder="Если не знаете, то не заполняйте" name="code" type="text" class="validate">
          <label for="first_name">Код комнаты</label>
        </div>
<button class="waves-effect waves-light btn"  value="Togglee" name="gogo" id="gamescon" onclick="connect()">Присоединиться</button>
<button class="waves-effect waves-light btn" name="continue" id="makemake" onclick="makeroom()">Cоздать</button>
</form>
<script src="etc/main.js"></script>
<?php endif;?>

</body>
</div>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="/etc/Notify.js"></script>
</html>