<?php

Class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['title'] = 'List User';
        $data['users'] = $this->user_model->get_users();
        $this->load->view('templates/header');
        $this->load->view('users/index',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Create User';
        $this->form_validation->set_rules('name', 'Tên', 'required');
        $this->form_validation->set_rules('username', 'tài khoản', 'required');
        $this->form_validation->set_rules('password', 'mật khẩu', 'required|min_length[6]');
        $this->form_validation->set_rules('re-password', 'nhập lại mật khẩu', 'matches[password]');
        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('users/create',$data);
            $this->load->view('templates/footer');
        }else{
            $this->user_model->create_user();
        }



    }

    public function test()
    {
        $this->db->where('id <','6');
        $query = $this->db->get('users');
        var_dump($query->result_array());
        foreach ($query->result() as $row) {
            echo $row->id;
        }
    }
}