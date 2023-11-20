<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datalogin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_datalog');
        $this->load->database();
    }

    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $data['roles'] = $this->Model_datalog->get_roles_from_database();

        $data["hasil"] = $this->Model_datalog->ambil_data()->result();
        $this->load->view('login/index', $data);
    }

    public function tambah()
    {
        $password = $this->input->post('password');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $hashed_password,
            'id_roles' => $this->input->post('id_roles')
        );

        $this->Model_datalog->simpan_data($data);

        redirect('login');
    }


    public function hapus()
    {
        $id_user = $this->input->post('id');
        // $this->load->model('Model_name');
        $this->Model_datalog->hapus_data($id_user);
        redirect('login');
    }

    public function get_data_by_id()
    {
        $id_user = $this->input->post('id');
        $data = $this->Model_datalog->get_data_by_id($id_user);
        echo json_encode($data);
    }

    public function edit_data()
    {
        $id_user = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password1 = $this->input->post('password1');

        if (!empty($password)) {
            $password_to_use = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $password_to_use = $password1;
        }

        $this->Model_datalog->edit_data($id_user, $username, $password_to_use);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        );

        echo json_encode($response);
    }
}
