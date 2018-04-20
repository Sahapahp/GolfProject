<?php 
class Booking_model extends CI_Model {

        

       
          public function insertBooking($data)
        {
               return $this->db->insert('booking', $data);
        }

        public function DataBooking()
        {
                //$query = $this->db->get('admin');
                //return $query->result();

            $query = $this->db->query('SELECT IdBooking,fname,lname,Phone,Hole,Course,DayBook,Timebook,InsNum,CarNum,CaddyNum FROM booking');
            return $query->result();
           
            
        }
       
         public function updateBooking()
        {
                       
                return $this->db->update('employee', $this, array('IdEmp' => $_POST['IdEmp']));
        }
        public function deleteBooking($id)
        {
            $this->db->where('IdBooking',$id);
            $this->db->delete('booking');
            return true;

        }

        public function dataPrice()
        {
                //$query = $this->db->get('admin');
                //return $query->result();

            $query = $this->db->query('SELECT PricePerson,PriceCaddy,PriceCar,PriceIns FROM booking');
            return $query->result();
           
            
        }




}