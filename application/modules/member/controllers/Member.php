<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MX_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->helper('url');
    }

    public function index() {
        $this->callemtyEm();
    }
    public function callmemberUse()
    {
        $this->theme_admin->render('memberuse_view');
    }
    public function callShow()
    {
        $this->showMem();
    }
    public function callAdd()
    {
        $this->addMem_view();
    }

    public function memShowEm()
    {   
         $data['member'] = $this->Member_model->DataMem();
       return $this->theme_admin->render('memShowEm_view',$data);
    }

    public function formUpdateMem() ///เเรียกหน้าอัปเดทของ EMP
    {
        $dataperson['member'] = $this->Member_model->DataMem();
        /*$this->load->model('DataMem');*/
        $this->theme_admin->render('editeMem_view');
        /*var_dump($query);*/
    }

     public function formUpdateAdd() ///เเรียกหน้าอัปเดทของ Addmin
    {
        $dataperson['member'] = $this->Member_model->DataMem();
        /*$this->load->model('DataMem');*/
        $this->theme_admin->render('editeMemAdd_view');
        /*var_dump($query);*/
    }

    public function callemtyEm()
    {
        $this->theme_admin->render('emtyEm_view');
    }





    public function showMem()
    {
        $data['member'] = $this->Member_model->DataMem();
        $this->theme_admin->render('memberShow_view',$data);
    }
    public function formAddMem(){

        $this->theme_admin->render('addMem_view');
    }

     public function addAdMem()
    {
        $this->theme_admin->render('addAdMem_view');
    }

    public function validate()
    {
        $data = array(
            'FName'     => $this->input->post('FName'),
            'LName'     =>  $this->input->post('LName'),
            'UserName' => $this->input->post('UserName'),
            'Password' => $this->input->post('Password'),
            'IdCard'    =>$this->input->post('IdCard'),
            'Address'    =>$this->input->post('Address'),
            'Birthday'    =>$this->input->post('Birthday'),
            'Email'    =>$this->input->post('Email'),
            'Phone'    =>$this->input->post('Phone'),
            'MemPos'    =>$this->input->post('MemPos'),
        );
        $this->Member_model->insertMem($data);
        /*print_r($data);*/
        redirect('Member/memShowEm','refresh');

    }

     public function validateAdd()
    {
        $data = array(
            'FName'     => $this->input->post('FName'),
            'LName'     =>  $this->input->post('LName'),
            'UserName' => $this->input->post('UserName'),
            'Password' => $this->input->post('Password'),
            'IdCard'    =>$this->input->post('IdCard'),
            'Address'    =>$this->input->post('Address'),
            'Birthday'    =>$this->input->post('Birthday'),
            'Email'    =>$this->input->post('Email'),
            'Phone'    =>$this->input->post('Phone'),
            'MemPos'    =>$this->input->post('MemPos'),
        );
        $this->Member_model->insertMem($data);
        /*print_r($data);*/
        redirect('member/callShow','refresh');

    }
      public function update()
    {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id = $this->input->post('id');
            $FName = $this->input->post('FName');
            $LName = $this->input->post('LName');
            $Phone = $this->input->post('Phone');
            $Address = $this->input->post('Address');
            $Email = $this->input->post('Email');

            //echo $first_name;

            $data = array(
                'UserName'     => $username,
                'Password'     => $password,
                'FName'     => $FName,
                'LName'     => $LName,
                'Phone'     => $Phone,
                'Address'     => $Address,
                'Email'     => $Email,


            );

            $idData = array(
                'IdMem' => $id
            );
           $this->Member_model->updateMem($data,$idData);
//            $this->memShowEm();
           redirect('Member/memShowEm','refresh');
    }

    public function updateAdd()
    {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id = $this->input->post('id');
            $FName = $this->input->post('FName');
            $LName = $this->input->post('LName');
            $Phone = $this->input->post('Phone');
            $Address = $this->input->post('Address');
            $Email = $this->input->post('Email');

            //echo $first_name;

            $data = array(
                'UserName'     => $username,
                'Password'     => $password,
                'FName'     => $FName,
                'LName'     => $LName,
                'Phone'     => $Phone,
                'Address'     => $Address,
                'Email'     => $Email,


            );

            $idData = array(
                'IdMem' => $id
            );
           return $this->Member_model->updateMem($data,$idData);
           redirect('Member/callshow','refresh');
    }

     public function delete()
    {
        $this->load->model('Member_model');

        $id = $this->input->get('id');

        if($this->Member_model->deleteMem($id))
        {
           return 
           redirect('Member/memShowEm','refresh');

        }

    }

     public function deleteAdd()
    {
        $this->load->model('Member_model');

        $id = $this->input->get('id');

        if($this->Member_model->deleteMem($id))
        {
           return 
           redirect('Member/showMem','refresh');

        }

    }
    
    public function getMember(){
        $id = $this->input->post('id');
        $result = $this->Member_model->getMember($id);
        echo json_encode($result);
    }

}