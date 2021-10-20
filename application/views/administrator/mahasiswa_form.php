<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Input Mahasiswa
    </div>

    <?php echo form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi') ?>
    <div class="form-group">
        <label>Nim Mahasiswa</label>
        <input type="text" name="nim" class="form-control">
        <?php echo form_error('nim', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_lengkap" class="form-control">
        <?php echo form_error('nama_lengkap', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="no_telepon" class="form-control">
        <?php echo form_error('no_telepon', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control">
        <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
        <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
                <option value="">--Jenis Kelamin--</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">','</div>') ?>
    </div>
    <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
                <option value="">--Pilih Jurusan--</option>
                <?php foreach($jurusan as $jrs) : ?>
                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('nama_jurusan', '<div class="text-danger small ml-3">','</div>') ?>
    </div>
    <div class="form-group">
        <label>Foto</label><br>
        <input type="file" name="photo">
    </div>
    <button type="submit" class="btn btn-success mb-5">Simpan</button>
    <?php echo anchor('administrator/mahasiswa', '<div class="btn btn-primary mb-5">Kembali</div>') ?>
    <?php form_close(); ?>
</div>