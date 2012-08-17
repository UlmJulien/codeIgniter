<?php

class SessionTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //en autoload normalement
        //$this->load->library('session');
    }
    
    public function index() {
        $this->infoSession ();
    }
    
    public function infoSession () {
        
         $data = array();
         $data['id'] = $this->session->userdata('session_id');
         $data['ip'] = $this->session->userdata('ip_address');
         $data['browser'] = $this->session->userdata('user_agent');
         $data['Last'] = $this->session->userdata('last_activity');
         
         $this->session->set_userdata('pseudo', 'Arthur');      
         $data['pseudo'] = $this->session->userdata('pseudo');
         
         $this->load->view('sessionTest/infoSession', $data);
         
    }
    
    public function destroySession () {
        $this->session->sess_destroy();
        
        redirect();
    }
   
}

?>
