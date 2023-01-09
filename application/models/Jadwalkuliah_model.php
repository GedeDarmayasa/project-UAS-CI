<?php defined('BASEPATH') or exit('No direct script access allowed');
class Jadwalkuliah_model extends CI_Model
{
    private $_table = "jadwal";
    public $id;
    public $nama_mk;
    public $jam;
    public $nama_kelas;
    public $sks;
    public $semester;
    public function rules()
    {
        return [
            [
                'field' => 'nama_mk',
                'label' => 'nama_mk',
                'rules' => 'required'
            ],
            [
                'field' => 'jam',
                'label' => 'jam',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_kelas',
                'label' => 'nama_kelas',
                'rules' => 'required'
            ],
            [
                'field' => 'sks',
                'label' => 'sks',
                'rules' => 'required'
            ],
            [
                'field' => 'semester',
                'label' => 'semester',
                'rules' => 'required'
            ],


        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_mk = $post["nama_mk"];
        $this->jam = $post["jam"];
        $this->nama_kelas = $post["nama_kelas"];
        $this->sks = $post["sks"];
        $this->semester = $post["semester"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_mk = $post["nama_mk"];
        $this->jam = $post["jam"];
        $this->nama_kelas = $post["nama_kelas"];
        $this->sks = $post["sks"];
        $this->semester = $post["semester"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
