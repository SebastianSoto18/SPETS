<?php
require_once 'models/UserModel.php';
require_once 'models/PetsModel.php';

class adminpetedit extends SessionController{
    private $user;
    private $pet;
    function __construct()
    {
        parent::__construct();
         $this->user=$this->getUserSessionData();
         $this->pet=new PetsModel();
         if(!empty($_REQUEST['id'])){
             $this->pet=$this->pet->get($_REQUEST['id']);
            error_log("mascotas controller");
         }
        
        
    }

    function render(){
        error_log("carga de vista aditpetmascotamascotas");
        $this->view->render('admin/adminpetedit',['user'=>$this->user,'mascota'=>$this->pet]);
    }
    
    public function perfil(){
        if($this->existPost('id')){
           $this->user->setaux($this->getPost('id'));
           error_log($this->getPost('id'));
           $this->redirect('mascotas');
        }
    }
    
    
    
    function setpet($id){
        $this->pet=$this->pet->get($id);
    }
    
    public function update(){
                    $bandera=false;
                    if(!empty($this->getPost('edad'))){
                    $this->pet->setEdad($this->getPost('edad'));
                    $bandera=true;
                    }
                
               
                
                if(!empty($this->getPost('full_name'))){
                     $this->pet->setNombreMascota($this->getPost('full_name'));
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
                
                if(!empty($this->getPost('Raza'))){
                    $this->pet->setRaza($this->getPost('Raza'));
                    $bandera=true;
                }
               
                 
                 $this->pet->actualizar();
                 if($bandera==true){
                     $this->pet->actualizar();
                    $this->redirect('mascota',['id'=>$this->pet->getIdMascota()]); 
                   
            }
    }
    
    public function eliminar(){
        
        $this->pet->setIdMascota($_REQUEST['id']);
            error_log();
        if($this->pet->delete()){
            error_log("eliminada");
            $this->redirect('adminmascotas'); 
        }else{
            $this->redirect('adminmascotas');
        }
        }
    
}

?>