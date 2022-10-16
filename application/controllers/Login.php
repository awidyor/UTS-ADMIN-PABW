<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        
    }

    public function index()
    {
        $this->load->view('login/v_login');
       
    }

    function aksi_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $username = $user;
        $password = md5($pass);
       
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("user", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("home"));
        } else {
            echo "Username dan password salah!";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
