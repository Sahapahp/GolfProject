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
      return  $this->theme_admin->render('insshowem_view',$data);
    }

    public function showIns()
    {
        $data['Instrument'] = $this->Ins_model->DataIns();
      return  $this->theme_admin->render('InsShow_view',$data);
        //$this->theme_admin->render('employee_view');
    }
    
    public function rentInstrument()
    {
        $data['rent'] = $this->Ins_model->list_rentInstrument();
      return  $this->theme_admin->render('rentIns_view',$data);
    }
    public function listIns()
    {
        $data = $this->Ins_model->listIns();
        echo json_encode($data);
    }
    public function listCar()
    {
        $data = $this->Ins_model->listCar();
      echo json_encode($data);
    }
    public function formRent()
    {
      return  $this->theme_admin->render('formRent_view');
    }
    
    public function formAddIns(){

        return $this->theme_admin->render('addIns_view');
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
    
    public function validate_rent()
    {
        $idBooking = $this->input->post('booking');
        $insNum = $this->input->post('instrument');
        $arrayIns = array();
        for($i=1;$i<=$insNum;$i++){
             array_push($arrayIns, $this->input->post("selectIns$i"));
        }
        $car = $this->input->post('car');
        for($i=1;$i<=$car;$i++){
             array_push($arrayIns, $this->input->post("selectCar$i"));
        }
//        echo json_encode($arrayIns);
       $this->Ins_model->insertRent($idBooking,$arrayIns);
       redirect('Instrument/rentInstrument','refresh');

    }
    
    public function returnIns()
    {
       $id = $this->input->post('id');
       return $this->Ins_model->returnIns($id);

    }
    public function getInsRent()
    {
       $id = $this->input->post('id');
       $result = $this->Ins_model->getInsRent($id);
       echo json_encode($result);
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