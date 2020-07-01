<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('web/db_page');
        
    }
    
    public function index()
    {
        $this->load->view('web/common/header2.php', $this->data);
        $this->load->view('web/pages/page', $this->data);
        $this->load->view('web/common/footer.php', $this->data);
        
    }
    public function fetch($id){
       $this->data['page'] = $this->db_page->fetch_page($id);
       $this->index();
    }
}

/* End of file Page.php */
