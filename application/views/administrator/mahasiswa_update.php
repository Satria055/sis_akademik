<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Update Mahasiswa
    </div>

    <?php foreach($mahasiswa as $mhs) : ?>
    <?php echo form_open_multipart('administrator/mahasiswa/update_mahasiswa_aksi') ?>
    <div class="form-group">
        <label>Nim Mahasiswa</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
        <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
        <?php echo form_error('nim', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $mhs->nama_lengkap ?>">
        <?php echo form_error('nama_lengkap', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
        <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
        <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="no_telepon" class="form-control" value="<?php echo $mhs->no_telepon ?>">
        <?php echo form_error('no_telepon', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $mhs->tempat_lahir ?>">
        <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $mhs->tanggal_lahir ?>">
        <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
             <select name="jenis_kelamin" class="form-control">
                 <option><?php echo $mhs->jenis_kelamin; ?></option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">','</div>') ?>
    </div>
    <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
                <option ><?php echo $mhs->nama_jurusan; ?></option>
                <?php foreach($jurusan as $jrs) : ?>
                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('nama_jurusan', '<div class="text-danger small ml-3">','</div>') ?>
    </div>
    <div class="form-group">

        <?php foreach($detail as $dt) : ?>
            <img style="width : 10%" src="<?php echo base_url(). 'assets/upload/'. $mhs->photo ?>" alt="">
        <?php endforeach; ?><br><br>

        <label>Foto</label><br>
        <input type="file" name="userfile" value="<?php echo $mhs->photo ?>">
    </div>
    <button type="submit" class="btn btn-success mb-5">Simpan</button>
    <?php echo anchor('administrator/mahasiswa', '<div class="btn btn-primary mb-5">Kembali</div>') ?>
    <?php form_close(); ?>

    <?php endforeach; ?>
</div>