<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->helper('url');
        $session_data = $this->session->logged_in;
        if ($session_data->work == null) {
            redirect(base_url(), 'refresh');
        }
    }

    public function index() {
        $data['booking'] = $this->Booking_model->DataBooking();
        return $this->theme_admin->render('bookshowem_view', $data);
    }

    public function callShow() {
        $this->showBooking();
    }

    public function callbookForm() {
        $this->load->view('bookForm_view');
    }

    public function bookForm() {
        $this->load->view('bookForm_view');
    }

    public function bookSHowEm() {
        $data['booking'] = $this->Booking_model->DataBooking();
        return $this->theme_admin->render('bookshowem_view', $data);
    }

    public function showBooking() {
        $data['booking'] = $this->Booking_model->DataBooking();

        $this->load->view('bookShow_view', $data);
    }

    public function formAddBook() {
        /* return $this->theme_admin->render('addbook_view'); */

       

        $dataSum = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'Timebook' => $this->input->post('Timebook'),
            'Course' => $this->input->post('Course'),
            'Person' => $this->input->post('Person'),
            'CaddyNum' => $this->input->post('CaddyNum'),
            'CarNum' => $this->input->post('CarNum'),
            'InsNum' => $this->input->post('InsNum'),
        );

        $dataB = $this->Booking_model->dataPrice();

        return $this->theme_admin->render('addbook_view', $dataB[0]);
    }

    public function validate() {
        $numCaddy = $this->input->post('CaddyNum');
        $caddy = array();
        for($i=1;$i<=$numCaddy;$i++){
             array_push($caddy, $this->input->post("selectCaddy$i"));
        }
        echo json_encode($caddy);
        $data = array(
            'DayBook' => $this->input->post('DayBook'),
            'Hole' => $this->input->post('Hole'),
            'Timebook' => $this->input->post('Timebook'),
            'Course' => $this->input->post('Course'),
            'Person' => $this->input->post('Person'),
            'CaddyNum' => $this->input->post('CaddyNum'),
            'CarNum' => $this->input->post('CarNum'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'Phone' => $this->input->post('Phone'),
            'sumtotal' => $this->input->post('sumTotal'),
            'BookStatus' => $this->input->post('pay')
        );
        /* $this->load->model('Employee_model'); */
        $result = $this->Booking_model->insertBooking($data,$caddy);
        echo json_encode($result);
        redirect('Booking/bookSHowEm','refresh');
    }

    public function validateForm() {

        $this->session->set_flashdata('done', 'จองสำเร็จแล้ว');

        $data = array(
            'DayBook' => $this->input->post('DayBook'),
            'Hole' => $this->input->post('Hole'),
            'Timebook' => $this->input->post('Timebook'),
            'Course' => $this->input->post('Course'),
            'Person' => $this->input->post('Person'),
            'CaddyNum' => $this->input->post('CaddyNum'),
            'CarNum' => $this->input->post('CarNum'),
            'InsNum' => $this->input->post('InsNum'),
        );
        /* $this->load->model('Employee_model'); */
        $this->Booking_model->insertBooking($data);
        redirect('Booking/callbookForm', 'refresh');
    }

    /* public function update()
      {
      /* $this->title    = $_POST['title'];
      $this->content  = $_POST['content']; */
    /* $data = array(
      'IdEmp'     => $this->input->post('Id'),
      'FName'     => $this->input->post('FName'),
      'LName'     =>  $this->input->post('LName'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),

      );
      $this->Employee_model->updateEm($data); */




    /* } */

    public function callEdit() {
        $this->load->view('editbook_view');
    }

    public function delete() {


        $id = $this->input->get('id');

        if ($this->Booking_model->deleteBooking($id)) {
            return
                    redirect('Booking/bookShowEm', 'refresh');
        }
    }

    public function get_Booking() {
        $id = $this->input->post('id');
        $result = $this->Booking_model->get_Booking($id);
        echo json_encode($result);
    }

}
