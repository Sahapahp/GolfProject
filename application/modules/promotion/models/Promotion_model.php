<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Promotion_model
 *
 * @author Pimai1SM
 */
class Promotion_model extends CI_Model {
    private $db;
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }
    
    public function listPromotion(){
        $this->db->select('*');
        $this->db->from('promotion');
        return $this->db->get()->result();
    }
    
    public function getPromotion($id){
        $this->db->select('*');
        $this->db->from('promotion');
        $this->db->where('IdPro',$id);
        return $this->db->get()->result();
    }
    
    public function addPromotion($data){
        
        return $this->db->insert('promotion',$data);
    }
    
    public function updatePromotion($id,$data){
        $this->db->where('IdPro',$id);
        $this->db->set($data);
        return $this->db->update('promotion');
    }
    
    public function deletePromotion($id){
        $this->db->where('IdPro',$id);
        return $this->db->delete('promotion');
    }
    
}
