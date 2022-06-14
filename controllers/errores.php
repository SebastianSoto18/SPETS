<?php

class Errores extends controller{
    function __construct()
    {
        parent::__construct();
        error_log('Errores::contruc, inicio de errores');
    }
    function render(){
        error_log('renderizando 404');
        $this->view->render('errorpage/index');
    }
}

?>