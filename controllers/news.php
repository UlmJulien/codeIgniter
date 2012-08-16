<?php

class News extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->accueil();
    }
    
    public function accueil () {
        $data = array();
        $data['pseudo'] = 'Arthur';
        $data['email'] = 'arthur@toto.fr';
        $data['en_ligne'] = TRUE;
        
        $this->load->view('news/vue', $data, false);
    }
}
?>
