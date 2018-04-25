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

    public function getEmp($id) {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('IdEmp', $id);
        return $this->db->get()->result();
    }
    
    

        public function list_Caddy() {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('Position = 1');
        return $this->db->get()->result();
    }

    public function list_priceItem() {
        $this->db->select('*');
        $this->db->from('priceitem');
        return $this->db->get()->result();
    }

    public function list_priceTime() {
        $this->db->select('*');
        $this->db->from('pricetime');
        return $this->db->get()->result();
    }

    public function setPriceTime($data) {
        $this->db->trans_begin();
        for ($i = 0; $i < count($data); $i++) {
            $this->db->where("id", $i + 1);
            $this->db->set("price", $data[$i]);
            $this->db->update('pricetime');
        }
        if ($this->db->trans_status() === FALSE) {
            return $this->db->trans_rollback();
        } else {
            return$this->db->trans_commit();
        }
    }
    
    public function setPriceItem($data) {
        $this->db->where('id',1);
        return $this->db->update('priceitem', $data);
    }
    
    public function workCaddy() {
        $session_data = $this->session->logged_in;
        $query = $this->db->query("SELECT b.`IdBooking`, b.`Hole`, b.`Course`, b.`Person`, b.`DayBook`, b.`Timebook`, b.`CaddyNum`, b.`InsNum`, b.`CarNum`, b.`sumtotal`, b.`BookStatus`, b.`fname`, b.`lname`, b.`Phone`, b.`IdMem`, b.`IdEmp`, b.`IdPro` FROM `workcaddy` w JOIN `booking` b ON b.IdBooking = w.idBooking JOIN employee e on w.idCaddy = e.IdEmp where e.IdEmp = ".$session_data->IdEmp." AND b.`DayBook` >= DATE(now()) ORDER by b.`DayBook`");
        return $query->result();
    }

}
