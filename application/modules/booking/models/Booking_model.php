<?php

class Booking_model extends CI_Model {

    public function insertBooking($data, $caddy) {
        $this->db->trans_begin();
        $session_data = $this->session->logged_in;
        if ($session_data->work == 3) {
            $this->db->set('IdMem', $session_data->IdMem);
        } else if ($session_data->work == 2) {
            $this->db->set('IdEmp', $session_data->IdEmp);
        }
        $this->db->set('dateAdd', 'now()', FALSE);
        $this->db->set('dateUpdate', 'now()', FALSE);
        $this->db->insert('booking', $data);

        for ($j = 1; $j <= count($caddy); $j++) {
            $this->db->query("INSERT INTO `workcaddy` (`id`,`idCaddy`, `idBooking`) VALUES ('','" . $caddy[$j - 1] . "', (SELECT MAX(`IdBooking`) FROM `booking` limit 1))");
        }
//        return $result;
        if ($this->db->trans_status() === FALSE) {
            return $this->db->trans_rollback();
        } else {
            return$this->db->trans_commit();
        }
    }

    public function updateBooking($id, $data) {
        $this->db->trans_begin();
        $session_data = $this->session->logged_in;
        if ($session_data->work == 2) {
            $this->db->set('IdEmp', $session_data->IdEmp);
        }
        $this->db->set('dateUpdate', 'now()', FALSE);
        $this->db->where('IdBooking', $id);
        $this->db->update('booking', $data);

//        return $result;
        if ($this->db->trans_status() === FALSE) {
            return $this->db->trans_rollback();
        } else {
            return$this->db->trans_commit();
        }
    }

    public function DataBooking() {
        $session_data = $this->session->logged_in;
        $this->db->select('*');
        $this->db->from('booking');
        if ($session_data->work == 3) {
            $this->db->where('IdMem', $session_data->IdMem);
        }
//        $this->db->where('delete_status', '0');
        $this->db->where('`DayBook`>=DATE(now())');
        $this->db->where('DATE_ADD(`dateAdd`, INTERVAL 1 DAY)>=now()');
        return $this->db->get()->result();
    }

    public function printBooking() {
        $this->db->select('*');
        $this->db->from('booking');
        return $this->db->get()->result();
    }

    public function listBooking_status() {

        $query = $this->db->query('SELECT `IdBooking`,`Person`,`DayBook`,`CaddyNum`,`InsNum`,`CarNum`,`fname`,`lname` FROM `booking` b LEFT JOIN rent_ins r on b.`IdBooking` = r.id_Booking where (`DayBook` =DATE(now()) AND r.id_Booking IS null) AND b.BookStatus = 1');
        return $query->result();
    }
    
    public function Booking_checkin() {

        $query = $this->db->query('SELECT `IdBooking`,`Person`,`DayBook`,`CaddyNum`,`InsNum`,`CarNum`,`fname`,`lname` FROM `booking` b LEFT JOIN rent_ins r on b.`IdBooking` = r.id_Booking where `DayBook` =DATE(now()) AND r.id_Booking IS null');
        return $query->result();
    }

    public function historyBooking() {
        $session_data = $this->session->logged_in;
        $this->db->select('*');
        $this->db->from('booking');
        if ($session_data->work == 3) {
            $this->db->where('IdMem', $session_data->IdMem);
        }
        $this->db->where('(`DayBook`<DATE(now()) or delete_status = 1 or DATE_ADD(`dateAdd`, INTERVAL 1 DAY)<now())');
        $this->db->order_by('IdBooking', 'DESC');
        return $this->db->get()->result();
    }

    public function deleteBooking($id) {
        $this->db->trans_begin();

        $this->db->set('delete_status', '1');
        $this->db->where('IdBooking', $id);
        $this->db->update('booking');

        $this->db->where('IdBooking', $id);
        $this->db->delete('workcaddy');

        if ($this->db->trans_status() === FALSE) {
            return $this->db->trans_rollback();
        } else {
            return$this->db->trans_commit();
        }
    }

    public function dataPrice() {
        $query = $this->db->query('SELECT * FROM booking');
        return $query->result();
    }

    public function get_Booking($id) {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where("IdBooking = $id");
        return $this->db->get()->result();
    }

    public function check_Booking($datePlay, $timeplay, $hole, $course) {
        $this->db->select('*');
        $this->db->from('booking');
        if ($hole == 9) {
            $this->db->where(" ((`DayBook` = '$datePlay' and `Timebook` = '$timeplay' and `Course` = '$course') or (`DayBook` = '$datePlay' and `Hole` = 1)) and delete_status = 0");
        } else if ($hole == 18){
            $this->db->where(" ((`DayBook` = '$datePlay' and `Timebook` = '$timeplay') or (`DayBook` = '$datePlay' and `Hole` = 1)) and delete_status = 0");
        }else{
            $this->db->where("`DayBook` = '$datePlay' ");
        }
//        $this->db->where('`DayBook` > date(now())');
        return $this->db->get()->result();
    }

    public function paySuccessful($id) {
        $this->db->set('BookStatus', '1');
        $this->db->where('IdBooking', $id);
        return $this->db->update('booking');
    }
    
    public function getCaddyBooking($id) {
        $this->db->select('*');
        $this->db->from('workcaddy');
        $this->db->join('employee',"workcaddy.idCaddy = employee.IdEmp");
        $this->db->where("idBooking = $id");
        return $this->db->get()->result();
    }

}
