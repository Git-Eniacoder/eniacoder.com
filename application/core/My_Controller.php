<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

    
    protected $data;
    public function __construct(){
        parent::__construct();
        $this->load->model('web/db_site');
        
        $this->config->load("urls", true);
        $this->data['url'] = $this->config->item("urls");
        $this->data['site_setting'] =  $this->db_site->fetch();
        $this->data['page_name'] =  $this->db_site->fetch_page();
    }
    

}

/* End of file My_COntroller.php */
