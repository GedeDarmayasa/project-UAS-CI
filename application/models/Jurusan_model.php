<?php defined('BASEPATH') or exit('No direct script access allowed');
class Jurusan_model extends CI_Model
{
    private $_table = "jurusans";
    public $nama_jurusan;
    public function rules()
    {
        return [
            [
                'field' => 'nama_jurusan',
                'label' => 'nama_jurusan',
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
        $this->nama_jurusan = $post["nama_jurusan"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_jurusan = $post["nama_jurusan"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
