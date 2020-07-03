<?php

require 'connection.php';
class show_calc
{
    public function __construct($class_name)
    {
        echo "<head>
        <title>Калькулятор</title>
        <link rel='stylesheet' href='style/calc_style.css'>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
        </head>";
        echo "<script src='../js/calc.js' async defer></script>";
        echo "<script src='../js/winner.js'></script>";
        echo "<div class='$class_name'>";
        show_account::show();
        $general_block = new block_general('clc general', 'Начальные данные');
        $second_block = new cost_in_sum('clc cost_in_sum', 'Цена в сумму');
        $third_block = new with_steps('clc with_steps');
        $fourth_block = new enemy_cost('clc enemy_cost', 'Вражеская цена');
        $save_the_winner = new save_the_winner('save_winner', 'Победитель');
        $winner = new winner();
        echo "<a href='/analytics.php'>Аналитика</a></div>";

    }
}