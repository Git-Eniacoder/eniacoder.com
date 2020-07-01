<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    public function index()
    {
        $this->load->view('web/common/header',$this->data);
        $this->load->view('web/home',$this->data);
        $this->load->view('web/common/footer',$this->data);
        
    }

}

/* End of file Home.php */
