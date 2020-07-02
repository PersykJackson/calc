<?php
require 'class/show_calc.php';
session_start();
if($_SESSION['name']){
    $calc = new show_calc('calc');
}else{
    header('Location: /index.php');
}