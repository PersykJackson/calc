<?php


class show_error extends valid
{
 public static function error($errors){
     echo "<div class='error'><ul>";
     foreach($errors as $key => $error){
         echo "<li>$error</li>";
}
echo " </ul></div>";
     }
}