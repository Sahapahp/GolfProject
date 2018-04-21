<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends MX_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->helper('url');
    }

    public function index() {
        $this->theme_admin->render('book_view');
    }

    public function callShow()
    {
        $this->showBooking();
    }
     public function callbookForm()
    {
        $this->load->view('bookForm_view');
    }

     public function bookForm()
    {
        $this->load->view('bookForm_view');
    }

     public function bookSHowEm()
    {
        $data['booking'] = $this->Booking_model->DataBooking();
       return $this->theme_admin->render('bookshowem_view',$data);
    }


    public function showBooking()
    {
        $data['booking'] = $this->Booking_model->DataBooking();

        $this->load->view('bookShow_view',$data);
        
        

    }

    
    public function formAddBook(){
       /*return $this->theme_admin->render('addbook_view');*/


        $dataSum= array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'Timebook' => $this->input->post('Timebook'),
            'Course' => $this->input->post('Course'),
            'Person'    =>$this->input->post('Person'),
            'CaddyNum'    =>$this->input->post('CaddyNum'),
            'CarNum'    =>$this->input->post('CarNum'),
            'InsNum'    =>$this->input->post('InsNum'),
            );

           $dataB=$this->Booking_model->dataPrice();

           return $this->load->view('addbook_view', $dataB[0]);

    }


    public function validate()
    {
        $data = array(
            'DayBook'     => $this->input->post('DayBook'),
            'Hole'     =>  $this->input->post('Hole'),
            'Timebook' => $this->input->post('Timebook'),
            'Course' => $this->input->post('Course'),
            'Person'    =>$this->input->post('Person'),
            'CaddyNum'    =>$this->input->post('CaddyNum'),
            'CarNum'    =>$this->input->post('CarNum'),
            'fname'    =>$this->input->post('fname'),
            'lname'    =>$this->input->post('lname'),
            'Phone'    =>$this->input->post('Phone'),
           

            
        );
        /*$this->load->model('Employee_model');*/
         $this->Booking_model->insertBooking($data);
        redirect('Booking/bookSHowEm','refresh');


    }

     public function validateForm()
    {

        $this->session->set_flashdata('done', 'จองสำเร็จแล้ว');

        $data = array(
            'DayBook'     => $this->input->post('DayBook'),
            'Hole'     =>  $this->input->post('Hole'),
            'Timebook' => $this->input->post('Timebook'),
            'Course' => $this->input->post('Course'),
            'Person'    =>$this->input->post('Person'),
            'CaddyNum'    =>$this->input->post('CaddyNum'),
            'CarNum'    =>$this->input->post('CarNum'),
            'InsNum'    =>$this->input->post('InsNum'),

            
        );
        /*$this->load->model('Employee_model');*/
         $this->Booking_model->insertBooking($data);
        redirect('Booking/callbookForm','refresh');


    }

    /*public function update()
        {
               /* $this->title    = $_POST['title'];
               $this->content  = $_POST['content'];*/
              /* $data = array(
                'IdEmp'     => $this->input->post('Id'),
                'FName'     => $this->input->post('FName'),
                'LName'     =>  $this->input->post('LName'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                
            );
               $this->Employee_model->updateEm($data);*/




           /*}*/

    public function callEdit(){
            $this->load->view('editbook_view');
        }
    public function delete()
        {
            $this->load->model('booking_model');

            $id = $this->input->get('id');

            if($this->booking_model->deleteBooking($id))
            {
                return
                redirect('Booking/bookShowEm','refresh');
            }
        }



    }
    
    



