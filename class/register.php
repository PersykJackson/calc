<?php
class register
{
    public function registration(){
        echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Anim</title>
    <link type='text/css' rel='stylesheet' href='style/registration_style.css'>
</head>
<body id='body'>
<div class='f_js' id='f_js'><button class='btn' id='btn_register' onmousedown='viewRegistration()'>Регистрация</button><br><a href='/'>Авторизоваться</a></div>
<div id='registration' class='hide'>
<form method='post' action='$_SERVER[PHP_SELF]'>
<input class='name' type='text' name='name' placeholder='Введите имя'><br>
<input class='name' type='text' name='login' placeholder='Введите логин'><br>
<input class='name' type='password' name='pass1' placeholder='Введите пароль'><br>
<input class='name' type='password' name='pass2' placeholder='Подтвердите пароль'><br> 
<input class='name' type='email' name='email' placeholder='Введите почту'><br>
<input class='button' type='submit' value='Зарегистрироваться'><br>
<a href='/registration.php'>Назад</a>
</form>
</div>
<script src='js/anim.js'></script>
</body>
";
    }
}