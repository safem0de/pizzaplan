<?php
    class Pages{
        public function __construct()
        {
            echo 'Pages loaded';
            echo '<br>';
        }

        public function index(){
            echo 'index';
        }

        public function about($id){
            echo $id;
        }
    }