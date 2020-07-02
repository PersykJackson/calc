<?php
session_start();
$_SESSION['name'] = '';
$_SESSION['id'] = '';
header('Location: /index.php');