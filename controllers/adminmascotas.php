<?php
     require_once 'models/UserModel.php';
     require_once 'models/PetsModel.php';
    class adminmascotas extends SessionController{
        private $user;
        private $mascota;
        private $mascotas;
        function __construct()
        {
            parent::__construct();
            $this->user=$this->getUserSessionData();
            error_log($this->user->getNombrePersona());
            $this->mascota=new PetsModel();
            $this->mascotas=$this->mascota->getAll();
            error_log('adminmascota::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de adminmascota');
            $this->view->render('admin/adminmascota',['user'=>$this->user,'mascotas'=>$this->mascotas]);
        }

    }
    
    ?>