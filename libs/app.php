<?php

require_once 'controllers/errores.php';

class App{

    function __construct(){

            //si existe una url se guarda en la variable, de lo contrario se le asigna null
            $url=isset($_GET['url']) ? $_GET['url']:null;
            //elimina el ultimo "/" si lo hay
            $url=rtrim($url,'/');
            //crea un arreglo el cual va separado por cada "/"
            $url = explode('/',$url);
            //pregunta si esta vacio el campo donde debe ir el controlador 
            //si es el caso se carga el controlador del login y se redirecciona hacia la vista login
            if(empty($url[0])){
                error_log('APP::contruc->no hay controlador');
                $archivoController = 'controllers/login.php';
                require_once $archivoController;
                $controller=new login();
                $controller->loadModel('loginpage');
                $controller->render();

                return false;
            }

            //añade a la variable la ruta del controlador que se busca
            //ej controller/login.php
            $archivoController= 'controllers/'.$url[0].'.php';
            
            //pregunta si ese archivo existe, si existe lo manda a llamar y lo carga
            if(file_exists(($archivoController))){
                require_once $archivoController;

                $controller=new $url[0];
                $controller->loadModel($url[0]);
            
            // se busca si hay un metodo en especifico del controllador al cual se debe llamar , sino, carga uno por defaul
                if(isset($url[1])){
                    //pregunta si existe el metodo dentro del controllador 
                    if(method_exists($controller,$url[1])){
                        //se busca parametros adicionales que podria requerir el metodo 
                        if(isset($url[2])){
                            //numero de parametros 
                            $nparan->count($url)-2;
                            //array donde se guardan
                            $params=[];
                            //llenado del array
                            for ($i=0; $i < $nparan ; $i++) { 
                                array_push($params,$url[$i]+2);
                            }
                            //cargue del metodo del controlador y el paso de los parametros 
                            $controller->{$url[1]}($params);
                        }else{
                            //cargue del controlador y metodo sin parametros
                            $controller->{$url[1]}();
                        }
                    }else{
                        //metodo del controlador no existe
                        $controller=new Errores();
                        $controller->render();
                    }
                }else{
                    $controller->render();
                }

            }else{
                //controlador no existe 
                $controller=new Errores();
                $controller->render();
            }

        }
}


?>