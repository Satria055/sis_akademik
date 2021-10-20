<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Input Fakultas
    </div>

    <form method="post" action="<?php echo base_url('administrator/fakultas/input_aksi') ?>">
        <div class="form-group">
            <label>Kode Fakultas</label>
            <input type="text" name="kode_fakultas" placeholder="Masukkan Kode Fakultas" class="form-control">
            <?php echo form_error('kode_fakultas', '<div class="text-danger small" ml-3>') ?>
        </div>
        
        <div class="form-group">
            <label>Nama Fakultas</label>
            <input type="text" name="nama_fakultas" placeholder="Masukkan Nama Fakultas" class="form-control">
            <?php echo form_error('nama_fakultas', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success"> Simpan</button>
        <a href="<?php echo base_url('administrator/fakultas');?>" class="btn btn-primary">Kembali</a>
    </form>
</div>