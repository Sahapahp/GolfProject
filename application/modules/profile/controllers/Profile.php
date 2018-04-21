<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author Pimai1SM
 */
class Profile extends MX_Controller {

    private $session_data;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Profile_model');
        $this->session_data = $this->session->logged_in;
    }

    public function index() {
        $this->theme_admin->render('profile_view');
    }

    public function getProfile() {
        $id = $this->input->post('id');
        $work = $this->input->post('work');
        if ($work == 1) {
            $result = $this->Profile_model->getProfileAdmin($id);
        } elseif ($work == 2) {
            $result = $this->Profile_model->getProfileEmp($id);
        } else {
            $result = $this->Profile_model->getProfileMember($id);
        }
        echo json_encode($result);
    }

    public function profileForm() {
        $this->theme_admin->render('profileForm_view');
    }

    public function formSubmit() {
        $id = $this->input->post('id');
        $Password = $this->input->post('Password');
        $data = array(
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'Birthday' => $this->input->post('Birthday'),
            'IdCard' => $this->input->post('IdCard'),
            'Address' => $this->input->post('Address'),
            'Phone' => $this->input->post('Phone')
        );
        if ($this->session_data->work == 2) {
            $result = $this->Profile_model->updateProfileEmp($id,$data,$Password);
        } else {
            $result = $this->Profile_model->updateProfileMember($id,$data,$Password);
        }
        redirect('Profile?id='.$id,'refresh');
    }

}
