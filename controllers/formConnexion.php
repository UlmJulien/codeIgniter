<?php

    class FormConnexion extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
        }
        
        public function index() {
            $this->connexion();
        }
        
        public function connexion () {
            $this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
            $this->form_validation->set_rules('mdp',    '"Mot de passe"',       'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');

            if ($this->form_validation->run())
                $this->load->view('FormConnexion/connexion_reussie');
            else
                $this->load->view('FormConnexion/connexion_form');
        }
    }

?>
