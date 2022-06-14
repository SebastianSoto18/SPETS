<?php
     require_once 'models/UserModel.php';
     require_once 'models/PetsModel.php';
    class adminuseredit extends SessionController{
        private $user;
        private $user2;
        private $mascota;
        
        function __construct()
        {
            parent::__construct();
            $this->user=$this->getUserSessionData();
            error_log($this->user->getNombrePersona());
            $this->user2=new UserModel();
            if(!empty($_REQUEST['id'])){
                $this->user2=$this->user->get($_REQUEST['id']);
                $this->user->setaux($_REQUEST['id']);
            }
            
            
            error_log($this->user2->getNombrePersona());
            
            $this->mascota=new PetsModel();
            if(!empty($_REQUEST['id'])){
            $this->mascotas=$this->mascota->getAllbyId($_REQUEST['id']);
            }else{
                $this->mascotas=$this->mascota->getAllbyId($this->user->getaux());
            }
            $this->numeroM=count($this->mascotas);
            error_log('adminuseredit::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de adminuser');
            $this->view->render('admin/adminuseredit',['user'=>$this->user,'user2'=>$this->user2]);
        }
        
        public function edit(){
                $bandera=false;
                    if(!empty($this->getPost('edad'))){
                    $this->user2->setedad($this->getPost('edad'));
                    $bandera=true;
                }
                
                error_log($this->getPost('full_name'));
                
                if(!empty($this->getPost('full_name'))){
                     $this->user2->setNombrePersona($this->getPost('full_name'));
                     error_log("cambio nombre");
                     error_log($bandera);
                     $bandera=true;
                }
                $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
                if(!empty($foto)){
                    $imagen=$this->getFile('foto'); 
                    $tamanoArchivo = $imagen['size'];
                    $imagenSubida = fopen($imagen['tmp_name'], 'r');
                    $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                    $this->user2->setfoto($binariosImagen);
                    $bandera=true;
                }
                if(!empty($this->getPost('full_mail'))){
                    $this->user2->setcorreo($this->getPost('full_mail'));
                    $bandera=true;
                }
                if(!empty($this->getPost('newContra')) ){
                    $this->user2->setcontrasena($this->getPost('newContra'));
                    $bandera=true;
                }
                 
                 
                 if($bandera==true){
                     $this->user2->actualizar();
                     $this->user->setaux($this->getPost('id'));
                    $this->redirect('adminuseredit',['succes'=>  Success::SUCCESS_USER_UPDATE,'id'=> $this->user2->getId()]); 
                    
                 }else{
                    $this->redirect('adminuseredit',['error'=>  Errors::ERROR_USER_UPDATE_ALLINPUTSEMPTY]);
                }
                
        }
        
        public function eliminar(){
            error_log($_REQUEST['id']);
        if($this->user2->delete()){
            error_log("eliminada");
            $this->redirect('adminuser'); 
        }else{
            $this->redirect('adminuser');
        }
        }
    }
    
    ?>