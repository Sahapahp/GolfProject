<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->helper('url');
    }

    public function index() {
        return $this->showEmployee();
    }

    public function callEmty() {
        return $this->theme_admin->render('emtyAdmin_view');
    }

    public function callshow() {
        return $this->showEmployee();
    }

    public function callEmUse() {
        $this->load->view('employeeUse_view');
    }

    public function callcaddyshow() {
        $data['employee'] = $this->Employee_model->DataCaddy();
        return $this->theme_admin->render('showcaddyForEm_view', $data);
    }

    public function callcaddyUse() {
        return $this->load->view('caddyUse_view');
    }

    public function showEmployee() {
        $data['employee'] = $this->Employee_model->DataEmployee();

        return $this->theme_admin->render('employeeShow_view', $data);
    }

    public function formUpdateEmp() {
        $this->load->view('updateEmp_view');
    }

    public function formUpdateAdd() {
        $this->load->view('updateAdd_view');
    }

    public function formAddEmp() {
        $this->theme_admin->render('addEm_view');
        /* $this->load->view('addEm_view'); */
    }

    public function addEmForAdd() {
        return $this->load->view('adEmAd_view');
    }

    public function validate() {
        $username = $this->input->post('username');
        $data = array(
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'UserName' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'IdCard' => $this->input->post('IdCard'),
            'address' => $this->input->post('address'),
            'birthday' => $this->input->post('birthday'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'Position' => $this->input->post('Position'),
        );
        /* $this->load->model('Employee_model'); */


        if ($this->Employee_model->insertEmp($data, $username)) {
            $this->Alert("เพิ่มสำเร็จ");
            redirect('Employee/callcaddyshow', 'refresh');
            /* $this->showEmployee(); */
        } else {
            $this->Alert("ไม่สามารถเพิ่มได้");
            redirect('Employee/showEmployee', 'refresh');
            /* $this->showEmployee(); */
        }
    }

    public function validateAdd() {
        $username = $this->input->post('username');
        $data = array(
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'UserName' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'IdCard' => $this->input->post('IdCard'),
            'address' => $this->input->post('address'),
            'birthday' => $this->input->post('birthday'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'Position' => $this->input->post('Position'),
        );
        /* $this->load->model('Employee_model'); */


        if ($this->Employee_model->insertEmp($data, $username)) {
            $this->Alert("เพิ่มสำเร็จ");
            redirect('Employee/callshow', 'refresh');
            /* $this->showEmployee(); */
        } else {
            $this->Alert("ไม่สามารถเพิ่มด้");
            redirect('Employee/callshow', 'refresh');
            /* $this->showEmployee(); */
        }
    }

    public function updateEmp() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id = $this->input->post('id');
        $FName = $this->input->post('FName');
        $LName = $this->input->post('LName');
        $Phone = $this->input->post('Phone');
        $Address = $this->input->post('Address');
        $Email = $this->input->post('Email');
        $Position = $this->input->post('Position');
        $OnlineStatus = $this->input->post('OnlineStatus');

        /* echo $FName; */

        $data = array(
            'UserName' => $username,
            'Password' => $password,
            'FName' => $FName,
            'LName' => $LName,
            'Phone' => $Phone,
            'Address' => $Address,
            'Email' => $Email,
            'Position' => $Position,
            'OnlineStatus' => $OnlineStatus,
        );

        $idData = array(
            'IdEmp' => $id
        );
        return $this->Employee_model->updateEmp($data, $idData);
        redirect('Employee/callcaddyshow', 'refresh');
    }

    public function updateAdd() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id = $this->input->post('id');
        $FName = $this->input->post('FName');
        $LName = $this->input->post('LName');
        $Phone = $this->input->post('Phone');
        $Address = $this->input->post('Address');
        $Email = $this->input->post('Email');
        $Position = $this->input->post('Position');
        $OnlineStatus = $this->input->post('OnlineStatus');

        //echo $first_name;

        $data = array(
            'UserName' => $username,
            'Password' => $password,
            'FName' => $FName,
            'LName' => $LName,
            'Phone' => $Phone,
            'Address' => $Address,
            'Email' => $Email,
            'Position' => $Position,
            'OnlineStatus' => $OnlineStatus,
        );

        $idData = array(
            'IdEmp' => $id
        );
        return $this->Employee_model->updateEmp($data, $idData);
        redirect('Employee/callshow', 'refresh');
    }

    public function delete() {
        $this->load->model('Employee_model');

        $id = $this->input->get('id');

        if ($this->Employee_model->deleteEmp($id)) {
            return
                    redirect('Employee/callshow', 'refresh');
        }
    }

//////////////ลบแคดดี้////////////////
    public function deleteEm() {
        $this->load->model('Employee_model');

        $id = $this->input->get('id');

        if ($this->Employee_model->deleteEmp($id)) {
            return
                    redirect('Employee/callcaddyshow', 'refresh');
        }
    }

    public function Alert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

    public function getEmp() {
        $id = $this->input->post('id');
        $result = $this->Employee_model->getEmp($id);
        echo json_encode($result);
    }

    public function price() {
        $this->theme_admin->render('managementPrice');
    }

    public function list_priceItem() {
        $result = $this->Employee_model->list_priceItem();
        echo json_encode($result);
    }

    public function list_priceTime() {
        $result = $this->Employee_model->list_priceTime();
        echo json_encode($result);
    }

    public function setPriceTime() {
        $data = array($this->input->post('A1'),
            $this->input->post('A2'),
            $this->input->post('A3'),
            $this->input->post('A4'),
            $this->input->post('A5'),
            $this->input->post('A6'),
            $this->input->post('A7'),
            $this->input->post('A8'),
            $this->input->post('A9'),
            $this->input->post('A10'),
            $this->input->post('A11'),
            $this->input->post('A12')
        );
        $result = $this->Employee_model->setPriceTime($data);
        echo json_encode($result);
    }
    
    public function setPriceItem() {
        $data = array(
            'priceMember' =>$this->input->post('A1'),
            'priceCaddy'=>$this->input->post('A2'),
            'priceIns'=>$this->input->post('A3'),
            'priceCar'=>$this->input->post('A4')
        );
        $result = $this->Employee_model->setPriceItem($data);
        echo json_encode($result);
    }
    
    public function list_Caddy(){
        $result = $this->Employee_model->list_Caddy();
        echo json_encode($result);
    }
    
    public function workCaddy(){
        $result['Caddy'] = $this->Employee_model->workCaddy();
        $this->theme_admin->render('workCaddy_view', $result);
//        echo json_encode($result);
    }
    
    public function printCaddy(){
        $result['caddy'] = $this->Employee_model->DataCaddy();
        $this->load->view('printCaddy_view',$result);
    }

}
