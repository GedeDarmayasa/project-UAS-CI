<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwalkuliah_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["jadwal"] = $this->jadwalkuliah_model->getAll();
        $this->load->view("admin/jadwalkuliah/list", $data);
    }
    public function add()
    {
        $jadwalkuliah = $this->jadwalkuliah_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalkuliah->rules());
        if ($validation->run()) {
            $jadwalkuliah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/jadwalkuliah/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/jadwal');

        $jadwalkuliah = $this->jadwalkuliah_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalkuliah->rules());
        if ($validation->run()) {
            $jadwalkuliah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["jadwalkuliah"] = $jadwalkuliah->getById($id);
        if (!$data["jadwalkuliah"]) show_404();

        $this->load->view("admin/jadwalkuliah/edit_form", $data);
    }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->jadwalkuliah_model->delete($id)) {
            redirect(site_url('admin/jadwal'));
        }
    }
}
