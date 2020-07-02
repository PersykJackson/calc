<?php


class block_general
{
    protected $first_block = array('start_sum' => 'Сумма начальная', 'step' => 'Шаг', 'amount' => 'Количество', 'osp' => 'ОСП', 'dist' => 'Распределение', 'scwn' => 'Цена начальная, без НДС');
    function __construct($div_class, $table_name)
    {
        echo "<div class='$div_class'><table><form method='post' action='$_SERVER[PHP_SELF]'>";
        echo "<caption>$table_name</caption>";
        foreach ($this->first_block as $key => $value) {
            echo "<tr><td>$value</td><td><input type='text' id='$key' name='$key'onkeyup='general(), with_steps()'></td></tr>";
        }
        echo "</form></table></div>";
    }
}