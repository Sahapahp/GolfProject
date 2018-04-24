<?php

class Booking_model extends CI_Model {

    public function insertBooking($data,$caddy) {
        $this->db->trans_begin();
        $session_data = $this->session->logged_in;
        if ($session_data->work == 3) {
            $this->db->set('IdMem', $session_data->IdMem);
        }else if ($session_data->work == 2){
            $this->db->set('IdEmp', $session_data->IdEmp);
        }
        $this->db->insert('booking', $data);
        
        for($j=1;$j<=count($caddy);$j++){
            $this->db->query("INSERT INTO `workcaddy` (`id`,`idCaddy`, `idBooking`) VALUES ('','".$caddy[$j-1]."', (SELECT MAX(`IdBooking`) FROM `booking` limit 1))");
        }
//        return $result;
        if ($this->db->trans_status() === FALSE) {
            return $this->db->trans_rollback();
        } else {
            return$this->db->trans_commit();
        }
    }
//    private $query;
//    public function maxBooking(){
//        $this->query = $this->db->query("SELECT MAX(`IdBooking`) FROM `booking` limit 1");
//        
//    }

    public function DataBooking() {
        $session_data = $this->session->logged_in;
        $this->db->select('*');
        $this->db->from('booking');
        if ($session_data->work == 3) {
            $this->db->where('IdMem', $session_data->IdMem);
        }
        $this->db->where('`DayBook`>=now()');
        return $this->db->get()->result();
    }

    public function updateBooking() {

        return $this->db->update('employee', $this, array('IdEmp' => $_POST['IdEmp']));
    }

    public function deleteBooking($id) {
        $this->db->where('IdBooking', $id);
        $this->db->delete('booking');
        return true;
    }

    public function dataPrice() {
        //$query = $this->db->get('admin');
        //return $query->result();

        $query = $this->db->query('SELECT * FROM booking');
        return $query->result();
    }
    public function get_Booking($id) {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where("IdBooking = $id");
        return $this->db->get()->result();
    }

}
