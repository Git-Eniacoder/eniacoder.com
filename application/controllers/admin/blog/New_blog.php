<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class New_blog extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog/db_blog');
        
    }
    
    public function index()
    {
        $data['category'] = $this->db_blog->fetch_cat();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/blog/new_blog',$data);
        $this->load->view('admin/common/footer');
    }
    public function createblog(){
        $this->form_validation->set_rules('bheading', 'Heading', 'required');
        if ($this->form_validation->run()) {
            // photo upload

            $config['upload_path']          = './assets/img/feature';
            $config['file_name']            = 'fetured_image'.rand().'.png';
            $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            // photo upload end
            $data['post_heading'] = $this->input->post('bheading');
            $data['post_content'] = $this->input->post('bcontent');
            $data['post_category'] = $this->input->post('bcategory');
            $data['post_url'] = $this->input->post('burl');
            $data['post_image'] = $config['file_name'];
            $data['post_tags'] = $this->input->post('btags');
            
            
            $this->load->library('upload', $config);
            if($this->upload->do_upload('bimage')){
                if($this->db_blog->insert_post($data)){
                    $array = array(
                        'error'   => false,
                        'msg'   => '<p class="text-center text-success">Post Created Successfully</p>',
                    );
                }else{
                    $array = array(
                        'error'   => true,
                        'msg'   => '<p class="text-center text-danger">Error In Post Creation</p>',
                    );
                }
            }else{
                $array = array(
                    'error'   => true,
                    'msg'   => '<p class="text-center text-danger">'.$this->upload->display_errors().'</p>',
                );
            }
        } else {
            $array = array(
                'form'   => true,
                'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
               );
        }
        echo json_encode($array);
    }
}

/* End of file New-blog.php */
