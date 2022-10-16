<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->user_model->tampil_data()->result();
        $this->load->view('user/user_list_v', $data);
        
    }


    public function tambah()
    {
        $this->load->view('user/user_add_v');
    }

    public function tambah_aksi()
    {
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));
  
        $nama       = $this->input->post('nama');

        

        $data = array(
            'username' => $username,
            'password' => $password,

            'nama' => $nama
  
        );

        $this->user_model->input_data($data, 'user');
        redirect('login');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->user_model->hapus_data($where, 'user');
        redirect('user');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->user_model->edit_data($where, 'user')->result();
        $this->load->view('user/user_edit_v', $data);
    }

    public function update()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');


        $data = array(
            'nama'      => $nama,
            'username'  => $username,
            'password'  => $password,

        );

        $where = array(
            'id' => $id
        );

        $this->user_model->update_data($where, $data, 'user');
        redirect('user');
    }
}