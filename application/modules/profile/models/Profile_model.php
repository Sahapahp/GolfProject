<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile_model
 *
 * @author Pimai1SM
 */
class Profile_model extends CI_Model {

    //put your code here
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function getProfileAdmin($id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('IdAdmin', $id);
        return $this->db->get()->result();
    }

    public function getProfileMember($id) {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('IdMem', $id);
        return $this->db->get()->result();
    }

    public function getProfileEmp($id) {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('IdEmp', $id);
        return $this->db->get()->result();
    }

    public function updateProfileEmp($id, $data, $Password) {
        $this->db->where('IdEmp', $id);
        $this->db->set($data);
        if ($Password != "") {
            $this->db->set('Password', $Password);
        }
        $this->db->update('employee');
    }

    public function updateProfileMember($id, $data, $Password) {
        $this->db->where('IdMem', $id);
        $this->db->set($data);
        if ($Password != "") {
            $this->db->set('Password', $Password);
        }
        $this->db->update('member');
    }

}
