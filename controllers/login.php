<?php
     require_once 'models/UserModel.php';
    class login extends SessionController{

        function __construct()
        {
            parent::__construct();
                $this->loadModel('loginpage');
            error_log('login::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de login');
            $this->view->render('login/loginpage');
        }

        function aut(){
            if($this->existPOST(['correo', 'contra'])){
                $correo=$this->getPost('correo');
                $contra=$this->getPost('contra');
                error_log($correo);
                error_log($contra);

                if($correo =='' || empty($correo) || $contra== '' || empty($contra)){
                    $this->redirect('login',['error'=> Errors::ERROR_LOGIN_AUTHENTICATE_EMPTY]);
                    return false;
                }

                $user=$this->model->login($this->getPost('correo'),$this->getPost('contra'));

                if($user!=NULL){
                    $this->initialize($user);
                    $this->redirect('home',['succes'=> Success::SUCCESS_SIGNUP_NEWUSER]);
                    return true;
                }else{
                    $this->redirect('login',['error'=> Errors::ERROR_LOGIN_AUTHENTICATE_DATA]);
                    return false;
                }


            }else{
                $this->redirect('login',['error'=> Errors::ERROR_LOGIN_AUTHENTICATE]);
                return false;
            }
        }

    }


?>