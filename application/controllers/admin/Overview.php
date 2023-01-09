<?php
class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("mahasiswa_model");
        $this->load->model("dosen_model");
        $this->load->model("daftarkelas_model");
        $this->load->model("daftarmatakuliah_model");
        $this->load->model("jadwalkuliah_model");
        $this->load->model("jurusan_model");
    }
    public function index()
    {
        $data = [
            'admin' => $this->user_model->getAll(),
            'mahasiswa' => $this->mahasiswa_model->getAll(),
            'dosen' => $this->dosen_model->getAll(),
            'daftarkelas' => $this->daftarkelas_model->getAll(),
            'daftarmatakuliah' => $this->daftarmatakuliah_model->getAll(),
            'jadwalkuliah' => $this->jadwalkuliah_model->getAll(),
            'jurusan' => $this->jurusan_model->getAll()
        ];

        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
}
