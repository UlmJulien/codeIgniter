<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class upload_model extends CI_Model {

       public function db_insert_image ($id_image) {

           $this->db->set('id', '');
           $this->db->set('image_id', $id_image);

           return $this->db->insert($this->image_storage);
        
    }
    
}
?>
