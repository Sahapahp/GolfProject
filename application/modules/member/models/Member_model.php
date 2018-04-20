<?php 
class Member_model extends CI_Model{
	
	public function insertMem($data)
        {
               return $this->db->insert('member', $data);
        }

         public function DataMem()
        {
                
            $query = $this->db->query('SELECT IdMem,UserName,Password,FName,LName,MemPos FROM member');
            return $query->result();
           
            
        }

        public function updateMem($data,$id)
        {
//            header("location: Member ");
            return $this->db->update('member', $data,$id);
//            redirect('Member/showMem','refresh');

        }
         public function deleteMem($id)
        {
            $this->db->where('IdMem',$id);
            $this->db->delete('member');
            return true;

        }

        public function dataPerson()
        {
             $this->db->select('*');
            $this->db->from('member');
            $this->db->where('IdMem =');
            $this->db->limit(1);
            $query = $this->db->get();

             if ($query->num_rows() == 1)
            return $query->result();

             return false;

        }
        public function getMember($id){
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where('IdMem',$id);
            return $this->db->get()->result();
        }
        
}