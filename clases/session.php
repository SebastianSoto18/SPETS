<?php

class Session{
    private $sessionName='user';

    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    public function setCurrentuser($user){
        $_SESSION[$this->sessionName]=$user;
    }

    public function getCurrentUser(){
        return $_SESSION[$this->sessionName];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

    public function exits(){
        return isset($_SESSION[$this->sessionName]);
    }
}

?>