<?php
// Получение статусов о состояние здоровья, посажен ли в тюрьму, либо вылечен.
$usersidget = $content->dead;
$usersidget2 = $content->sit;
$usersidget3 = $content->stamina;

if ($usersidget == 'true') {
	if ($usersidget3 == "true") {
	$bin[] = "Вы выжили, но вас вылечил врач.";
	exit();
} else {
	$bin[] = "Вы мертвы, вас убила мафия";
}
}

if ($usersidget2 == 'true') {
	$bin[] = "ВАС посадил шериф";
} 
if ($usersidget3 == 'true') {
	$bin[] = "Вас мертвы, из-за врача 'в волчей шкуре'";
} 

if (!empty($bin)) {
	echo array_shift($bin);
} else {
	echo "Вы выжили ! Поздравляем";
}

?>
