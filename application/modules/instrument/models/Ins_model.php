<?php

class Ins_model extends CI_Model {

    public function insertIns($data) {
        return $this->db->insert('instrument', $data);
    }

    public function insertRent($idBooking, $arrayIns) {
        $this->db->trans_begin();
        
        for ($i = 0; $i < count($arrayIns); $i++) {
            $this->db->insert('rent_ins', array('id_Booking' => $idBooking, 'id_ins' => $arrayIns[$i]));
        }
        $this->db->set('using_status', '1', FALSE);
        $this->db->where('IdBooking', $idBooking);
        $this->db->update('booking');
        if ($this->db->trans_status() === FALSE) {
            return $this->db->trans_rollback();
        } else {
            return$this->db->trans_commit();
        }
    }

    public function returnIns($id) {
        $this->db->set('status_rent','1');
        $this->db->where('IdBooking',$id);
       return $this->db->update('booking');
    }
    
    public function getInsRent($id) {
        $this->db->select('IdIns,NameIns,typeIns');
        $this->db->from('rent_ins');
        $this->db->join('instrument','rent_ins.id_ins = instrument.IdIns');
        $this->db->where('rent_ins.id_Booking', $id);
        return $this->db->get()->result();
    }
    
    public function DataIns() {
        $query = $this->db->query('SELECT IdIns,NameIns,typeIns FROM instrument');
        return $query->result();
    }

    public function listIns() {
        $this->db->select('*');
        $this->db->from('instrument');
        $this->db->where('typeIns', '0');
        return $this->db->get()->result();
    }

    public function listCar() {
        $this->db->select('*');
        $this->db->from('instrument');
        $this->db->where('typeIns', '1');
        return $this->db->get()->result();
    }

    public function list_rentInstrument() {

        $query = $this->db->query('SELECT `IdBooking`,`fname`,`lname`,`InsNum`,`CarNum`,`status_rent`,`DayBook` FROM booking b JOIN rent_ins r on IdBooking = id_Booking GROUP by `IdBooking` ORDER BY `IdBooking` DESC');
        return $query->result();
    }

    public function deleteIns($id) {
        $this->db->where('IdIns', $id);
        $this->db->delete('instrument');
        return true;
    }

    public function updateIns($data, $id) {
        header("location: Instrument ");
        $this->db->where($id);
        return $this->db->update('Instrument', $data);
    }

}
