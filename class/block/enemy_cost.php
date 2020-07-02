<?php


class enemy_cost
{
        protected $fourth_block = array('1', '2', '3', '4', '5', '6', '7', '8', '9','10');
        public function __construct($div_class, $table_name)
        {
            echo "<div class='$div_class'><table><form method='post' action='$_SERVER[PHP_SELF]'>";
            echo "<caption>$table_name</caption>";
            echo "<tr><td>Сумма</td><td>Цена без ндс с осп</td><td>Цена без ндс без осп</td><td>С распределением</td></tr>";
            foreach ($this->fourth_block as $key => $value) {
                echo "<tr><td><input type='text' id='four_input"."$value"."' name='four_input"."$value"."' onkeyup='enemy_cost()'></td><td><input type='text' id='cwno"."$value"."' name='cwno"."$value"."'></td><td><input type='text' id='cwnwo"."$value"."' name='cwnwo"."$value"."'></td><td><input type='text' id='with_dist"."$value"."' name='with_dist"."$value"."'></td></tr>";
            }
            echo "</form></table></div>";
        }
}