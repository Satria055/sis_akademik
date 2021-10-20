<?php

class Jurusan extends CI_Controller{
    public function index(){
        $data['jurusan'] = $this->jurusan_model->tampil_data('jurusan')->result();
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/jurusan',$data);
            $this->load->view('templates_administrator/footer');
    }
    public function tambah_jurusan(){
        $data ['fakultas'] = $this->jurusan_model->tampil_data('fakultas')->result();
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/jurusan_form',$data);
            $this->load->view('templates_administrator/footer');
    }
    public function tambah_jurusan_aksi(){
        $this->_rules();
        
        if($this->form_validation->run() == FALSE){
            $this->tambah_jurusan();
        }else{
            $kode_jurusan = $this->input->post('kode_jurusan');
            $nama_jurusan = $this->input->post('nama_jurusan');
            $nama_fakultas = $this->input->post('nama_fakultas');

            $data = array(
                'kode_jurusan' => $kode_jurusan,
                'nama_jurusan' => $nama_jurusan,
                'nama_fakultas'=> $nama_fakultas
            );
            $this->jurusan_model->insert_data($data, 'jurusan');
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data jurusan berhasil ditambah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('administrator/jurusan');
        }
    }
    public function _rules(){
        $this->form_validation->set_rules('kode_jurusan', 'kode_jurusan', 'required',[
            'required' => 'Silahkan input kode jurusan'
        ]);
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required',[
            'required' => 'Silahkan input nama jurusan'
        ]);
        $this->form_validation->set_rules('nama_fakultas', 'nama_fakultas', 'required',[
            'required' => 'Silahkan input nama fakultas'
        ]);
    }
    public function update($id){
        $where = array('id_jurusan' => $id);
        $data['jurusan'] = $this->db->query("select * from jurusan jrs, 
        fakultas fks where jrs.nama_fakultas=fks.nama_fakultas and jrs.id_jurusan='$id'")->result();
        $data['fakultas'] = $this->jurusan_model->tampil_data('fakultas')->result();
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/jurusan_update',$data);
            $this->load->view('templates_administrator/footer');
    }
    public function update_aksi(){
        $id = $this->input->post('id_jurusan');
        $kode_jurusan = $this->input->post('kode_jurusan');
        $nama_jurusan = $this->input->post('nama_jurusan');
        $nama_fakultas = $this->input->post('nama_fakultas');

        $data = array(
            'kode_jurusan' => $kode_jurusan,
            'nama_jurusan' => $nama_jurusan,
            'nama_fakultas' => $nama_fakultas
        );
        $where = array(
            'id_jurusan' => $id
        );
        $this->jurusan_model->update_data($where, $data, 'jurusan');
        $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data jurusan berhasil diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('administrator/jurusan');
    }
    public function delete($id){
        $where = array('id_jurusan' => $id);
        $this->jurusan_model->hapus_data($where, 'jurusan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data berhasil dihapus!
        </div>');
        redirect('administrator/jurusan');
    }
}