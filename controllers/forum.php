<?php

class Forum extends CI_Controller {

    private $titre_defaut ="";
    private $titre_test;
    
    public function __construct() {
        parent::__construct();
       
        $this->titre_defaut = 'Hello World <br />';
        //echo $this->titre_defaut;
        
        $titre_test = "test <br />";
        //echo $titre_test;
        }

    public function accueil() {
        echo 'Hello World !';
    }
    
    public function afk() {
        echo 'I\'m AFK';
    }
    
    public function getTest ($pseudo = '', $age = '') {
        echo 'Bonjour '.$pseudo.' tu as '.$age.' ans.';
    }
    
    public function getTest2 () {
        echo 'Bonjour '.$_GET["name"].' tu as '.$_GET["age"].' ans.';
    }
    
    public function index() {
        $this->getTest ('julien', '23');
    }
        
    public function _output($output){
        var_dump($output);
    }
    
    public function maintenance() {
        echo 'Maintenance.<br/>';
    }
    
}

?>
