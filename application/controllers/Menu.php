<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_menu');
        $this->load->database();
    }

    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('menu');
        }
        $data["hasil"] = $this->Model_menu->ambil_data()->result();
        $this->load->view('menu/index', $data);
    }

    function tambah()
    {
        $data = array(
            'nama_menu' => $this->input->post('nama_menu'),
            'nama_url' => $this->input->post('nama_url'),
            'nama_icon' => $this->input->post('nama_icon')
        );

        $this->Model_menu->simpan_data($data);

        redirect('menu');
    }

    public function hapus()
    {
        $id_menu = $this->input->post('id');
        // $this->load->model('Model_name');
        $this->Model_menu->hapus_data($id_menu);
        redirect('menu');
    }

    public function get_data_by_id()
    {
        $id_menu = $this->input->post('id');
        $data = $this->Model_menu->get_data_by_id($id_menu);
        echo json_encode($data);
    }

    public function edit_data()
    {
        $id = $this->input->post('id');
        $nama_menu = $this->input->post('nama_menu');
        $nama_url = $this->input->post('nama_url');
        $nama_icon = $this->input->post('nama_icon');

        $this->Model_menu->edit_data($id, $nama_menu, $nama_url, $nama_icon);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        );

        echo json_encode($response);
    }
}