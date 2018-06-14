<?php 
class Regis_model extends CI_Model {

        public $UserName;
        public $Password;
        
          public function insertMember($data)
        {
               $this->db->set('cr_date','now()',false);
               return $this->db->insert('member', $data);
        }
        public function get_Member($UserName)
        {
               $this->db->select('*');
               $this->db->from('Member');
               $this->db->where('UserName',$UserName);
               return $this->db->get()->result();
        }
        public function get_maxID()
        {
               $this->db->select('max(`IdMem`) as maxID');
               $this->db->from('Member');
               return $this->db->get()->result();
        }
        
         public function update_mempos($id)
        {
               $this->db->set('MemPos','1');
               $this->db->where('IdMem',$id);
               return $this->db->update('member');
        }
}