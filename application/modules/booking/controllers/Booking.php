<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->helper('url');
        $this->load->library('email'); 
    }

    public function check_permission(){
        $session_data = $this->session->logged_in;
        if ($session_data->work == null) {
            redirect(base_url(), 'refresh');
        }
    }


    public function index() {
        $this->check_permission();
        $data['booking'] = $this->Booking_model->DataBooking();
        return $this->theme_admin->render('bookshowem_view', $data);
    }

    public function callShow() {
        $this->showBooking();
    }

    public function callbookForm() {
        $this->check_permission();
        $this->load->view('bookForm_view');
    }

    public function bookForm() {
        $this->check_permission();
        $this->load->view('bookForm_view');
    }

    public function bookSHowEm() {
        $this->check_permission();
        $data['booking'] = $this->Booking_model->DataBooking();
        return $this->theme_admin->render('bookshowem_view', $data);
    }

    public function showBooking() {
        $this->check_permission();
        $data['booking'] = $this->Booking_model->DataBooking();

        $this->load->view('bookShow_view', $data);
    }

    public function formAddBook() {
        $this->check_permission();
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
        $this->check_permission();
        $numCaddy = $this->input->post('CaddyNum');
        $id = $this->input->post('id');
        $caddy = array();
        for ($i = 1; $i <= $numCaddy; $i++) {
            array_push($caddy, $this->input->post("selectCaddy$i"));
        }
        echo json_encode($caddy);


        /* $this->load->model('Employee_model'); */
        if ($id == "") {
            $data = array(
                'DayBook' => $this->input->post('DayBook'),
                'Hole' => $this->input->post('Hole'),
                'Timebook' => $this->input->post('Timebook'),
                'Course' => $this->input->post('Course'),
                'Person' => $this->input->post('Person'),
                'CaddyNum' => $this->input->post('CaddyNum'),
                'CarNum' => $this->input->post('CarNum'),
                'InsNum' => $this->input->post('InsNum'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'Phone' => $this->input->post('Phone'),
                'discount' => $this->input->post('discount'),
                'sumtotal' => $this->input->post('sumTotal'),
                'BookStatus' => $this->input->post('pay')
            );
            echo json_encode($data);
            $result = $this->Booking_model->insertBooking($data, $caddy);
        } else {
            $data = array(
                'DayBook' => $this->input->post('DayBook'),
                'Hole' => $this->input->post('Hole'),
                'Timebook' => $this->input->post('Timebook'),
                'Course' => $this->input->post('Course'),
                'Person' => $this->input->post('Person'),
                'CaddyNum' => $this->input->post('CaddyNum'),
                'CarNum' => $this->input->post('CarNum'),
                'InsNum' => $this->input->post('InsNum'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'Phone' => $this->input->post('Phone'),
                'sumtotal' => $this->input->post('sumTotal'),
                'BookStatus' => $this->input->post('pay')
            );
            $result = $this->Booking_model->updateBooking($id, $data);
        }

        echo json_encode($result);
        redirect('Booking/bookSHowEm', 'refresh');
    }

    public function validateForm() {
        $this->check_permission();

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
        $this->check_permission();
        $this->load->view('editbook_view');
    }

    public function delete() {
        $this->check_permission();
        $id = $this->input->get('id');
        if ($this->Booking_model->deleteBooking($id)) {
            return redirect('Booking/bookShowEm', 'refresh');
        }
    }

    public function list_Booking() {
        $this->check_permission();
        $result = $this->Booking_model->listBooking_status();
        echo json_encode($result);
    }

    public function get_Booking() {
        $this->check_permission();
        $id = $this->input->post('id');
        $result = $this->Booking_model->get_Booking($id);
        echo json_encode($result);
    }

    public function historyBooking() {
        $this->check_permission();
        $result['booking'] = $this->Booking_model->historyBooking();
        $this->theme_admin->render('historyBooking_view', $result);
    }

    public function printBooking() {
        $this->check_permission();
        $result['booking'] = $this->Booking_model->printBooking();
        $this->load->view('printBooking_view', $result);
    }

    public function printDetail() {
        $this->check_permission();
        $this->load->view('printDetail_view');
    }

    public function paySuccessful() {
        $this->load->view('payment-successful');
        
    }

    public function payCancel() {
        $this->load->view('payment-cancelled');
    }

    public function check_Booking() {
        $this->check_permission();
        $datePlay = $this->input->post('datePlay');
        $timeplay = $this->input->post('timeplay');
        $hole = $this->input->post('hole');
        $course = $this->input->post('course');
        $result1 = $this->Booking_model->check_Booking($datePlay, $timeplay,$hole,$course);
        $result2 = $this->Booking_model->count_Booking($datePlay, $timeplay,$hole,$course);
        $data = array($result1,$result2);
        echo json_encode($data);
    }
    
//    public function count_Booking() {
//        $this->check_permission();
//        $datePlay = $this->input->post('datePlay');
//        $timeplay = $this->input->post('timeplay');
//        $hole = $this->input->post('hole');
//        $course = $this->input->post('course');
//        $result = $this->Booking_model->count_Booking($datePlay, $timeplay,$hole,$course);
//        echo json_encode($result);
//    }
    
    public function check_course() {
        $this->check_permission();
        $datePlay = $this->input->post('datePlay');
        $timeplay = $this->input->post('timeplay');
        $hole = $this->input->post('hole');
        $course = $this->input->post('course');
        $result = $this->Booking_model->check_course($datePlay, $timeplay,$hole,$course);
        echo json_encode($result);
    }

    public function usingHistory() {
        $this->check_permission();
        $result['booking'] = $this->Booking_model->historyBooking();
        $this->theme_admin->render('history_view', $result);
    }

    public function setBookingStatus() {
        $this->check_permission();
        $id = $this->input->post('id');
        $result = $this->Booking_model->paySuccessful($id);
        echo print_r($result);
//        return redirect('Booking/bookShowEm', 'refresh');
    }
    
     public function getCaddyBooking() {
        $this->check_permission();
        $id = $this->input->post('id');
        $result = $this->Booking_model->getCaddyBooking($id);
        echo json_encode($result);
    }
    
    public function Booking_checkin() {
        $this->check_permission();
        $result = $this->Booking_model->Booking_checkin();
        echo json_encode($result);
    }
    
    public function getBooking(){
        $id = $this->input->post('id');
        $result = $this->Booking_model->getBooking($id);
        echo json_encode($result);
    }
}
