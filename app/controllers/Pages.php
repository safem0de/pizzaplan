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
                'title' => 'Welcome',
                'posts' => $posts
            ];
            // print_r($data['posts']);
            
            $this->view('pages/index', $data);
        }

        public function about(){
            // echo $id;
            $this->view('pages/about');
        }
    }