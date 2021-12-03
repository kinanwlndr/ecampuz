<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Instansi extends CI_Model
{
    public function getAllInstansi()
    {
        $this->db->select('*');
        $this->db->from('instansi');
        $query = $this->db->get('');
        return $query;
    }

    public function getInstansi()
    {
        $query = $this->db->get('instansi');
        return $query->result_array();
    }

    public function jumlahinstansi()
    {
        $this->db->select('*');
        $this->db->from('instansi');

        $query = $this->db->get()->num_rows();
        return $query;
    }

    public function getIdInstansi($id)
    {
        $query = $this->db->get_where('instansi', ['id_instansi' => $id ]);
        return $query;
    }

    public function tambah()
    {
        $data = 
        [
            'nama_instansi' => $this->input->post('nama_instansi'),
            'des_instansi' => $this->input->post('des_instansi'),
        ];
        $this->db->insert('instansi', $data);
    }

    public function edit()
    {
        $id_instansi = $this->input->post('id_instansi');
        $nama_instansi = $this->input->post('nama_instansi');
        $des_instansi = $this->input->post('des_instansi');
        $data = 
        [
            'id_instansi' => $id_instansi,
            'nama_instansi' => $nama_instansi,
            'des_instansi' => $des_instansi
        ];
        $this->db->where('id_instansi', $id_instansi);
        $this->db->update('instansi', $data);
    }

    public function hapus($id)
    {
        $this->db->from('instansi');
        $this->db->where('id_instansi', $id);
        $this->db->delete('instansi');
    }

    function data()
    {
        $this->db->order_by('id_instansi','DESC');
        return $query = $this->db->get('instansi');
    }


}
