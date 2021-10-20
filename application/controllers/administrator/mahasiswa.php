<?php

class Mahasiswa extends CI_Controller{
    public function index(){
        $data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa',$data);
            $this->load->view('templates_administrator/footer');
    }
    public function detail($id){
        $data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mahasiswa_detail',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_mahasiswa(){
        $data['jurusan'] = $this->mahasiswa_model->tampil_data('jurusan')->result();
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa_form',$data);
            $this->load->view('templates_administrator/footer');
    }
    public function tambah_mahasiswa_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_mahasiswa();
        }else{
            $nim = $this->input->post('nim');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_telepon = $this->input->post('no_telepon');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_jurusan = $this->input->post('nama_jurusan');
            $photo = $_FILES['photo'];
            if ($photo=''){}else{
                $config['upload_path']      = './assets/upload';
                $config['allowed_types']    = 'jpg|png|gif';
    
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('photo')){
                    echo "Upload Gagal"; die();
                }else{
                    $photo=$this->upload->data('file_name');
                }
            }
            $data = array(
                'nim'           => $nim,
                'nama_lengkap'  => $nama_lengkap,
                'alamat' => $alamat,
                'email'   => $email,
                'no_telepon'    => $no_telepon,
                'tempat_lahir'  => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_jurusan'  => $nama_jurusan,
                'photo'  => $photo
            );     
            $this->mahasiswa_model->insert_data($data, 'mahasiswa');
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa berhasil ditambah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('administrator/mahasiswa');
        }
    }
    public function _rules(){
        $this->form_validation->set_rules('nim', 'Nim', 'required',[
            'required' => 'Silahkan input nim mahasiswa'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required',[
            'required' => 'Silahkan input nama mahasiswa'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',[
            'required' => 'Silahkan input alamat'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required' => 'Silahkan input email'
        ]);
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required',[
            'required' => 'Silahkan input nomor telepon'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required',[
            'required' => 'Silahkan input tempat lahir'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required',[
            'required' => 'Silahkan input tanggal lahir'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required' => 'Silahkan input jenis kelamin'
        ]);
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required',[
            'required' => 'Silahkan input nama jurusan'
        ]);
    }
    public function update($id){
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->db->query("select * from mahasiswa mhs, 
        jurusan jrs where mhs.nama_jurusan=jrs.nama_jurusan and mhs.id='$id'")->result();
        $data['jurusan'] = $this->mahasiswa_model->tampil_data('jurusan')->result();
        $data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa_update',$data);
            $this->load->view('templates_administrator/footer');
    }
    public function update_mahasiswa_aksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->update();
        }else{
            $id = $this->input->post('id');
            $nim = $this->input->post('nim');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_telepon = $this->input->post('no_telepon');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_jurusan = $this->input->post('nama_jurusan');
            $photo = $_FILES['userfile']['name'];

            if ($photo){
                $config['upload_path']      = './assets/upload';
                $config['allowed_types']    = 'jpg|png|gif';
    
                $this->load->library('upload', $config);
                if($this->upload->do_upload('userfile')){
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('photo', $userfile);
                }else{
                    echo "Gagal upload!";
                }
            }
            $data = array(
                'nim'           => $nim,
                'nama_lengkap'  => $nama_lengkap,
                'alamat' => $alamat,
                'email'   => $email,
                'no_telepon'    => $no_telepon,
                'tempat_lahir'  => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_jurusan'  => $nama_jurusan
            );

            $where = array(
                'id' => $id
            );
            $this->mahasiswa_model->update_data($where, $data, 'mahasiswa');
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa berhasil dupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('administrator/mahasiswa');
        }
    }
    public function delete($id){
        $where = array('id' => $id);
        $this->mahasiswa_model->hapus_data($where, 'mahasiswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data berhasil dihapus!
        </div>');
        redirect('administrator/mahasiswa');
    }
}