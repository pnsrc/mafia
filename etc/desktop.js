/*
*	Desktop mode not avalible
*	Please, use a smartphone
*
*/
var version = "0.0.1";
var name = "Таблоид";

console.log("Модуль "+ name+ ". Версии: " + version +" был успешно иницилизирован...");

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
var gencod = getRandomInt(100000, 999999);

function reload() {
var gencod = getRandomInt(100000, 999999);
document.getElementById("code").innerHTML = gencod;
console.log("Обновление игрового кода\n Новый игровой код: " + gencod);
}
setInterval(reload, 60000);

document.getElementById("code").innerHTML = +gencod;
console.log("Generated game code:" +gencod);

function gostart() {
	console.log('Set game code: '+gencod);
	document.getElementById("demo").innerHTML = "<?php include 'index.php';?>";
}

