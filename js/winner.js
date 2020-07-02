$(document).ready (function(){
   $(window).on("ready", function() {
       $.get("handler_save.php", {name: $("input[name='c_name']").val(), cost: $("input[name='c_cost']").val(), step: $("input[name='c_step']").val(), date: $("input[name='date']").val()}, function(data){
           data = JSON.parse(data);
           $("div[class='show_winner']").empty();
           $("div[class='show_winner']").append($("<table class='table_win'>"));
           $("table[class='table_win']").append($("<caption>Последние 10</caption><tr><td>Название компании</td><td>Цена подачи</td><td>Цена победителя</td><td>Дата</td></tr>"));
           for (let key in data){
               let name = data[key].name;
               let cost = data[key].cost;
               let step = data[key].step;
               let day = data[key].day;
               $("table[class='table_win']").append($("<tr><td>"+name+"</td><td>"+cost+"</td><td>"+step+"</td><td>"+day+"</td></tr>"));
           }
       });
   });

});
$(document).ready (function(){
    $("input[name='save']").bind("click", function() {
        $.get("handler_save.php", {name: $("input[name='c_name']").val(), cost: $("input[name='c_cost']").val(), step: $("input[name='c_step']").val(), date: $("input[name='date']").val()}, function(data){
            data = JSON.parse(data);
            $("div[class='show_winner']").empty();
            $("div[class='show_winner']").append($("<table class='table_win'>"));
            $("table[class='table_win']").append($("<caption>Последние 10</caption><tr><td>Название компании</td><td>Цена подачи</td><td>Цена победителя</td><td>Дата</td></tr>"));
            for (let key in data){
                let name = data[key].name;
                let cost = data[key].cost;
                let step = data[key].step;
                let day = data[key].day;
                $("table[class='table_win']").append($("<tr><td>"+name+"</td><td>"+cost+"</td><td>"+step+"</td><td>"+day+"</td></tr>"));
            }
        });
    });

});
