<?php

class Fakultas extends CI_Controller{

    public function index(){
        $data['fakultas'] = $this->fakultas_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/fakultas',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function input(){
        $data = array(
            'id_fakultas' => set_value('id_fakultas'),
            'kode_fakultas' => set_value('kode_fakultas'),
            'nama_fakultas' => set_value('nama_fakultas')
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/fakultas_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->input();
        }else{
            $data = array(
                'kode_fakultas' => $this->input->post('kode_fakultas', TRUE),
                'nama_fakultas' => $this->input->post('nama_fakultas', TRUE),
            );
            $this->fakultas_model->input_data($data);
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data fakultas berhasil ditambah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('administrator/fakultas');
        }
    }
    public function _rules(){
        $this->form_validation->set_rules('kode_fakultas', 'kode_fakultas', 'required',[
            'required' => 'Silahkan input kode fakultas'
        ]);
        $this->form_validation->set_rules('nama_fakultas', 'nama_fakultas', 'required',[
            'required' => 'Silahkan input nama fakultas'
        ]);
    }
    public function update($id){
        $where = array('id_fakultas' => $id);
        $data['fakultas'] = $this->fakultas_model->edit_data($where, 'fakultas')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/fakultas_update',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi(){
        $id = $this->input->post('id_fakultas');
        $kode_fakultas = $this->input->post('kode_fakultas');
        $nama_fakultas = $this->input->post('nama_fakultas');

        $data = array(
            'kode_fakultas' => $kode_fakultas,
            'nama_fakultas' => $nama_fakultas
        );
        $where = array(
            'id_fakultas' => $id
        );
        $this->fakultas_model->update_data($where, $data, 'fakultas');
        $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data fakultas berhasil diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('administrator/fakultas');
    }
    public function delete($id){
        $where = array('id_fakultas' => $id);
        $this->fakultas_model->hapus_data($where, 'fakultas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data berhasil dihapus!
        </div>');
        redirect('administrator/fakultas');
    }
    public function search(){
        $keyword = $this->input->post('keyword');
        $data['fakultas'] = $this->fakultas_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/fakultas',$data);
        $this->load->view('templates_administrator/footer');
    }
}