<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata_model extends CI_Model
{
    public function import_data($datawisata)
    {
        $jumlah = count($datawisata);
        if ($jumlah > 0) {
            $this->db->replace('m_wisata', $datawisata);
        }
    }

    public function getDataWisata($tanggalawal = null, $tanggalakhir = null)
    {
        if ($tanggalawal && $tanggalakhir) {
            $this->db->where('date_created >=', $tanggalawalbaru);
            $this->db->where('date_created <=', $tanggalakhirbaru);
        }
        return $this->db->get('m_wisata')->result_array();
    }
    public function getWisataById($id)
    {
        return $this->db->get_where('wisata', ['id' => $id])->row_array();
    }
    public function hapusDataWisata($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('m_wisata',['id'=>$id]);    
    }

}