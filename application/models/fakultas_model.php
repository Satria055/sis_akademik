<?php

class Fakultas_model extends CI_Model{
    public function tampil_data(){
        return $this->db->get('fakultas');
    }
    public function input_data($data){
        $this->db->insert('fakultas', $data);
    }
    public function edit_data($where, $table){
      return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('fakultas');
        $this->db->like('kode_fakultas', $keyword);
        $this->db->or_like('nama_fakultas', $keyword);
        return $this->db->get()->result();
      }
}