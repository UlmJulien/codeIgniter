<?php

class SessionTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //en autoload normalement
        //$this->load->library('session');
    }
    
    public function infosSession () {
        
         $data = array();
         $data['id'] = $this->session->userdata('session_id');
         $data['ip'] = $this->session->userdata('ip_adress');
         $data['browser'] = $this->session->userdata('user_agent');
         $data['Last'] = $this->session->userdata('last_activity');
         
         $this->load->view('sessionTest/infoSession', $data);
    }
   
}

?>
