<?php
    class Plans extends Controller
    {
        public function __construct()
        {
            
        }

        public function inputplan()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

            }
            else
            {
                $data = [
                    'line' => '',
                    'planlot' => '',
                    'procode' => '',
                    'ponumber' => '',
                    'qty' => '',
                    'description' => '',
                    'productiondate' => '',
                    'line_err' => '',
                    'planlot_err' => '',
                    'procode_err' => '',
                    'ponumber_err' => '',
                    'qty_err' => '',
                    'description_err' => '',
                    'productiondate_err' => ''
                ];

                $this->view('plans/inputplan', $data);
            }
        }

    }