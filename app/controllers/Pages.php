<?php
    class Pages extends Controller{
        public function __construct()
        {
            // echo 'Pages loaded';
            // echo '<br>';
        }

        public function index(){
            // echo 'index';
            // $this->view('hello');
            $this->view('index');
        }

        public function about($id){
            // echo $id;
        }
    }