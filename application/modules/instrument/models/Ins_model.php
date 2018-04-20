<?php 
class Ins_model extends CI_Model{
	
	public function insertIns($data)
        {
               return $this->db->insert('instrument', $data);
        }

         public function DataIns()
        {
                
            $query = $this->db->query('SELECT IdIns,NameIns,typeIns FROM instrument');
            return $query->result();
           
            
        }
        public function deleteIns($id)
        {
            $this->db->where('IdIns',$id);
            $this->db->delete('instrument');
            return true;

        }

        public function updateIns($data,$id)
        {
            header("location: Instrument ");
            $this->db->where($id);
            return $this->db->update('Instrument', $data);
           

        }
}