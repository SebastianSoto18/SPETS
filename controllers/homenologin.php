<?php

class homenologin extends SessionController{

function __construct()
        {
            parent::__construct();
            error_log('homedefault::contruc, entro al controlador');
        }

        function render(){
            error_log('carga index de homedefault');
            $this->view->render('home/homenologin');
        }

}

?>