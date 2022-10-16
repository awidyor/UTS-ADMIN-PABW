<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chart_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['chart'] = $this->Chart_model->tampil_data()->result();
        $this->load->view('chart/index', $data);
        
    }


    
    
}