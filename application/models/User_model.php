<?php

Class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function create_user()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        return $this->db->insert('users',$data);
    }
}