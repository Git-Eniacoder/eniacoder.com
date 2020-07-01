<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_site extends CI_Model {

    public function fetch(){
        return $this->db->get('site_setting')->row_array();
    }
    public function fetch_page(){
        return $this->db->get('pages')->result_array();
    }

}

/* End of file Db_site.php */
