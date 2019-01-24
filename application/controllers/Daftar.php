<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('ModelDaftar');
    }

    public function index()
    {
        $this->load->view('ViewDaftar');
        
    }

    public function daftar()
    {
        $login = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('pass')
        );
        
        $data = array(
            'namaDepan' => $this->input->post('namaDepan'),
            'namaBelakang' => $this->input->post('namaBelakang'),
            'email' => $this->input->post('email'),
            'nomorTelepon' => $this->input->post('nomorTelp'),
            'nomorWA' => $this->input->post('nomorWA'),
            'login_idLogin' => ''
        );

        $query = $this->ModelDaftar->cekData($where = array('username' => $login['username']),'login');

        if ($query == TRUE) {
            $query1 = $this->ModelDaftar->cekData($where = array('email' => $data['email']),'user');
            
            if ($query1 == TRUE) {
                $query2 = $this->ModelDaftar->cekData($where = array('nomorTelepon' => $data['nomorTelepon']),'user');

                if ($query2 == TRUE) {
                    $query3 = $this->ModelDaftar->cekData($where = array('nomorWA' => $data['nomorWA']),'user');

                    if ($query3 == TRUE) {
                        $id = $this->ModelDaftar->daftar($login,'login');
                        
                        if ($id !== FALSE) {
                            $data['login_idLogin'] = $id;
                            $query4 = $this->ModelDaftar->daftar($data,'user');

                            if ($query4 !== FALSE) {
                                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Selamat, data anda berhasil disimpan. Silahkan anda <a href="Masuk" class="alert-link">LOGIN</a>.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                                redirect('Daftar');
                            } else {
                                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Peringatan, gagal menyimpan data user<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                                redirect('Daftar');
                            }
                        } else {
                            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Peringatan, gagal menyimpan data login<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            redirect('Daftar');
                        }

                    } else {
                        $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Maaf, nomor whatsapp sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('Daftar');
                    }
                } else {
                    $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Maaf, nomor telepon sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('Daftar');
                }
            } else {
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Maaf, email sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Daftar');
            }
        } else {
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Maaf, username sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Daftar');
        }
    }
}

?>