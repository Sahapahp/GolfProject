<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instrument extends MX_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('Ins_model');
        $this->load->helper('url');
    }

    public function index() {
        return $this->showIns();
    }
    public function callShow()
    {
        return $this->showIns();
    }
    public function insshowEm()
    {
        $data['Instrument'] = $this->Ins_model->DataIns();
      return  $this->load->view('insshowem_view',$data);
        //$this->theme_admin->render('employee_view');
    }

    public function showIns()
    {
        $data['Instrument'] = $this->Ins_model->DataIns();
      return  $this->load->view('InsShow_view',$data);
        //$this->theme_admin->render('employee_view');
    }
    public function formAddIns(){

        return $this->load->view('addIns_view');
         /*return $this->theme_admin->render('addIns_view');*/
    }

     public function formUpdate(){

        
         return $this->load->view('editIns_view');
    }

    public function formPrice(){

        
         return $this->load->view('addPrice_view');
    }

    public function validate()
    {
        $data = array(
            'IdIns'     => $this->input->post('IdIns'),
            'NameIns'     => $this->input->post('InsName'),
            'typeIns'     =>  $this->input->post('typeIns'),
            
        );
       $this->Ins_model->insertIns($data);
       redirect('Instrument/insshowEm','refresh');

    }
    public function delete()
    {
        $this->load->model('Ins_model');

        $id = $this->input->get('id');

        if($this->Ins_model->deleteIns($id))
        {
            redirect('Instrument/insshowem','refresh');
        }
    }

     public function update()
    {
           
            $id = $this->input->post('id');
            $InsName = $this->input->post('InsName');
            $Type = $this->input->post('InsType');
            
           

            /*echo $InsName;*/

            $data = array(
                'NameIns'     => $InsName,
                'typeIns'     => $Type
            );

            $idData = array(
                'IdIns' => $id
            );
            echo $this->Ins_model->updateIns($data,$idData);
            echo json_encode($data);
           redirect('Instrument','refresh');
    }
}