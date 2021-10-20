<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Update Jurusan
    </div>

    <?php foreach($jurusan as $jrs) : ?>
        <form method="post" action="<?php echo base_url('administrator/jurusan/update_aksi') ?>">
            <div class="form-group">
                <label>Kode Jurusan</label>
                <input type="hidden" name="id_jurusan" value="<?php echo $jrs->id_jurusan ?>">
                <input type="text" name="kode_jurusan" class="form-control" value="<?php echo $jrs->kode_jurusan ?>">
            </div>

            <div class="form-group">
                <label>Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan ?>">
            </div>
            
            <div class="form-group">
                <label>Nama Fakultas</label>
                <select name="nama_fakultas" class="form-control">
                    <option value="<?php echo $jrs->nama_fakultas ?>"><?php echo $jrs->nama_fakultas; ?></option>

                    <?php foreach($fakultas as $fks) : ?>
                        <option value="<?php echo $fks->nama_fakultas ?>"><?php echo $fks->nama_fakultas; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?php echo base_url('administrator/jurusan');?>" class="btn btn-primary">Kembali</a>
        </form>
    <?php endforeach; ?>
</div>