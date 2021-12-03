<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    //LOGIN
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->load->helper('captcha');
        $args = array(
            'img_path' => './captcha/',
            'img_url'  => base_url('captcha'),
            'img_height' => '50',
            'img_width'=>'150',
            'expiration'=>7200,
            'font_path' => '.system/fonts/texb.ttf',
            'word_length' => '5',
            'pool' => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'colors' => array(
                'background' => array(0,0,0),
                'border' => array(0,0,0),
                'text' => array(255,255,255),
                'grid' => array(0,0,0))
        
        );
            $cap = create_captcha($args);

                        // print_r($cap);
            // exit;
        if ($this->form_validation->run() == false) {
            
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login',array('captcha'=>$cap));
            $this->load->view('templates/auth_footer');
        } else {
            //ketika benar
            $this->session->set_userdata('captcha_key', $cap['word']);
            $this->_login();
        }
    }


    private function _login()
    {

        $secret_key = "6Le6HFIcAAAAAPP6U9GehF9wfOsuRtsl7fABa8vc";
        $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
        $response = json_decode($verify);

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('user', 'user.id_user = pegawai.id_user');
        $this->db->where('user.username', $username);

        $user = $this->db->get()->row_array();
        if ($response->success) {
            echo "<h2>Captcha Valid</h2>";
            if ($user) {
                //user ada

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'username' => $user['username'],
                        'role' => $user['role'],
                        'id_pegawai' => $user['id_pegawai'],
                        'id_unit' => $user['id_unit'],
                    ];
                    if ($data['role'] == 'Admin') {
                        $this->session->set_userdata($data);
                        redirect('admin/C_Admin');
                    }
                    if ($data['role'] == 'Pegawai UPK') {
                        $this->session->set_userdata($data);
                        redirect('Pegawai_UPK/C_PegawaiUPK');
                    }
                    if ($data['role'] == 'Pegawai Instalasi Farmasi') {
                        $this->session->set_userdata($data);
                        redirect('Pegawai_IFK/C_PegawaiIFK');
                    }
                    if ($data['role'] == 'Kepala UPK') {
                        $this->session->set_userdata($data);
                        redirect('Kepala_UPK/C_KepalaUPK');
                    }
                    if ($data['role'] == 'Kepala Instalasi Farmasi') {
                        $this->session->set_userdata($data);
                        redirect('Kepala_IFK/C_KepalaIFK');
                    }
                    if ($data['role'] == 'Kepala Dinas Kesehatan') {
                        $this->session->set_userdata($data);
                        redirect('Kepala_Dinkes/C_KepalaDinkes');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> User belum terdaftar</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Captcha Tidak Valid</div>');
            redirect('auth');
        }
    }

    // public function register()
    // {
    //     $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
    //         'is_unique' => 'Username sudah ada',
    //     ]);
    //     $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[pegawai.nip]', [
    //         'is_unique' => 'NIP sudah ada',
    //     ]);
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
    //         'matches' => 'password tidak cocok',
    //         'min_length' => 'password min 8 karakter',
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/auth_header');
    //         $this->load->view('auth/register');
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         $data1 = [
    //             'username' => $this->input->post('username'),
    //             'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //             'role' => $this->input->post('role')
    //         ];

    //         $this->db->insert('user', $data1);

    //         $data = [
    //             'id_user' => $this->db->insert_id(),
    //             'nip' => $this->input->post('nip'),
    //             'nama' => $this->input->post('nama'),
    //             'tanggal_lahir' => $this->input->post('tanggal_lahir'),
    //             'jk' => $this->input->post('jk'),
    //             'no_hp' => $this->input->post('no_hp'),
    //             'alamat' => $this->input->post('alamat'),
    //         ];
    //         $this->db->insert('pegawai', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User berhasil ditambahkan </div>');
    //         redirect('auth'); //ke halaman login (JANGAN LUPA DIUBAH)
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Logout berhasil </div>');
        redirect('auth');
    }
}
