<?php

session_start();
class show_account
{

     public static function show(){
         echo '<div class="account"><div class="info">Account: '.$_SESSION['name']."<br> ID: ".$_SESSION['id'];
         echo "</div><div class='exit_div'><a class='exit' href='logout.php'>Выйти</a>"."</div></div>";
     }
}