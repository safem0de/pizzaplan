<?php
    class Pages extends Controller{

        public function __construct()
        {
            $this->postModel = $this->model('Post');
        }

        public function index(){
            // $data = [
            //     'title' => 'Welcome',
            // ];
            // $this->view('pages/index', $data);
            redirect('plans/inputplan');
        }

        public function about(){
            // $data = [
            //     'title' => 'About us',
            // ];
            // $this->view('pages/about', $data);
            redirect('plans/inputplan');
        }

    }