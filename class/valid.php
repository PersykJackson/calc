<?php
require 'show_error.php';
class valid
{
    private $login;
    private $pass;
    public $errors;
    public $name;
    public $result;
    private $email;
    public function validate($array, $db, $type){
            if($type === 'authorization') {
                $this->name = $this->check($array['login'], $array['password'], $db);
            }elseif($type === 'registration'){
                $this->login = $array['login'];
                $this->pass = $array['pass1'];
                $this->register_check($array, $db);
            }
    }
    private function check($login, $pass, $db){

        if (trim($login) === ''){
            $this->errors[] = 'Ошибка: Введите логин';
        }
        if(trim($pass) === ''){
           $this->errors[] = 'Ошибка: Введите пароль';
        }
        if (count($this->errors) == 0){
            $password = md5(filter_var($pass, FILTER_SANITIZE_STRING).'calc');
            $login = filter_var($login, FILTER_SANITIZE_STRING);
            $q = $db->prepare("SELECT `name`, `id` FROM `usr` WHERE login = ? AND password = ?");
            $q->execute(array($login, $password));
            $this->result = $q->fetchAll(PDO::FETCH_ASSOC);
            if($this->result[0]['name']){
                return $this->result;
            }else{
                $this->errors[] = 'Ошибка: неверное сочитание логина и пароля';
            }
        }

    }
    private function register_check($array, $db){
        if($array['pass1'] !== $array['pass2']){
            $this->errors[] = 'Ошибка: Пароли не совпадают';
        }
        if(trim($array['login']) === ''){
            $this->errors[] = 'Ошибка: Введите логин';
        }
        if(strlen(trim($array['login'])) < 5){
            $this->errors[] = 'Ошибка: Слишком короткий логин';
        }
        if($array['pass1'] === ''){
            $this->errors[] = 'Ошибка: Введите пароль';
        }
        if(strlen($array['pass1']) < 6){
            $this->errors[] = 'Ошибка: Слишком короткий пароль';
        }
        if(trim($array['email']) === ''){
            $this->errors[] = 'Ошибка: Введите email';
        }
        if(trim($array['name']) === ''){
            $this->errors[] = 'Ошибка: Введите имя';
        }
        if(count($this->errors) === 0){
            $this->pass = md5(filter_var($array['pass1'], FILTER_SANITIZE_STRING).'calc');
            $this->login = filter_var($array['login'], FILTER_SANITIZE_STRING);
            $this->name = filter_var($array['name'], FILTER_SANITIZE_STRING);
            $this->email = filter_var($array['email'], FILTER_SANITIZE_EMAIL);
            $q = $db->prepare("SELECT `email` FROM `usr` WHERE ? = email");
            $q->execute(array($this->email));
            $str = $q->fetchAll(PDO::FETCH_ASSOC);
            if ($str[0]['email']){
                $this->errors[] = 'Ошибка: Пользователь с данным email уже зарегестрирован';
            }
            $q = $db->prepare("SELECT `login` FROM `usr` WHERE ? = login");
            $q->execute(array($this->login));
            $str = $q->fetchAll(PDO::FETCH_ASSOC);
            if ($str[0]['login']){
                $this->errors[] = 'Ошибка: Пользователь с данным логином уже зарегестрирован';
            }
            if (count($this->errors) === 0){
                $q = $db->prepare("INSERT INTO `usr`(name, login, password, email) values(?, ?, ?, ?)");
                $q->execute(array($this->name, $this->login, $this->pass, $this->email));
                $result = $q->fetchAll(PDO::FETCH_ASSOC);
                if (count($result) === 0){
                    $this->errors[] = 'Успешно: Успешная регистрация';
                }else{
                    $this->errors[] = 'Ошибка: Неизвестрая ошибка регистрации';
                }
            }
        }
    }




}