<?php defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
    private $_table = "student";
    public $id;
    public $nama_mahasiswa;
    public $NIM;
    public $tanggal_lahir;
    public $jurusan;
    public $alamat;
    public $email;
    public $no_telepon;

    public function rules()
    {
        return [
            [
                'field' => 'nama_mahasiswa',
                'label' => 'nama_mahasiswa',
                'rules' => 'required'
            ],
            [
                'field' => 'NIM',
                'label' => 'NIM',
                'rules' => 'numeric'
            ],

            [
                'field' => 'jurusan',
                'label' => 'jurusan',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ],

            [
                'field' => 'no_telepon',
                'label' => 'no_telepon',
                'rules' => 'required'
            ]
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
        $this->nama_mahasiswa = $post["nama_mahasiswa"];
        $this->NIM = $post["NIM"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->jurusan = $post["jurusan"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->no_telepon = $post["no_telepon"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_mahasiswa = $post["nama_mahasiswa"];
        $this->NIM = $post["NIM"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->jurusan = $post["jurusan"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->no_telepon = $post["no_telepon"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
