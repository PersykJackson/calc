<?php
require 'db.php';
$reg = new register();
$valid = new valid();
if('POST' === $_SERVER[REQUEST_METHOD]){
    $valid->validate($_POST, $db, 'registration');
    if (count($valid->errors) > 0){
        show_error::error($valid->errors);
        $reg->registration();
    }else{
        //Вы зареганы, перекинуть на авторизацию
    }
}else {
    if (count($valid->errors) > 0){
        show_error::error($valid->errors);
        $reg->registration();
    }else {
        $reg->registration();
    }

}