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
                    $date_string = date('d F Y', strtotime($data['productiondate']));

                    $info_status = "" .
                    "<b>Line     &emsp; : &emsp;</b>" . $data['line'] .  "<br/><br/>" .
                    "<b>Plan lot &emsp; : &emsp;</b>" . $data['planlot'] .  "<br/><br/>" .
                    "<b>Pro code &emsp; : &emsp;</b>" . $data['procode'] .  "<br/><br/>" .
                    "<b>PO Number &emsp;: &emsp;</b>" . $data['ponumber'] . "<br/><br/>" .
                    "<b>Quantity &emsp; : &emsp;</b>" . $data['qty'] .  "&emsp; unit<br/><br/>".
                    "<b>Production date : &emsp;</b>" . $date_string .  "<br/>";
                    
                    // flash('upload_status', $info_status);
                    // redirect('plans/inputplan');

                    if($this->planModel->insertplan($data))
                    {
                        flash('upload_status', $info_status);
                        redirect('plans/inputplan');
                    }
                    else
                    {
                        die('SOMETHING WENT WRONG CONTACT MFD - 2201');
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