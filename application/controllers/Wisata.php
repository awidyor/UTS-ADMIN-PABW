<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Wisata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Wisata_model');
    }



    public function index()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $data['title'] = 'Export Import';
        $data['semuawisata'] = $this->Wisata_model->getDataWisata($tanggalawal, $tanggalakhir);
        $this->load->view('index/index', $data);
    }

    public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datawisata = array(
                            'nama'  => $row->getCellAtIndex(1),
                            'kota'  => $row->getCellAtIndex(2),
                            'provinsi'  => $row->getCellAtIndex(3),
                            'deskripsi'   => $row->getCellAtIndex(4),
                            'date_created' => time(),
                            'date_modified' => time(),
                        );
                        $this->Wisata_model->import_data($datawisata);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('wisata');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
    public function mpdf()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $mpdf = new \Mpdf\Mpdf();
        $datawisata = $this->Wisata_model->getDataWisata($tanggalawal, $tanggalakhir);
        $data = $this->load->view('pdf/mpdf', ['semuawisata' => $datawisata], TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function excel()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $data['title'] = 'Laporan Excel';
        $data['semuawisata'] = $this->Wisata_model->getDataWisata($tanggalawal, $tanggalakhir);
        $this->load->view('excel/excel', $data);
    }

    public function highchart()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $data['title'] = 'Export Grafik';
        $data['semuawisata'] = $this->Wisata_model->getDataWisata($tanggalawal, $tanggalakhir);
        $this->load->view('grafik/highchart', $data);
    }

    public function hapus($id)
    {
        $this->Wisata_model->hapusDataWisata($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('wisata');
    }
}
