<?php
     require_once 'models/UserModel.php';
     require_once 'models/PetsModel.php';
    class home extends SessionController{
        private $user;
        private $mascota;
        private $mascotas;
        
        function __construct()
        {
            parent::__construct();
            $this->user=$this->getUserSessionData();
            error_log($this->user->getNombrePersona());
             $this->mascota=new PetsModel();
            $this->mascotas=$this->mascota->getAllbyId($this->user->getId());
            error_log('home::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de home');
            $this->view->render('home/home',['user'=>$this->user,'mascotas'=>$this->mascotas]);
        }


        public function salir(){
           $this->logout();
           $this->redirect('');
        }
    }