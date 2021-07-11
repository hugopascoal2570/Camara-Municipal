<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

    public function signin(){
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('login',[
            'flash' =>$flash
        ]);
    }

    public function signinAction(){
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST,'password');

        if($email && $password){

            $token = LoginHandler::verifyLogin($email, $password);
            if($token){
                $_SESSION['token'] = $token;
                $this->redirect('/admin');
            }else{
                $_SESSION['flash'] = 'E-mail e/ou senhas inválidos';
                $this->redirect('/admin/login');
            }

        }else{
            $this->redirect('/admin/login');
        }
    }


    

    public function logout() {
        $_SESSION['token'] = '';
        $this->redirect('/admin/login');
    }
}