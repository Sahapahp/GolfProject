<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Regis_model');
        $this->load->helper('url');
    }

    public function index() {
//        $this->load->view('regis_view');
    }

    public function callFormRegis() {
        $dataMember['Member'] = '';
            $dataMember['message'] = '';
        $this->load->view('regisForm_view',$dataMember);
    }

    public function showimg() {
        $this->load->view('showimg_view');
    }

    public function validateRegis() {

        $this->session->set_flashdata('done', 'สมัครสมาชิกสำเร็จ');

        $FName = $this->input->post('FName');
        $LName = $this->input->post('LName');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $birthday = $this->input->post('birthday');
        $idCard = $this->input->post('IdCard');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $ClassMem = $this->input->post('MemPos');
        $email = $this->input->post('email');

        /* echo $first_name; */

        $data = array(
            'FName' => $FName,
            'LName' => $LName,
            'UserName' => $username,
            'Password' => $password,
            'birthday' => $birthday,
            'idCard' => $idCard,
            'address' => $address,
            'phone' => $phone,
            'regis_premium' => $ClassMem,
            'MemPos' => '0',
            'email' => $email,
        );
        $Member = $this->Regis_model->get_Member($username,$email);
        if (count($Member) == 0) {
            $this->Regis_model->insertMember($data);
            $insert_id = $this->Regis_model->get_maxID();
//            $insert_id = json_decode($insert_id);
            if($ClassMem=="1"){
                redirect(base_url()."Regis/regisPay?id=".$insert_id[0]->maxID, 'refresh');
            }else{
                redirect(base_url().'Login/loginAll', 'refresh');
            }
        }else{
            $dataMember['Member'] = $data;
            $dataMember['message'] = "Username หรือ Email มีผู้ใช้แล้ว !!!";
            $this->load->view('regisForm_view',$dataMember);
        }
    }
    
    public function regisPay(){
        $this->load->view('regispay_view');
    }
    
    public function update_mempos(){
        $id = $this->input->post('id');
        $result= $this->Regis_model->update_mempos($id);
        echo print_r($result);
    }
    
    

}
