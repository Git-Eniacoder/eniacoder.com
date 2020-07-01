<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Cat_blog extends CI_Controller {
    
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
        $this->load->view('admin/blog/cat_blog',$data);
        $this->load->view('admin/common/footer');
    }
    public function insert(){
        $this->form_validation->set_rules('cat', 'Category', 'trim|required');
        if ($this->form_validation->run()) {
            $data['cat_name'] = $this->input->post('cat');
            $data['cat_desc'] = $this->input->post('catdesc');
            if($this->db_blog->create_cat($data)){
                $array = array(
                    'error'   => false,
                    'msg'   => '<p class="text-center text-success">Category Created Successfully</p>',
                   );
            }else{
                $array = array(
                    'errors'   => true,
                    'msg'   => '<p class="text-center text-danger">Error In Category Creation</p>',
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
    public function delete($id=null){
        if($this->db_blog->delete_cat($id)){
            echo true;
        }else{
          echo false;
        }
    }

}

/* End of file Cat_blog.php */
