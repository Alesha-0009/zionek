<?php

namespace app\model;

class User extends Model{


    protected $login;
    protected $pass;
	 
    public static function getUserById($id){
	$db->query('�������� ������������ �� id');
    }

    public static function getUserByName($name){
	$db->query('�������� ������������ �� �����');
    }

    public function save(){
	$db->query('��������� ������ ������������');
    }
}