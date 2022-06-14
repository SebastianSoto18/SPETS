<?php

require_once 'models/loginModel.php';
class LoginModel extends Model{


    function __construct()
    {
        parent::__construct();
    }

    function login($correo,$contra){
        try {
           $query=$this->prepare('SELECT * FROM Persona WHERE correo = :correo ');
           $query->execute(['correo'=>$correo]);

           if($query->rowCount()==1){
               $item = $query->fetch(PDO::FETCH_ASSOC);
               $user=new UserModel("","");  
                   $user->from($item);
                    error_log($user->getcontrasena());
                    error_log($contra);

                    if(password_verify($contra,$user->getcontrasena())){
                        error_log("loginmodel::login->succes");
                        return $user;
                    }else{
                        error_log("PASSWOR ERRADA");
                        return NULL;
                    }
            }else{

            }
        } catch (PDOException $e) {
            error_log("LOGINMODEL::LOGIN->ERROR ->".$e);
            return null;
        }
    }
}



?>