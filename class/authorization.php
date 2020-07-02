<?php


class authorization
{
public function auth(){
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Anim</title>
    <link type='text/css' rel='stylesheet' href='style/style.css'>
</head>
<body id='body'>
<audio src='m.mp3'></audio>
<div class='f_js' id='f_js'><button class='btn' id='btn' onmousedown='view()'>Авторизация</button><br><a href='registration.php'>Регистрация</a> </div>
<div class='hide' id='hide'>
    <form method='post' action='$_SERVER[PHP_SELF]'>
        <input class='name' type='text' name='login' placeholder='Введите логин' autocomplete='off'><br>
        <input class='name' type='password' name='password' placeholder='Введите пароль' autocomplete='off'><br>
        <input class='button' type='submit' value='Войти'><br>
        <a href='/untitled4/'>Назад</a>
    </form>
    
    
</div>
<script src='js/anim.js'></script>
</body>
</html>";
}

}