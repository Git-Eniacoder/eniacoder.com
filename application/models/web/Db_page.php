<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_page extends CI_Model {

    public function fetch_page($id){
        return  $this->db->where('page_id',$id)->get('pages')->row_array();
    }  

}

/* End of file Db_page.php */
