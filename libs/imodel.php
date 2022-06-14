<?php

    interface IModel{
        public function save();
        public function getAll();
        public function get($id);
        public function delete();
        public function actualizar();
        public function from($array);
    }

?>