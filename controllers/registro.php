<?php

require_once 'models/UserModel.php';

class registro extends SessionController{

    function __construct()
    {
        error_log("registro controller");
        parent::__construct();
    }

    function render(){
        error_log("carga de vista registro");
        $this->view->render('login/registro',[]);
    }

    function newUser(){
        
        if($this->existPOST(['email','edad','nombre','Ipassword'])){
            $user=new UserModel();
            $user->setCorreo($this->getPost('email'));
            $user->setContrasena($this->getPost('Ipassword'));
            $user->setNombrePersona($this->getPost('nombre'));
            error_log(1);
            error_log($user->getNombrePersona());
            error_log($user->getcontrasena());
            error_log($user->getcorreo());
            if(!isset($_FILES['foto'])){
                 
            
             $this->redirect('registro',['error'=>Errors::ERROR_SINGUP_NEWUSER_UPLOADPHOTO]);
                return false;
            }
            

            
            
            if($user->exists($this->getPost('email'))){
                error_log(2);
                $this->redirect('registro',['error'=> Errors::ERROR_SIGNUP_NEWUSER_EXISTS]);
                return false;
            }else{
            
            $user->setRol("user");
            $user->setedad($this->getPost('edad'));
            $imagen=$this->getFile('foto'); 
            $tamanoArchivo = $imagen['size'];
             $imagenSubida = fopen($imagen['tmp_name'], 'r');
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            $user->setfoto($binariosImagen);
            if($user->save()){
       
                $this->redirect('registro',['succes'=>Success::SUCCESS_SIGNUP_NEWUSER]);
            }else{
                 
      
                $this->redirect('registro',['error'=> Errors::ERROR_SIGNUP_NEWUSER]);
                return false;
            }
            
            
            }
        }else{
             
           $this->redirect('registro',['error'=> Errors::ERROR_SIGNUP_NEWUSER]);
            return false;
        }
    }

}


?>