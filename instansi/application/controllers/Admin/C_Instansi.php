<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Instansi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Instansi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Data Instansi";
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['instansi'] = $this->M_Instansi->getInstansi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('Admin/Instansi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Instansi";
        $data['form'] = "Form Tambah";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required|trim');
        $this->form_validation->set_rules('des_instansi', 'Deskripsi Instansi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('Admin/Instansi/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_Instansi->tambah();
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success" role="alert"> Data Instansi berhasil ditambahkan </div>');
            redirect('Admin/C_Instansi');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Data Instansi Obat";
        $data['form'] = "Form Edit";
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['instansi'] = $this->M_Instansi->getIdInstansi($id)->row_array();

        $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required|trim');
        $this->form_validation->set_rules('des_instansi', 'Deskripsi Instansi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('Admin/Instansi/Edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_Instansi->edit();
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success" role="alert"> Data Instansi Berhasil Diubah </div>');
            redirect('Admin/C_Instansi');
        }
    }

    public function hapus($id)
    {
        $this->M_Instansi->hapus($id);
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert"> Data Instansi Telah Berhasil Dihapus! </div>');
    }
}
