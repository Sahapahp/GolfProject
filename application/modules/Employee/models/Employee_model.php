<?php

class Employee_model extends CI_Model {

   
    public function insertEmp($data, $username) {
        if ($this->checkData($username) == 0) {
            $count = $this->db->insert('employee', $data);
            if ($count > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function DataEmployee() {
        //$query = $this->db->get('admin');
        //return $query->result();

        $query = $this->db->query('SELECT IdEmp,UserName,Password,FName,LName,Position,OnlineStatus FROM employee');
        return $query->result();
    }

    public function DataCaddy() {
        //$query = $this->db->get('admin');
        //return $query->result();

        $query = $this->db->query('SELECT IdEmp,UserName,Password,FName,LName,Position,OnlineStatus FROM employee where Position=1');
        return $query->result();
    }

    public function updateEmp($data, $id) {
        header("location: callcaddyshow ");
        $this->db->update('employee', $data, $id);
    }

    public function deleteEmp($id) {
        $this->db->where('IdEmp', $id);
        $this->db->delete('employee');
        return true;
    }

    public function checkData($data) {
        $this->db->select('IdEmp');
        $this->db->from('employee');
        $this->db->where('IdEmp = ' . "'" . $data . "'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return true;
        }

        return false;
    }
    
    public function getEmp($id){
            $this->db->select('*');
            $this->db->from('employee');
            $this->db->where('IdEmp',$id);
            return $this->db->get()->result();
        }

}
