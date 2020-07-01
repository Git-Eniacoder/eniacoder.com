<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('web/db_blog');
        
    }
    
    public function index()
    {
        $this->data['blog'] = $this->db_blog->fetch_blog();
        $this->load->view('web/common/header2.php', $this->data);
        $this->load->view('web/blog/blog', $this->data);
        $this->load->view('web/common/footer.php', $this->data);
        
    }

}

/* End of file Blog.php */
