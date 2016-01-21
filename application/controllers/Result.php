<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

    public function Loginadmin() {

        parent::__construct();

       
    }

    public function index($id) {

        $this->load->model('M_rulebase');
//ini quey butuh namalaptop
        $querydetail = $this->M_rulebase-> getresult($id);
        $data['querydetail'] = $querydetail->row_array() ;

        $this->load->view('header');
        $this->load->view('result',$data);
        $this->load->view('footer');
       
    }
}