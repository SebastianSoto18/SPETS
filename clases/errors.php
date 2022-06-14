<?php

class Errors{
 
    const ERROR_USER_UPDATE_ERRORPASSWORD          = "0f0735f8603324a7bca482debdf088fa";
    const ERROR_LOGIN_AUTHENTICATE               = "11c37cfab311fbe28652f4947a9523c4";
    const ERROR_LOGIN_AUTHENTICATE_EMPTY         = "2194ac064912be67fc164539dc435a42";
    const ERROR_LOGIN_AUTHENTICATE_DATA          = "bcbe63ed8464684af6945ad8a89f76f8";
    const ERROR_SIGNUP_NEWUSER                   = "1fdce6bbf47d6b26a9cd809ea1910222";
    const ERROR_SIGNUP_NEWUSER_EMPTY             = "pan";
    const ERROR_SIGNUP_NEWUSER_EXISTS            = "a74accfd26e06d012266810952678cf3";
    const ERROR_SINGUP_NEWUSER_PHOTOEXTENSION    =  "wfhawefhowjeflkenfñlkjewñfkañwkeh";
    const ERROR_SINGUP_NEWUSER_PHOTOSIZE         = "wdfaefawfaergbkpkok,ñlr464646464665";
    const ERROR_SINGUP_NEWUSER_UPLOADPHOTO       = "edifaiekjiojop968r65gr48rr98r6r4rrr";
    const ERROR_USER_UPDATE_ERRORPASSWORDEMPTY  = "añlerjhgoer{lgmw4{lrkngóieijrg{qñl";
    const ERROR_USER_UPDATE_ALLINPUTSEMPTY     = "{lkwjfipqu3ioj4oi8u9unefnkef";
    const ERROR_USER_DELETE                     = "wfnkaehipuearkjnelrkghipreu";
    const ERROR_SIGNUP_NOTSAMEPASS              ="ekrvowjenvrpj34t34grgrebi";
   const ERROR_PET_UPDATEPHOTO      = "añolweifhpiauewhfawdfjio";
   const ERROR_SIGNUP_NEWPET_EMPTY  ="dlkfjnañkjlrndfvñkajrbfv";
    const ERROR_SIGNUP_NEWPET = "weiduhfiauewaedkrfgjn";
    private $errorsList = [];

    public function __construct()
    {
        $this->errorsList = [
            Errors::ERROR_USER_UPDATE_ERRORPASSWORD     => 'Contraseña incorrecta',
            Errors::ERROR_LOGIN_AUTHENTICATE        => 'Hubo un problema al autenticarse',
            Errors::ERROR_LOGIN_AUTHENTICATE_EMPTY  => 'Los parámetros para autenticar no pueden estar vacíos',
            Errors::ERROR_LOGIN_AUTHENTICATE_DATA   => 'Nombre de usuario y/o password incorrectos',
            Errors::ERROR_SIGNUP_NEWUSER            => 'Hubo un error al intentar registrarte. Intenta de nuevo',
            Errors::ERROR_SIGNUP_NEWUSER_EMPTY      => 'Los campos no pueden estar vacíos',
            Errors::ERROR_SIGNUP_NEWUSER_EXISTS     => 'El correo que proporciono ya existe, selecciona otro',
            Errors::ERROR_SINGUP_NEWUSER_PHOTOEXTENSION => 'Extension de imagen no soportada, ingresar imagen con formato jpg, jpeg, png',
            Errors::ERROR_SINGUP_NEWUSER_PHOTOSIZE    => "El tamaño de la imagen es demasiado pequeño",
            Errors::ERROR_SINGUP_NEWUSER_UPLOADPHOTO  => "Error en la subida de la foto, por favor, intentelo nuevamente",
            Errors::ERROR_USER_UPDATE_ERRORPASSWORDEMPTY => "Es necesario que ingrese la contraseña actual para poder efectuar los cambios",
            Errors::ERROR_USER_UPDATE_ALLINPUTSEMPTY => "Debe por lo menos cambiar un elemento",
            Errors::ERROR_USER_DELETE                => "Error al eliminar cuenta, por favor, intente de nuevo",
            Errors::ERROR_SIGNUP_NOTSAMEPASS         => "las contraseñas deben ser iguales, intentelo de nuevo",
             Errors::ERROR_PET_UPDATEPHOTO    => "error al intentar subir la foto de su mascota",
             Errors::ERROR_SIGNUP_NEWPET_EMPTY  => "no pueden haber campos vacios",
             Errors::ERROR_SIGNUP_NEWPET     => "error intentando regiastrar su mascota",
        ];
    }

    function get($hash){
        return $this->errorsList[$hash];
    }

    function existsKey($key){
        if(array_key_exists($key, $this->errorsList)){
            return true;
        }else{
            return false;
        }
    }
}
?>