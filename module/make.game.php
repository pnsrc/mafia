<?php
	$data = $_POST;
				// Даем роль пользователю
			$quotes[] = 'Мафия';
			$quotes[] = 'Житель';
			$quotes[] = 'Житель';
			$quotes[] = 'Житель';
			$quotes[] = 'Врач';
			$quotes[] = 'Шериф';
			srand ((double) microtime() * 1000000);
			$random_number = rand(0,count($quotes)-1);
	if ( isset($data['continue']) )
	{ 
			// Выполняем соединение с базой данных
			$user = R::dispense('game');
			$user->nick = $data['nick'];
			$user->code = $data['code'];
			$user->role = $quotes[$random_number];
			$user->dead = 'false';
			$user->sit = 'false';
			$user->stamina = 'false';
			$user->start = date("Y-m-d H:i:s");
			R::store($user);
			// Выполняем подключение и открытие сессии пользователя
			$user = R::findOne('game', 'nick = ?', array($data['nick']));
			$_SESSION['logged_user'] = $user;
			// Создаем комнату и подключаем к ней пользователя
			// *БАГ* есть путаница в бд по поводу похожих
			// ников в бд, мне лень устранять.
			header('Location: /');
	}
	if ( isset($data['gogo']) )
	{ 
			if ( R::count('game', "nick = ?", array($data['nick'])) > 0)
		{
			echo '<script type="text/javascript">
	alert("Никнейм уже занят");
</script>';
header('Location: /');
		} else {
			$random_number = rand(0,count($quotes)-1);
			// Выполняем соединение с базой данных
			$user = R::dispense('game');
			$user->nick = $data['nick'];
			$user->code = $data['code'];
			$user->role = $quotes[$random_number];
			$user->sit = 'false';
			$user->dead = 'false';
			$user->stamina = 'false';
			$user->start = date("Y-m-d H:i:s");
			R::store($user);
			// Выполняем подключение и открытие сессии пользователя
			$user = R::findOne('game', 'nick = ?', array($data['nick']));
			$_SESSION['logged_user'] = $user;
			// Создаем комнату и подключаем к ней пользователя
			// *БАГ* есть путаница в бд по поводу похожих
			// ников в бд, мне лень устранять.
			header('Location: /');
		}
	}