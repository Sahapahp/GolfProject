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

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Profile_model');
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
        } else{
            $result = $this->Profile_model->getProfileMember($id);
        }
        echo json_encode($result);
    }

}
