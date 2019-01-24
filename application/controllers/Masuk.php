<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('ModelMasuk');
    }

    public function index()
    {
        $this->load->view('ViewMasuk');
    }

    public function masuk()
    {
        $where = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('pass')
        );

        $query = $this->ModelMasuk->verify('login','user',$where,'login.idLogin = user.login_idLogin');

        if ($query == FALSE) {
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Username atau password anda salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Masuk');
        } else {

            foreach ($query as $value) {
                $data['id'] = $value->idUser;
                $data['nama'] = $value->namaDepan;
                
                $this->session->set_userdata($data);
            }
            redirect('Beranda');
        }
    }
}

?>