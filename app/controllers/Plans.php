<?php
    class Plans extends Controller
    {
        public function __construct()
        {
            $this->planModel = $this->model('Plan');
        }

        public function inputplan()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // Sanitize Post Data
                $_POST = filter_input_array(INPUT_POST);

                // Init Data
                $data = [
                    'line' => trim($_POST['line']),
                    'planlot' => trim($_POST['planlot']),
                    'procode' => trim($_POST['procode']),
                    'ponumber' => trim($_POST['ponumber']),
                    'qty' => trim($_POST['qty']),
                    'description' => trim($_POST['description']),
                    'productiondate' => trim($_POST['productiondate']),
                    'line_err' => '',
                    'planlot_err' => '',
                    'procode_err' => '',
                    'ponumber_err' => '',
                    'qty_err' => '',
                    'description_err' => '',
                    'productiondate_err' => ''
                ];

                // Validate line
                if(empty($data['line']))
                {
                    $data['line_err'] = 'Please enter line';
                }

                // Validate planlot
                if(empty($data['planlot']))
                {
                    $data['planlot_err'] = 'Please enter plan lot';
                }

                // Validate procode
                if(empty($data['procode']))
                {
                    $data['procode_err'] = 'Please enter pro code';
                }

                // Validate ponumber
                if(empty($data['ponumber']))
                {
                    $data['ponumber_err'] = 'Please enter p/o number';
                }

                // Validate ponumber
                if(empty($data['description']))
                {
                    $data['description_err'] = 'Please enter description';
                }

                // Validate quantity
                if(empty($data['qty']))
                {
                    $data['qty_err'] = 'Please enter quantity';
                }

                // Validate productiondate
                if(empty($data['productiondate']))
                {
                    $data['productiondate_err'] = 'Please enter production date';
                }

                if( empty($data['line_err']) && empty($data['planlot_err']) && empty($data['procode_err']) &&
                    empty($data['ponumber_err']) && empty($data['qty_err']) && empty($data['productiondate_err']))
                {

                    if($this->planModel->insertplan($data))
                    {
                        redirect('plans/inputplan');
                    }
                    else
                    {
                        die('SOMETHING WENT WRONG');
                    }
                }
                else
                {
                    $this->view('plans/inputplan', $data);
                }

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