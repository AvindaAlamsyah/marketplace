<?php
class ModelPasar extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    function simpanData($tabel,$data)
    {
        $this->db->insert($tabel, $data);
        return TRUE;
    }

    function _uploadGambar()
    {
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['file_name']        = uniqid();
        $config['overwrite']        = true;
        $config['max_size']         = 3000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}

?>