<?php 
class Regis_model extends CI_Model {

        public $UserName;
        public $Password;
        

        
       /* public function insertAdmin()
        {
                
                $this->UserName  = 'admin9';
                $this->Password  = 'admin9';

                $this->db->insert('Admin', $this);
        }*/

        
          public function insertMember($data)
        {
               return $this->db->insert('member', $data);
        }

}