<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Detail Mahasiswa
    </div>
    <table class="table table-striped table-bordered table-hover">
        <?php foreach($detail as $dt) : ?>
        
        <img class="mb-3" style="width : 10%" src="<?php echo base_url('assets/upload/').$dt->photo ?>">
        <tr>
            <th>Nim</th>
            <td><?php echo $dt->nim; ?></td>
        </tr>

        <tr>
            <th>Nama lengkap</th>
            <td><?php echo $dt->nama_lengkap; ?></td>
        </tr>

        <tr>
            <th>Alamat</th>
            <td><?php echo $dt->alamat; ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo $dt->email; ?></td>
        </tr>

        <tr>
            <th>Nomor Telepon</th>
            <td><?php echo $dt->no_telepon; ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo $dt->tempat_lahir; ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $dt->tanggal_lahir; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $dt->jenis_kelamin; ?></td>
        </tr>
        <tr>
            <th>Nama Jurusan</th>
            <td><?php echo $dt->nama_jurusan; ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php echo anchor('administrator/mahasiswa', '<div class="btn btn-primary mb-5">Kembali</div>') ?>
</div>