<?php
namespace app\controller;

use app\model\User;

class IndexController extends Controller{

	public function register(){
	   $login = isset($_POST['login']) ? $_POST['login'] : '';
           $pass = isset($_POST['pass']) ? hash('md5',$_POST['pass']) : '';
	   $user = new User;
           $user->pass = $pass;
           $user->login = $login;
           $user->save();
           header('Переадресация на страницу авторизации');
	}

        public function authorize(){
           $user = User::getUserByName($_POST['name']);
	   
           //Проверка пользователя на аутентификацию
           if(hash('md5',$_POST['pass']) === $user->pass && $_POST['name'] === $name)
	   {
               header('Переадресация на главную страницу');
           }else{
           	echo 'Данные введены не верно, Попробуйте снова.';
           }
        }

        public function resetPassword(){
	    $name = isset($_POST['name']) ? $_POST['name'] : '';
            if (!empty($name)){
               $user = User::getUserByName($name);
               if($user){
                  //Отправка Пароля на почту.
               }
            }
	}	
}