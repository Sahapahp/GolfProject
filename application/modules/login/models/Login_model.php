<?php

/**
 * @author Anupam Oza <anupamoza90@gmail.com>
 * @copyright (c) 2017, Anupam Oza
 * @link http://localhost/login/
 */
Class Login_Model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $this->db->select('*');
        $this->db->from('admin ');
        $this->db->where("UserName = '$username' AND Password = '$password' ");
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1)
            return $query->result();

        return false;
    }

     public function loginEm($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where("UserName = '$username' AND Password = '$password' ");
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1)
            return $query->result();

        return false;
    }

    public function loginMem($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where("UserName = '$username' AND Password = '$password' ");
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1)
            return $query->result();

        return false;
    }

    public function loginAll($data)
    {
        $admindata = $this->login($data);
        $employeedata = $this->loginEm($data);
        $memberdata = $this->loginMem($data);

        if ($this->login($data) !== false) 
            return $admindata;

        if ($this->loginEm($data) !== false) 
            return $employeedata;

        if ($this->loginMem($data) !== false) 
            return $memberdata;

        return false;
    }
}
