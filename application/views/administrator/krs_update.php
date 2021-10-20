<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Update Data KRS
    </div>

    <form method="post" action="<?php echo base_url('administrator/krs/update_krs_aksi') ?>">

        <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="hidden" name="id_akademik" class="form-control" value="<?php echo $id_akademik; ?>"/>
            <input type="hidden" name="id_krs" class="form-control" value="<?php echo $id_krs; ?>"/>
            <input type="text" name="thn_akademik_semester" class="form-control" 
            value="<?php echo $thn_akademik_semester. ' / ' .$semester; ?>" readonly/>
        </div>

        <div class="form-group">
            <label>Nim Mahasiswa</label>
            <input type="text" name="nim" class="form-control" 
            value="<?php echo $nim; ?>" readonly/>
        </div>

        <div class="form-group">
            <label>Mata Kuliah</label>
            <?php
                $query = $this->db->query('SELECT kode_matakuliah, nama_matakuliah FROM matakuliah');

                $dropdowns = $query->result();
                foreach($dropdowns as $dropdown){
                    $dropDownList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
                }
                echo form_dropdown('kode_matakuliah', $dropDownList, $kode_matakuliah, 'class="form-control"
                id="kode_matakuliah"');
            ?>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <?php echo anchor('administrator/krs/index', '<div class="btn btn-primary">Kembali</div>') ?>
    </form>
</div>