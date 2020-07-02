<?php


class cost_in_sum
{
    protected $second_block = array('first_sec', 'second_sec', 'third_sec', 'fourth_sec', 'fifth_sec');
    function __construct($div_class, $table_name)
    {
        echo "<div class='$div_class'><table><form method='post' action='$_SERVER[PHP_SELF]'>";
        echo "<caption>$table_name</caption><tr><td>Цена за единицу с ОСП без НДС</td><td>Сумма договора с НДС	
</td></tr>";
        foreach ($this->second_block as $key => $value) {
            echo "<tr><td><input type='text' id='$value' name='$value' onkeyup='cost_in_sum()'></td><td><input type='text' id='$value".'_result'."' name='$value".'_result'."'></td></tr>";
        }
        echo "</form></table></div>";
    }
}