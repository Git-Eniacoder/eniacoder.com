<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_single extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('web/db_blog');
        
    }
    
    public function index()
    {
        $this->load->view('web/common/header2.php', $this->data);
        $this->load->view('web/blog/single_blog', $this->data);
        $this->load->view('web/common/footer.php', $this->data);
        
    }
    public function fetch($id){
       $this->data['single'] = $this->db_blog->fetch_single($id);
       $this->index();
    }
}

/* End of file Blog_single.php */
