<?php
     require_once 'models/UserModel.php';
     require_once 'models/PetsModel.php';

    class admin extends SessionController{
        private $user=NULL;
        private $nummascota=0;
        private $numuser=0;
        
        function __construct()
        {
            parent::__construct();
            
            $this->user=new UserModel();
            $this->user=$this->getUserSessionData();
            error_log($this->user->getNombrePersona());
             $this->mascota=new PetsModel();
            $this->nummascota=$this->mascota->getallnum()->fetchColumn();
             $this->numuser=$this->user->getallnum()->fetchColumn();
            error_log('home::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de admin');
   
            $this->view->render('admin/admin',['user'=>$this->user,'nummascota'=>$this->nummascota,'numuser'=>$this->numuser]);
        }


        public function salir(){
           $this->logout();
           $this->redirect('');
        }
    }