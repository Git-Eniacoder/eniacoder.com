<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_blog extends CI_Model {

    public function fetch_blog(){
      return  $this->db->get('posts')->result_array();
    }
    public function fetch_single($id){
        return  $this->db->where('post_id',$id)->get('posts')->row_array();
    }
}

/* End of file Db_blog.php */
