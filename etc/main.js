var version = '0.0.1b';

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

var text =
["Ты мафия","Ты убит","Тебя прикончили","Тебя вылечили"];
min = 0;
max = text.length-1;
out = Math.floor(Math.random()*(max-min+1))+min;
document.getElementById("text").innerHTML = text[out];
	var gencod = getRandomInt(100000, 999999);

function connect() {
	var room = document.getElementById("coderoom").value;
	if (document.getElementById("coderoom").value == "") {
		alert("Пустота");
	} else if (document.getElementById("nickroom").value == "") {
		alert("Пустота");
	} else{
	console.log('Code game'+ room +'');
	console.log('Api v0.1');
	console.log('Yes, i am make some api :)');
	}
}
function makeroom() {
	console.log('Your room code:'+ gencod);
	if (document.getElementById("coderoom").value == "") {
	console.log('Вызываем Полицию');  
	console.log('Вызываем Мафию');	  
	console.log('Рассказываем простым житилям');
	document.getElementById("gamescon").style.visibility = 'hidden';
	document.getElementById("makemake").innerHTML = 'Войти в комнату';
	document.getElementById("coderoom").value = +gencod;
	document.getElementById("text").innerHTML = "Ваш код игры:" +gencod;
	} else{
		if (document.getElementById("nickroom").value == "") {
		alert("НИК не может быть пустым\n Введите НИК, чтобы продолжить игру")
	} else {
	var nick = document.getElementById("nickroom").value;
	var worst = ['bitch', 'penis', 'хуй', 'порнуха', 'пидор']
	if (nick == worst[out]) {
		alert("Такой ник не допустим");
	} else {
	document.getElementById("makemake").type = 'submit';
	console.log("=========[Session information]=============")
	console.log("Version" + version);
	console.log('Your room code:'+ gencod);
	console.log("Your Nick:" + nick);
	console.log('Your game location: /game/'+ gencod +'');
	}
	}
	}

}