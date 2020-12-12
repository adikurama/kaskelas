<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

    function cek_login($table,$where)
    {
        return $this->db->get_where($table,$where);
    }

    public function database_input($table,$data)
    {
    	return $this->db->insert($table,$data);
    }
    public function data_user($table,$where)
    {
    	return $this->db->get_where($table,$where);
    }

}