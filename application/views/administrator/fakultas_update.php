<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Update Fakultas
    </div>

    <?php foreach($fakultas as $fks) : ?>
        <form method="post" action="<?php echo base_url('administrator/fakultas/update_aksi') ?>">
            <div class="form-group">
                <label>Kode Fakultas</label>
                <input type="hidden" name="id_fakultas" value="<?php echo $fks->id_fakultas ?>">
                <input type="text" name="kode_fakultas" class="form-control" value="<?php echo $fks->kode_fakultas ?>">
            </div>
            
            <div class="form-group">
                <label>Nama Fakultas</label>
                <input type="text" name="nama_fakultas" class="form-control" value="<?php echo $fks->nama_fakultas ?>">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?php echo base_url('administrator/fakultas');?>" class="btn btn-primary">Kembali</a>
        </form>
    <?php endforeach; ?>
</div>