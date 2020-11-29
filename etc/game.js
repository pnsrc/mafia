/*
*	This file using for connect AJAX
*	
*	Alenich Alexey 2020
*/
var error = "По моему, этого не должно случиться :(\n Отправте мне щаги воспроизведение в\n TG: @iforgetmytelephoneinmypocket";

function reload() {
$("#dead").load(location.href + " #dead");
console.log("Обновление списка игроков");
}
setInterval(reload, 3000);

function summon() {
var s = $("input:radio[name=id]:checked").val();
    $.ajax({
           type: "POST",
           dataType: "JSON",
           url: "api/game/action/sit",
           data: {"id" : s},
           success: function(response) 
           {
              if(response == "OK")
              {
              	var abs = 'Вы успешно посадили этого игрока\n Теперь вы не можете выполнять операции';
              }
              else
              Alert(error);
           }
        })
document.getElementById("1").style.visibility = 'hidden';

function wayback() {
	document.getElementById("1").style.visibility = 'visible';
}

setTimeout(wayback, 15000);
};

function kill() {
var s = $("input:radio[name=id]:checked").val();
    $.ajax({
           type: "POST",
           dataType: "JSON",
           url: "api/game/action/kill",
           data: {"id" : s},
           success: function(response) 
           {
              if(response == "OK")
              {
                 console.log('Отметка добавлена. Время, которое присвоенно:' + Date());
              }
              else
              Alert(error);
           }
        })
	document.getElementById("2").style.visibility = 'hidden';
function wayback() {
	document.getElementById("2").style.visibility = 'visible';
}

setTimeout(wayback, 15000);
};

function save() {
var s = $("input:radio[name=id]:checked").val();
    $.ajax({
           type: "POST",
           dataType: "JSON",
           url: "api/game/action/healthy",
           data: {"id" : s},
           success: function(response) 
           {
              if(response == "OK")
              {
                 console.log('Вы спасли чью-то жизнь');
              }
              else
              Alert(error);
           }
        })
document.getElementById("3").style.visibility = 'hidden';
function wayback() {
document.getElementById("3").style.visibility = 'visible';
}

setTimeout(wayback, 15000);
};
function checkme() {
$.ajax(
  'api/game/action/check',
  {
      success: function(data) {
        Notify(data);
        document.getElementById("dead").innerHTML = "<h4>"+ data +"</h4>"
      },
      error: function() {
        alert(error);
      }
   }
);
};
