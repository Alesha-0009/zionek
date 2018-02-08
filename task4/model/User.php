<?php

namespace app\model;

class User extends Model{


    protected $login;
    protected $pass;
	 
    public static function getUserById($id){
	$db->query('Получаем пользователя по id');
    }

    public static function getUserByName($name){
	$db->query('Получаем пользователя по имени');
    }

    public function save(){
	$db->query('Сохраняем данные пользователя');
    }
}