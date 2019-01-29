<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasar extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('ModelPasar');
    }

    public function index()
    {
        $this->load->view('ViewPasarOnline');
    }

    public function jual()
    {
        $this->load->view('ViewJual');
    }

    public function beli()
    {
        $this->load->view('ViewBeli');
    }

    public function riwPost()
    {
        $query = array(
            'jual' => "",
            'beli' => ""
        );

        $id = $this->input->post('id');

        $query['jual'] = $this->ModelPasar->jumlahPost('jual',$id);
        $query['beli'] = $this->ModelPasar->jumlahPost('beli',$id);

        echo json_encode($query);
    }

    public function simpanJual()
    {
        $pesan = array(
            'error' => ""
        );
        $data = array(
            'namaBarang' => $this->input->post('namaBarang'),
            'deskripsiBarang' => $this->input->post('deskripsiBarang'),
            'daerah' => $this->input->post('daerah'),
            'hargaMin' => $this->input->post('hargaMin'),
            'hargaMax' => $this->input->post('hargaMax'),
            'beratMin' => $this->input->post('beratMin'),
            'beratMax' => $this->input->post('beratMax'),
            'persediaan' => $this->input->post('persediaan'),
            'gambar' => $this->ModelPasar->_uploadGambar(),
            'tanggalPosting' => date('Y-m-d'),
            'tanggalBerlaku' => date('Y-m-d',strtotime("+60 days")),
            'user_idUser' => $this->session->userdata('id')
        );

        $query = $this->ModelPasar->simpanData('jual', $data);

        if ($query == true) {
            $pesan['error'] = 1;
        } else {
            $pesan['error'] = 0;
        }
        echo json_encode($pesan);
    }
    
    public function simpanBeli()
    {
        $pesan = array(
            'error' => ""
        );
        $data = array(
            'namaBarang' => $this->input->post('namaBarang'),
            'deskripsiBarang' => $this->input->post('deskripsiBarang'),
            'daerah' => $this->input->post('daerah'),
            'hargaMin' => $this->input->post('hargaMin'),
            'hargaMax' => $this->input->post('hargaMax'),
            'beratMin' => $this->input->post('beratMin'),
            'beratMax' => $this->input->post('beratMax'),
            'kebutuhan' => $this->input->post('kebutuhan'),
            'gambar' => $this->ModelPasar->_uploadGambar(),
            'tanggalPosting' => date('Y-m-d'),
            'tanggalBerlaku' => date('Y-m-d',strtotime("+60 days")),
            'user_idUser' => $this->session->userdata('id')
        );

        $query = $this->ModelPasar->simpanData('beli', $data);

        if ($query == true) {
            $pesan['error'] = 1;
        } else {
            $pesan['error'] = 0;
        }
        echo json_encode($pesan);
    }
}

?>