<?php


class save_the_winner
{

        private $array = ['Название компании' => 'c_name', 'Цена подачи' => 'c_cost', 'Цена победителя' => 'c_step'];
        public function __construct($div_class, $table_name)
        {
            $time = new DateTime('now');
            $day = date_format($time, 'Y-m-d');
            echo "<div class='$div_class'><table>
                        <caption>$table_name</caption>";
            foreach($this->array as $key => $value){
                echo "<tr><td>$key</td><td><input name='$value' id='$value'></td></tr>";
            }
                echo "<tr><td>Дата</td><td><input type='date' name='date' value='$day' min='' id='win_date'></td></tr><tr><td colspan='2'><input type='submit' class='save' name='save' value='Сохранить'></td></tr>";
            echo "</table></div>";
        }
}