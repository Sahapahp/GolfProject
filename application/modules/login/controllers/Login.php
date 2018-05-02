<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends MX_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('login_model');
        $this->load->helper('security');
        $this->load->helper('url');
        $this->load->model('Login_model');
    }

    //=============================================================================
    //  Login View
    //=============================================================================


    public function loginAll() {
        $session_data = $this->session->logged_in;
        if ($session_data) {
            if ($session_data->work == 3) {
                return redirect('/Member/callmemberuse', 'refresh');
            } elseif ($session_data->work == 2) {
                return redirect('/Member/callemtyEm', 'refresh');
            } else {
                return redirect('/Employee/callEmty', 'refresh');
            }
        } else {
            return $this->load_view('loginMem_view', array(
                        'title' => 'Login'
            ));
        }
    }

    //=============================================================================
    //  Login
    //=============================================================================

    public function Member_login_process() {
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
        $this->session->set_flashdata('error', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');

        if ($this->form_validation->run() === false)
            return redirect('/Login/loginAll', 'refresh');

        $result = $this->login_model->loginAll(array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ));

        if ($result === false)
            return redirect('/Login/loginAll', 'refresh');

        $session_data = $result[0];
        $this->session->set_userdata('logged_in', $session_data);


//        echo json_encode($this->session->logged_in) ;
        /* echo $session_data->work; */

        /* echo '<pre>';
          var_dump($session_data); */
        
        if ($session_data->work == 3) {
            $this->login_model->insertHistory();
            return redirect('/Member/callmemberuse', 'refresh');
        } elseif ($session_data->work == 2) {
            $this->login_model->insertHistory();
            return redirect('/Member/callemtyEm', 'refresh');
        } else
            $this->login_model->insertHistory();
        return redirect('/Employee/callEmty', 'refresh');

        // return redirect('/member/callmemberuse', 'refresh');
    }

    //=============================================================================
    //  Logout
    //=============================================================================
    public function logout() {
        $sess_array = array(
            'username' => ''
        );
//        $this->session->set_userdata('logged_in', $sess_array);
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';

        return redirect('', 'refresh');
    }

    public function load_view($view_name = '', $data = array()) {
        $this->load->view('header', $data);
        $this->load->view($view_name, $data);
        $this->load->view('footer');
    }

}

?>