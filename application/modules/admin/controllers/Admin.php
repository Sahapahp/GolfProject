<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {


    public function __construct() {
        parent::__construct();
        /*$this->theme_admin->render('admin_view');*/
        $this->load->model('Admin_model');
    }

    public function index(){
    	 
       $this->showAdmin();
    }

    public function callshow(){
        $this->showAdmin();
    }

    public function showAdmin() {
         
            
            $data['admin'] = $this->Admin_model->DataAdmin();
            $this->load->view('adminshow_view',$data);
            /*$this->theme_admin->render('admin_view');*/
            


    }
    public function test(){
        echo "11";
    }

    public function formAddAdmin(){

        $this->theme_admin->render('addadmin_view');
    }

     public function formUpdateAdmin()
    {
        $this->load->view('UpdateAdmin_view');
    }
    public function updateAdmin()
    {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id = $this->input->post('id');
            //echo $first_name;

            $data = array(
                'UserName'     => $username,
                'Password'     => $password,
            );

            $idData = array(
                'IdAdmin' => $id
            );
            $this->Admin_model->updateAdmin($data,$idData);
    }
      public function validate()
   {

            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            

            $data = array(
                'UserName'     => $first_name,
                'Password'     => $last_name,

            );
            if($this->Admin_model->insertAdmin($data,$first_name))
           {
                $this->Alert("เพิ่ม ".$first_name." สำเร็จ");
                $this->showAdmin();
           }
           else 
           {
                $this->Alert("ไม่สามารถเพิ่ม ".$first_name." ได้");
                $this->showAdmin();
           } 
        }

         public function delete()
    {
        $this->load->model('Admin_model');

        $id = $this->input->get('id');

        if($this->Admin_model->deleteAdmin($id))
        {
            $this->showAdmin();
        }
    }
     public function Alert($msg)
    {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }


}
    

    
    



    
    



