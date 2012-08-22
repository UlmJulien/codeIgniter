<?php

class upload_controller extends CI_Controller {
    
    private $idImage;
    
    public function __construct () {
        
        parent::__construct();
        $this->load->library('image');
        $this->load->helpers('himage');
        $this->load->model('upload_model');
        
    }
    
    public function index () {
        
        $this->formulaireUpload();
        
    }    
    
    public function formulaireUpload() {
        
        $this->load->view('form/uploadImage');
        
    }
    
    public function uploadImage () {
        
        if ( $_FILES['image']['error'] > 0 )
            $this->load->view('errors/upload_error');
        else {
            $idImage = $this->image->upload($_FILES['image']);
            $this->upload_model->db_insert_image($idImage);
            $this->load->view('test/upload_success');
        }
        
    }
    
}
?>
