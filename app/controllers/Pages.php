<?php
    class Pages extends Controller{

        public function __construct()
        {
            // echo 'Pages loaded';
            // echo '<br>';
            $this->postModel = $this->model('Post');
        }

        public function index(){
            // echo 'index';
            // $this->view('hello');
            $posts = $this->postModel->getPosts();

            $data = [
                'title' => 'Welcome'
            ];
            
            $this->view('pages/index');
        }

        public function about(){
            // echo $id;
            $this->view('pages/about');
        }
    }