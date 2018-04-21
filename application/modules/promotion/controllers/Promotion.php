<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Promotion
 *
 * @author Pimai1SM
 */
class Promotion extends MX_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Promotion_model');
    }

    public function index() {
        $this->theme_admin->render('promotion_view');
    }

    public function listPromotion() {
        $result = $this->Promotion_model->listPromotion();
        echo json_encode($result);
    }
    public function getPromotion() {
        $id = $this->input->post('id');
        $result = $this->Promotion_model->getPromotion($id);
        echo json_encode($result);
    }

    public function openForm() {
        $this->theme_admin->render('formPromotion_view');
    }

    public function FormSubmit() {

        $data = array(
            'namePro' => $this->input->post('namePro'),
            'DisPrice' => $this->input->post('price'),
            'StartDay' => $this->input->post('startDay'),
            'EndDay' => $this->input->post('endDay')
        );
        $id = $this->input->post('id');
        if ($id == '') {
            $result = $this->Promotion_model->addPromotion($data);
            echo $result;
        } else {
            $result = $this->Promotion_model->updatePromotion($id,$data);
            echo $result;
        }
        $this->index();
    }
    
    public function deletePromotion(){
        $id = $this->input->post('id');
        $result = $this->Promotion_model->deletePromotion($id);
        echo $result;
    }

}
