<?php
require 'db.php';
$welcome = new authorization();
$valid = new valid();
session_start();
if($_SESSION['name']){
    header('Location: /calc.php');
}else {
    if ('POST' == $_SERVER[REQUEST_METHOD]) {
        $valid->validate($_POST, $db, 'authorization');
        if (count($valid->errors) > 0) {
            show_error::error($valid->errors);
            $welcome->auth();
        } else {
            $_SESSION['name'] = $valid->result[0]['name'];
            $_SESSION['id'] = $valid->result[0]['id'];
            header('Location: /calc.php');
        }
    } else {
        if (count($valid->errors) > 0) {
            show_error::error($valid->errors);
            $welcome->auth();
        } else {
            $welcome->auth();
        }
    }
}
?>