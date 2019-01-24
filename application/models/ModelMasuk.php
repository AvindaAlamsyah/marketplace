<?php
class ModelMasuk extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    function verify($tabel,$tjoin,$where,$join)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->join($tjoin,$join);
        $this->db->where($where);
        $query = $this->db->get()->result();

        if ($query != NULL) {
            return $query;
        } else {
            return FALSE;
        }
    }
}

?>