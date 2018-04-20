<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends MX_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Regis_model');
        $this->load->helper('url');
    }

    public function index() {
            $this->load->view('regis_view');

    }
    public function callFormRegis() {
            $this->load->view('regisForm_view');

    }

     public function showimg() {
            $this->load->view('showimg_view');

    }

      public function validateRegis()
   {

             $this->session->set_flashdata('done', 'สมัครสมาชิกสำเร็จ');

            $FName = $this->input->post('FName');
            $LName = $this->input->post('LName');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $birthday = $this->input->post('birthday');
            $idCard = $this->input->post('idCard');
            $address = $this->input->post('address');
            $phone = $this->input->post('phone');
            $ClassMem = $this->input->post('MemPos');
            $email = $this->input->post('email');

            /*echo $first_name;*/

            $data = array(
                'FName'     => $FName,
                'LName'     => $LName,
                'username'  => $username,
                'pass'  => $password,
                'birthday'  => $birthday,
                'idCard'    => $idCard,
                'address'   => $address,
                'phone'     => $phone,
                'MemPos'=> $ClassMem,
                'email'=> $email,

            );
            $this->Regis_model->insertMember($data);
                redirect('','refresh');
                
                }

    
    


}
