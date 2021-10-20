<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Update Tahun Akademik
    </div>

    <?php foreach($tahun_akademik as $takad) : ?>
    <form method="post" action="<?php echo base_url('administrator/tahun_akademik/update_aksi') ?>">
        <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="hidden" name="id_akademik" value="<?php echo $takad->id_akademik ?>">
            <input type="text" name="tahun_akademik" class="form-control" value="<?php echo $takad->tahun_akademik ?>">
            <?php echo form_error('tahun_akademik', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Semester</label>
            <select name="semester" class="form-control">
                <option><?php echo $takad->semester ?></option>
                <option>Ganjil</option>
                <option>Genap</option>
            </select>
            <?php echo form_error('semester', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option><?php echo $takad->status ?></option>
                <option>Aktif</option>
                <option>Tidak Aktif</option>
            </select>
            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success"> Simpan</button>
        <a href="<?php echo base_url('administrator/tahun_akademik');?>" class="btn btn-primary">Kembali</a>
    </form>
    <?php endforeach; ?>
</div>