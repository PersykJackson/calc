<?php


class with_steps
{
    protected $third_block = array('first_th', 'second_th', 'third_th');
    public function __construct($div_class)
    {
        echo "<div class='$div_class'><table><form method='post' action='$_SERVER[PHP_SELF]'>";
        echo "<tr><td></td><td>С учетом шагов</td><td>Цена без ндс с осп</td><td>Цена без ндс без осп</td></tr>";
        $i = 0;
        foreach ($this->third_block as $key => $value) {
            $i++;
            echo "<tr><td>$i</td><td><input type='text' id='$value".'1'."' name='$value".'1'."'></td><td><input type='text' id='$value".'2'."' name='$value".'2'."'></td><td><input type='text' id='$value".'3'."' name='$value".'3'."'></td></tr>";

        }
        echo "</form></table></div>";
    }
}