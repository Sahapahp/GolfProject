<?php

class Booking_model extends CI_Model {

    public function insertBooking($data) {
        $session_data = $this->session->logged_in;
        if ($session_data->work == 3) {
            $this->db->set('IdMem', $session_data->IdMem);
        }else if ($session_data->work == 2){
            $this->db->set('IdEmp', $session_data->IdEmp);
        }
        return $this->db->insert('booking', $data);
    }

    public function DataBooking() {
        $session_data = $this->session->logged_in;
        $this->db->select('*');
        $this->db->from('booking');
        if ($session_data->work == 3) {
            $this->db->where('IdMem', $session_data->IdMem);
        }

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

        $query = $this->db->query('SELECT PricePerson,PriceCaddy,PriceCar,PriceIns FROM booking');
        return $query->result();
    }

}
