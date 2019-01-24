<?php
class ModelDaftar extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    function cekData($where,$tabel)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where($where);
        $query = $this->db->get()->num_rows();

        if ($query == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function daftar($data,$tabel)
    {
        $this->db->insert($tabel,$data);
        $id = $this->db->insert_id();

        return (isset($id))? $id: FALSE;
    }

    function ambilData($where,$tabel)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where($where);

        return $this->db->get()->result();
    }
}

?>