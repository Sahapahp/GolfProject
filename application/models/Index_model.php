<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome_model
 *
 * @author Pimai1SM
 */
class Index_model extends CI_Model{
 
    public function __construct() {
        parent::__construct();
    }
    
    public function getPromotion(){
            $this->db->select('*');
            $this->db->from('promotion');
            $this->db->where('`StartDay` <= DATE(now()) AND `EndDay` >= DATE(now())');
            return $this->db->get()->result();
        }
   
}
