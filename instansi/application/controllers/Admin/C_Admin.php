<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Instansi');
    }

    public function index()
    {
        $data['halaman'] = "SIPO-DINAS KESEHATAN SURAKARTA";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['jmlinstansi'] = $this->M_Instansi->jumlahinstansi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/index', $data); ///DIUBAH
        $this->load->view('templates/footer');
    }
}
