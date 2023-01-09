<?php defined('BASEPATH') or exit('No direct script access allowed');
class Dosen_model extends CI_Model
{
    private $_table = "dosens";
    public $NIP;
    public $nama;
    public $matkul;
    public $alamat;
    public $no_hp;
    public function rules()
    {
        return [
            [
                'field' => 'NIP',
                'label' => 'NIP',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'no_hp',
                'label' => 'no_hp',
                'rules' => 'numeric'
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
        $this->NIP = $post["NIP"];
        $this->nama = $post["nama"];
        $this->matkul = $post["matkul"];
        $this->alamat = $post["alamat"];
        $this->no_hp = $post["no_hp"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->NIP = $post["NIP"];
        $this->nama = $post["nama"];
        $this->matkul = $post["matkul"];
        $this->alamat = $post["alamat"];
        $this->no_hp = $post["no_hp"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
