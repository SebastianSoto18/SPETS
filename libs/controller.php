<?php
//controlador base
class Controller{

    function __construct()
    {
        //vista asociada a cada controlador
        $this->view=new View();
    }

    function loadModel($model){
        //se crea la url en base al modelo suministrado
        $url='models/'.$model.'Model.php';

        if(file_exists($url)){

            require_once $url;
            //Asocia el controllador al modelo 
            $modelname = $model.'Model';
            $this->model = new $modelname();

        }

    }

    // se valida que ninguno de los parametros enviados al controlador esten vacios 
    function existPOST($params){
        foreach ($params as $param){
            if(!isset($_POST[$param])){
                error_log('controllerbase::existpost->no existe el parametro'.$param);
                return false;
            }

        }
        return true;
    }

        // se valida que ninguno de los parametros que tenga el controlador esten vacios 
        function existGET($params){
            foreach ($params as $param){
                if(!isset($_GET[$param])){
                    error_log('controllerbase::existGET->no existe el parametro'.$param);
                    return false;
                }
    
            }
            return true;
        }

        function getGet($name){
            return $_GET[$name];
        }
    
      function getPost($name){
            return $_POST[$name];
        }  

        function getFile($name){
            return $_FILES[$name];
        }

        //manda mensajes y redirecciona de un controlador a otra vista 
        function redirect($url, $mensajes = []){
            $data = [];
            $params = '';
            
            foreach ($mensajes as $key => $value) {
                array_push($data, $key . '=' . $value);
            }
            $params = join('&', $data);
            
            if($params != ''){
                $params = '?' . $params;
            }
            error_log(3);
            header('location: '.constant('URL').$url.$params);
            error_log(5);
        }
    }

?>