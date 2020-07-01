<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class All_blog extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog/db_blog');
        
    }
    
    public function index()
    {
        $data['blog'] = $this->db_blog->fetch();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/blog/all_blog',$data);
        $this->load->view('admin/common/footer');
    }
    public function delete($id){
        if($this->db_blog->delete($id)){
            echo true;
        }else{
          echo false;
        }
    }

}

/* End of file All_blog.php */
