<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Input Jurusan
    </div>

    <form method="post" action="<?php echo base_url('administrator/jurusan/tambah_jurusan_aksi') ?>">
        <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="text" name="kode_jurusan" placeholder="Masukkan Kode Jurusan" class="form-control">
            <?php echo form_error('kode_jurusan', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" name="nama_jurusan" placeholder="Masukkan Nama Jurusan" class="form-control">
            <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
        </div>
        
        <div class="form-group">
            <label>Nama Fakultas</label>
            <select name="nama_fakultas" class="form-control">
                <option value="">--Pilih Fakultas--</option>
                <?php foreach($fakultas as $fks) : ?>
                    <option value="<?php echo $fks->nama_fakultas ?>"><?php echo $fks->nama_fakultas ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success"> Simpan</button>
        <a href="<?php echo base_url('administrator/jurusan');?>" class="btn btn-primary">Kembali</a>
    </form>
</div>