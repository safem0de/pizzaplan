<?php

    /*
     * Base Controller
     * Load the models and views
     */
    
    class Controller
    {
        public $postModel;
        public $planModel;

        // Load model
        public function model($model){
            // Require model file
            require_once '../app/models/' . $model .'.php';

            // Instatiate model
            return new $model();
        }

        public function view($view, $data = []){
            if(file_exists('../app/views/' . $view . '.php'))
            {
                require_once '../app/views/' . $view . '.php';
            }
            else
            {
                die('View does not exist');
            }
        }
    }