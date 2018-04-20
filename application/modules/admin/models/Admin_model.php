<?php 
class Admin_model extends CI_Model {

        public $UserName;
        public $Password;
        

        public function DataAdmin()
        {
                $query = $this->db->get('admin');
                return $query->result();
        }

       /* public function insertAdmin()
        {
                
                $this->UserName  = 'admin9';
                $this->Password  = 'admin9';

                $this->db->insert('Admin', $this);
        }*/

       /* public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }*/
          public function insertAdmin($data,$firtName)
        {
              
                if($this->checkData($firtName) == 0)
            {
               $count = $this->db->insert('admin', $data);
               if($count>0)
               {
                    return true;
               }
               else
               {
                    return false;
               }
           }
           else
           {
                return false;
           }
        }
         public function updateAdmin($data,$id)
        {
            header("location: admin ");
            return $this->db->update('admin', $data,$id);

        }
        public function deleteAdmin($id)
        {
            $this->db->where('IdAdmin',$id);
            $this->db->delete('admin');
            return true;

        }
        public function checkData($data)
        {
                $this->db->select('UserName');
                $this->db->from('admin');
                $this->db->where('UserName = '."'".$data."'");
                
                $query = $this->db->get();

                if ($query->num_rows() > 0) 
                {
                    return true;
                }

                return false;

                

        }

}