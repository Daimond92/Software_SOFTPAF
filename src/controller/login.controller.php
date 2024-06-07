<?php

class LoginController {

    public function __construct(){
        session_start();
    }
    public function Login()
    {
        require_once "src/views/Login.php";
    }

    //Asignar nombre a la sesión
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    //Devolver el valor del usuario
    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    //Cerrar sesión
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

