<?php
     require_once 'models/UserModel.php';
     require_once 'models/PetsModel.php';
    class perfil extends SessionController{
        private $user;
        private $numeroM;
        private $mascotas;
        function __construct()
        {
            parent::__construct();
            $this->user=$this->getUserSessionData();
            error_log($this->user->getNombrePersona());
             $this->mascota=new PetsModel();
            $this->mascotas=$this->mascota->getAllbyId($this->user->getId());
            $this->numeroM=count($this->mascotas);
            error_log('perfil::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de perfil');
            $this->view->render('home/perfil',['user'=>$this->user,'numeroM'=>$this->numeroM]);
        }
        
        function update(){
             if($this->existPOST(['contrasena'])){
                 
                if($this->user->compareContrasena($this->getPost('contrasena'),$this->user->getId())){
                    $bandera=false;
                    if(!empty($this->getPost('edad'))){
                    $this->user->setedad($this->getPost('edad'));
                    $bandera=true;
                }
                
                error_log($this->getPost('full_name'));
                
                if(!empty($this->getPost('full_name'))){
                     $this->user->setNombrePersona($this->getPost('full_name'));
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
                    $this->user->setfoto($binariosImagen);
                    $bandera=true;
                }
                if(!empty($this->getPost('full_mail'))){
                    $this->user->setcorreo($this->getPost('full_mail'));
                    $bandera=true;
                }
                if(!empty($this->getPost('newContra')) ){
                    $this->user->setcontrasena($this->getPost('newContra'));
                    $bandera=true;
                }
                 
                 
                 if($bandera==true){
                    $this->redirect('perfil',['succes'=>  Success::SUCCESS_USER_UPDATE]); 
                    $this->user->actualizar();
                 }else{
                    $this->redirect('perfil',['error'=>  Errors::ERROR_USER_UPDATE_ALLINPUTSEMPTY]);
                }
                
                
                
            }else{
                $this->redirect('perfil',['error'=>  Errors::ERROR_USER_UPDATE_ERRORPASSWORD]);
            }
             }else{
                  $this->redirect('perfil',['error'=>  Errors::ERROR_USER_UPDATE_ERRORPASSWORDEMPTY]);
             }
    }
    
    
    public function eliminar(){
        if($this->user->delete()){
            $this->redirect('homenologin',['succes'=>  Success::SUCCESS_USER_DELETE]); 
        }else{
            $this->redirect('perfil',['error'=>  Errors::ERROR_USER_DELETE]);
        }
    }
        
}