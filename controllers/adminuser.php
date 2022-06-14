<?php
     require_once 'models/UserModel.php';
     require_once 'models/PetsModel.php';
    class adminuser extends SessionController{
        private $user;
        private $user2;
        private $users;
        function __construct()
        {
            parent::__construct();
            $this->user=$this->getUserSessionData();
            error_log($this->user->getNombrePersona());
            $this->user2=new UserModel();
            $this->users=$this->user2->getAll();
            error_log('adminuser::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de adminuser');
            $this->view->render('admin/adminuser',['user'=>$this->user,'users'=>$this->users]);
        }

    }
    
    ?>