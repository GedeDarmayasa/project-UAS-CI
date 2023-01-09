<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftarkelas_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["kelas"] = $this->daftarkelas_model->getAll();
        $this->load->view("admin/daftarkelas/list", $data);
    }
    public function add()
    {
        $daftarkelas = $this->daftarkelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftarkelas->rules());
        if ($validation->run()) {
            $daftarkelas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/daftarkelas/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kelas');

        $daftarkelas = $this->daftarkelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftarkelas->rules());
        if ($validation->run()) {
            $daftarkelas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["daftarkelas"] = $daftarkelas->getById($id);
        if (!$data["daftarkelas"]) show_404();

        $this->load->view("admin/daftarkelas/edit_form", $data);
    }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->daftarkelas_model->delete($id)) {
            redirect(site_url('admin/kelas'));
        }
    }
}
