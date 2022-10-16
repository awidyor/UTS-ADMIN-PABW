<?php

class Chart_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function tampil_data()
    {
        return $this->db->get('revenue');
    }}