<?php
require 'class/authorization.php';
require 'class/register.php';
require 'class/valid.php';

try {
    $db = new PDO('mysql:host=localhost; dbname=calc', 'root', '');
    $usr = 'usr';
    $winner = 'winner';
}catch (PDOException $e){
    echo "Error :". $e->getMessage();
}
?>