<?php

class Form extends CI_Controller {

    public function __construct() {

        parent::__construct();
        session_destroy();

        $this->load->model('M_rulebase');
        $this->db->save_queries = FALSE;
        
        //$this->load->library('../controllers/Fuzzifikasi');

    }

    public function index() {

        $this->load->view('header');
        $this->load->view('form');
        $this->load->view('footer');
       
    }

    public function find() {

        $option[1] = $this->input->post('option1');
        $option[2] = $this->input->post('option2');
        $option[3] = $this->input->post('option3');
        $option[4] = $this->input->post('option4');
        $option[5] = $this->input->post('option5');
        $option[6] = $this->input->post('option6');
        $option[7] = $this->input->post('option7');
        $option[8] = $this->input->post('option8');
        $option[9] = $this->input->post('option9');
        $option[10] = $this->input->post('option10');
        $option[11] = $this->input->post('option11');
        $option[12] = $this->input->post('option12');

        require_once(APPPATH.'controllers/Fuzzifikasi.php');
        $fuzzifikasi = new Fuzzifikasi();

        $miuLow = array();
        $miuMedium = array();
        $miuHigh = array();


        //hasil miu low
        for ($i=0; $i < 12; $i++) { 
            $miuLow[$i] = $fuzzifikasi->low($option[$i+1]);
        }

        //hasil miu medium         
        for ($i=0; $i < 12; $i++) {
            $miuMedium[$i] = $fuzzifikasi->medium($option[$i+1]);         
        }

        //hasil miu high
        for ($i=0; $i < 12; $i++) { 
            $miuHigh[$i] = $fuzzifikasi->high($option[$i+1]);
        }

        

        $rulebase = $this->M_rulebase->getRulebase1();


        $minimal = array();

        for ($i=1; $i <= 10; $i++) { 
            $minimal[$i] = array();
        }

        foreach($rulebase as $r) {

            $x = 0;
            //var1
            if ($r->download == 'low') {
                $miu1 = $miuLow[$x];
            }
            else if ($r->download == 'medium') {
                $miu1 = $miuMedium[$x];
            }
            else if ($r->download == 'high') {
                $miu1 = $miHigh[$x];
            }
            $x++;
            //var2
            if ($r->listeningmusic == 'low') {
                $miu2 = $miuLow[$x];
            }
            else if ($r->listeningmusic == 'medium') {
                $miu2 = $miuMedium[$x];
            }
            else if ($r->listeningmusic == 'high') {
                $miu2 = $miuHigh[$x];
            }
            $x++;
            //var3
            if ($r->playinggame == 'low') {
                $miu3 = $miuLow[$x];
            }
            else if ($r->playinggame == 'medium') {
                $miu3 = $miuMedium[$x];
            }
            else if ($r->playinggame == 'high') {
                $miu3 = $miuHigh[$x];
            }
            $x++;
            if ($r->watchingmovie == 'low') {
                $miu4 = $miuLow[$x];
            }
            else if ($r->watchingmovie == 'medium') {
                $miu4 = $miuMedium[$x];
            }
            else if ($r->watchingmovie == 'high') {
                $miu4 = $miuHigh[$x];
            }
            $x++;
            if ($r->programming == 'low') {
                $miu5 = $miuLow[$x];
            }
            else if ($r->programming == 'medium') {
                $miu5 = $miuMedium[$x];
            }
            else if ($r->programming == 'high') {
                $miu5 = $miuHigh[$x];
            }
            $x++;
            if ($r->wordprocessing == 'low') {
                $miu6 = $miuLow[$x];
            }
            else if ($r->wordprocessing == 'medium') {
                $miu6 = $miuMedium[$x];
            }
            else if ($r->wordprocessing == 'high') {
                $miu6 = $miuHigh[$x];
            }
            $x++;
            if ($r->dataanalysis == 'low') {
                $miu7 = $miuLow[$x];
            }
            else if ($r->dataanalysis == 'medium') {
                $miu7 = $miuMedium[$x];
            }
            else if ($r->dataanalysis == 'high') {
                $miu7 = $miuHigh[$x];
            }
            $x++;
            if ($r->graphichandling == 'low') {
                $miu8 = $miuLow[$x];
            }
            else if ($r->graphichandling == 'medium') {
                $miu8 = $miuMedium[$x];
            }
            else if ($r->graphichandling == 'high') {
                $miu8 = $miuHigh[$x];
            }
            $x++;
            if ($r->priceconsideration == 'low') {
                $miu9 = $miuLow[$x];
            }
            else if ($r->priceconsideration == 'medium') {
                $miu9 = $miuMedium[$x];
            }
            else if ($r->priceconsideration == 'high') {
                $miu9 = $miuHigh[$x];
            }
            $x++;
            if ($r->weightofcomputer == 'low') {
                $miu10 = $miuLow[$x];
            }
            else if ($r->weightofcomputer == 'medium') {
                $miu10 = $miuMedium[$x];
            }
            else if ($r->weightofcomputer == 'high') {
                $miu10 = $miuHigh[$x];
            }
            $x++;
            if ($r->batterybackup == 'low') {
                $miu11 = $miuLow[$x];
            }
            else if ($r->batterybackup == 'medium') {
                $miu11 = $miuMedium[$x];
            }
            else if ($r->batterybackup == 'high') {
                $miu11 = $miuHigh[$x];
            }
            $x++;
            if ($r->screensize == 'low') {
                $miu12 = $miuLow[$x];
            }
            else if ($r->screensize == 'medium') {
                $miu12 = $miuMedium[$x];
            }
            else if ($r->screensize == 'high') {
                $miu12 = $miuHigh[$x];
            }
            $rulemiu = [$miu1, $miu2, $miu3, $miu4, $miu5, $miu6, $miu7, $miu8, $miu9, $miu10, $miu11, $miu12];
            $x = array();
            for ($i=1; $i <=10 ; $i++) { 
                if($r->laptop == $i){
                    array_push($minimal[$i], min($rulemiu));
                }
            }
        }

        $rulebase = null;

        $rulebase = $this->M_rulebase->getRulebase2();

        foreach($rulebase as $r) {
 
            $x = 0;
            //var1
            if ($r->download == 'low') {
                $miu1 = $miuLow[$x];
            }
            else if ($r->download == 'medium') {
                $miu1 = $miuMedium[$x];
            }
            else if ($r->download == 'high') {
                $miu1 = $miuHigh[$x];
            }
            $x++;
            //var2
            if ($r->listeningmusic == 'low') {
                $miu2 = $miuLow[$x];
            }
            else if ($r->listeningmusic == 'medium') {
                $miu2 = $miuMedium[$x];
            }
            else if ($r->listeningmusic == 'high') {
                $miu2 = $miuHigh[$x];
            }
            $x++;
            //var3
            if ($r->playinggame == 'low') {
                $miu3 = $miuLow[$x];
            }
            else if ($r->playinggame == 'medium') {
                $miu3 = $miuMedium[$x];
            }
            else if ($r->playinggame == 'high') {
                $miu3 = $miuHigh[$x];
            }
            $x++;
            if ($r->watchingmovie == 'low') {
                $miu4 = $miuLow[$x];
            }
            else if ($r->watchingmovie == 'medium') {
                $miu4 = $miuMedium[$x];
            }
            else if ($r->watchingmovie == 'high') {
                $miu4 = $miuHigh[$x];
            }
            $x++;
            if ($r->programming == 'low') {
                $miu5 = $miuLow[$x];
            }
            else if ($r->programming == 'medium') {
                $miu5 = $miuMedium[$x];
            }
            else if ($r->programming == 'high') {
                $miu5 = $miuHigh[$x];
            }
            $x++;
            if ($r->wordprocessing == 'low') {
                $miu6 = $miuLow[$x];
            }
            else if ($r->wordprocessing == 'medium') {
                $miu6 = $miuMedium[$x];
            }
            else if ($r->wordprocessing == 'high') {
                $miu6 = $miuHigh[$x];
            }
            $x++;
            if ($r->dataanalysis == 'low') {
                $miu7 = $miuLow[$x];
            }
            else if ($r->dataanalysis == 'medium') {
                $miu7 = $miuMedium[$x];
            }
            else if ($r->dataanalysis == 'high') {
                $miu7 = $miuHigh[$x];
            }
            $x++;
            if ($r->graphichandling == 'low') {
                $miu8 = $miuLow[$x];
            }
            else if ($r->graphichandling == 'medium') {
                $miu8 = $miuMedium[$x];
            }
            else if ($r->graphichandling == 'high') {
                $miu8 = $miuHigh[$x];
            }
            $x++;
            if ($r->priceconsideration == 'low') {
                $miu9 = $miuLow[$x];
            }
            else if ($r->priceconsideration == 'medium') {
                $miu9 = $miuMedium[$x];
            }
            else if ($r->priceconsideration == 'high') {
                $miu9 = $miuHigh[$x];
            }
            $x++;
            if ($r->weightofcomputer == 'low') {
                $miu10 = $miuLow[$x];
            }
            else if ($r->weightofcomputer == 'medium') {
                $miu10 = $miuMedium[$x];
            }
            else if ($r->weightofcomputer == 'high') {
                $miu10 = $miuHigh[$x];
            }
            $x++;
            if ($r->batterybackup == 'low') {
                $miu11 = $miuLow[$x];
            }
            else if ($r->batterybackup == 'medium') {
                $miu11 = $miuMedium[$x];
            }
            else if ($r->batterybackup == 'high') {
                $miu11 = $miuHigh[$x];
            }
            $x++;
            if ($r->screensize == 'low') {
                $miu12 = $miuLow[$x];
            }
            else if ($r->screensize == 'medium') {
                $miu12 = $miuMedium[$x];
            }
            else if ($r->screensize == 'high') {
                $miu12 = $miuHigh[$x];
            }
            $rulemiu = [$miu1, $miu2, $miu3, $miu4, $miu5, $miu6, $miu7, $miu8, $miu9, $miu10, $miu11, $miu12];
            for ($i=1; $i <=10 ; $i++) { 
                if($r->laptop == $i){
                    array_push($minimal[$i], min($rulemiu));
                }
            }
        }

        $nilaimax = array();

        for ($i=0; $i < 10; $i++) { 
            
            $nilaimax[$i] = max($minimal[$i+1]);

        }

        require_once(APPPATH.'controllers/Defuzzifikasi.php');
        $defuzzifikasi = new Defuzzifikasi();

        $z[0] = $defuzzifikasi->laptop1($nilaimax[0]);
        $z[1] = $defuzzifikasi->laptop2($nilaimax[1]);
        $z[2] = $defuzzifikasi->laptop3($nilaimax[2]);
        $z[3] = $defuzzifikasi->laptop4($nilaimax[3]);
        $z[4] = $defuzzifikasi->laptop5($nilaimax[4]);
        $z[5] = $defuzzifikasi->laptop6($nilaimax[5]);
        $z[6] = $defuzzifikasi->laptop7($nilaimax[6]);
        $z[7] = $defuzzifikasi->laptop8($nilaimax[7]);
        $z[8] = $defuzzifikasi->laptop9($nilaimax[8]);
        $z[9] = $defuzzifikasi->laptop10($nilaimax[9]); 

        $wa = $defuzzifikasi->wa($z, $nilaimax);


        $miuakhir = array(
            0 => $defuzzifikasi->defuzz_laptop1($wa), 
            1 => $defuzzifikasi->defuzz_laptop2($wa), 
            2 => $defuzzifikasi->defuzz_laptop3($wa), 
            3 => $defuzzifikasi->defuzz_laptop4($wa), 
            4 => $defuzzifikasi->defuzz_laptop5($wa), 
            5 => $defuzzifikasi->defuzz_laptop6($wa), 
            6 => $defuzzifikasi->defuzz_laptop7($wa), 
            7 => $defuzzifikasi->defuzz_laptop8($wa), 
            8 => $defuzzifikasi->defuzz_laptop9($wa), 
            9 => $defuzzifikasi->defuzz_laptop10($wa), 
        );

        $laptop = array_search(max($miuakhir), $miuakhir)+1;

        $data = array(
            'low' => $miuLow,
            'medium' => $miuMedium,
            'high' => $miuHigh,
            'nilaimax' => $miuakhir,
            'laptop' => $laptop,
            'wa' => $wa
        );

        $this->load->view('header');
        $this->load->view('fuzzifikasi', $data);

        $laptop = array_search(max($miuakhir), $miuakhir);
        
        //$this->result($laptop+1);

    }

    public function result($id) {

        $this->load->model('M_rulebase');
        $querydetail = $this->M_rulebase-> getresult($id);
        $data['querydetail'] = $querydetail->row_array() ;


        $this->load->view('header');
        $this->load->view('result',$data);
        $this->load->view('footer');
       
    }
}