<?php
require_once 'models/UserModel.php';
require_once 'models/PetsModel.php';

class registromascota extends SessionController{
    private $user;
    private $pet;
    function __construct()
    {
        parent::__construct();
         $this->user=$this->getUserSessionData();
        error_log("registro de mascotas controller");
        
    }

    function render(){
        error_log("carga de vista registro mascotas");
        $this->view->render('mascotas/registromascotas',['user'=>$this->user]);
    }

    function newPet(){
        
        if($this->existPOST(['raza','nombre','edad'])){
             
            $pet=new PetsModel();
            $pet->setNombreMascota($this->getPost('nombre'));
             $pet->setEdad($this->getPost('edad'));
             $pet->setRaza($this->getPost('raza'));

            if(!isset($_FILES['foto'])){
                $this->redirect('registro', ['error' => Errors::ERROR_PET_UPDATEPHOTO]);
                return false;
            }
            
            if($pet->getNombreMascota()=='' || empty($pet->getNombreMascota()) || $pet->getEdad() == '' || empty($pet->getEdad()) ||  $pet->getRaza() == '' || empty($pet->getRaza())){
                
                $this->redirect('registro',['error'=> Errors::ERROR_SIGNUP_NEWPET_EMPTY]);
                return false;
            }
        
          
            $imagen=$this->getFile('foto'); 
            $tamanoArchivo = $imagen['size'];
             $imagenSubida = fopen($imagen['tmp_name'], 'r');
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            $pet->setFoto($binariosImagen);
            $pet->setuserid($this->user->getId());
            if($pet->save()){
                 $this->redirect('registromascota',['succes' => Success::SUCCESS_SIGNUP_NEWPET]);
                return true;
            }else{
                $this->redirect('registromascota',['error' => Errors::ERROR_SIGNUP_NEWPET]);
                return false;
            }
            
            
            
        }else{
            $this->redirect('registromascota',['error' => Errors::ERROR_SIGNUP_NEWPET]);
            return false;
        }
    }

}


?>