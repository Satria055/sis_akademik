<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Detail Mata Kuliah
    </div>
    <table class="table table-striped table-bordered table-hover">
        <?php foreach($detail as $dt) : ?>
        <tr>
            <th>Kode Mata Kuliah</th>
            <td><?php echo $dt->kode_matakuliah; ?></td>
        </tr>

        <tr>
            <th>Nama Mata Kuliah</th>
            <td><?php echo $dt->nama_matakuliah; ?></td>
        </tr>

        <tr>
            <th>SKS</th>
            <td><?php echo $dt->sks; ?></td>
        </tr>

        <tr>
            <th>Semester</th>
            <td><?php echo $dt->semester; ?></td>
        </tr>

        <tr>
            <th>Nama Jurusan</th>
            <td><?php echo $dt->nama_jurusan; ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php echo anchor('administrator/matakuliah', '<div class="btn btn-primary">Kembali</div>') ?>
</div>