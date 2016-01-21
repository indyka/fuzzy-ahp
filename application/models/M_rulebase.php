<?php

/*
    Created by Joko irianto
    Organisasi timdonat
*/

class M_rulebase extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getRulebase1() {
        $query = $this->db->query("SELECT * FROM `rule` WHERE idrule <= 300000");
        $row = $query->result();
        return $row;
    }

    public function getRulebase2() {
        $query = $this->db->query("SELECT * FROM `rule` WHERE idrule > 300000");
        $row = $query->result();
        return $row;
    }

    public function getresult($temp) {
        $query = $this->db->query("SELECT * FROM `laptop` WHERE idlaptop = '".$temp."'");
       
        return $query;
    }

}


