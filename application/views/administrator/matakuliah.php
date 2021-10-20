<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        MATA KULIAH
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="form-inline my-2 my-lg-0">

        <?php echo anchor('administrator/matakuliah/tambah_matakuliah', '<button class="btn btn-sm btn-primary mr-2 mb-2"><i class="fa fa-plus fa-sm"></i> Tambah Mata Kuliah</button>') ?>
        <a class="btn btn-sm btn-info mr-2 mb-2" href="<?php echo base_url('matakuliah/print') ?>"><i class="fa fa-print"></i> Print</a>

        <?php echo form_open('administrator/matakuliah/search') ?>
        <input class="form-control mb-2" type="text" name="keyword" placeholder="Search">
        <button class="btn btn-secondary mb-2" type="submit">Cari</button>
        <?php echo form_close() ?>
    </div>

    <table class="table table-bordered table-hover">
        <tr class="thead-light">
            <th>NO</th>
            <th>KODE MATA KULIAH</th>
            <th>NAMA MATA KULIAH</th>
            <th>NAMA JURUSAN</th>
            <th colspan="3"><i class="fa fa-cogs"></i></th>
        </tr>

        <?php
            $no = 1;
            foreach($matakuliah as $mk) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $mk->kode_matakuliah ?></td>
                <td><?php echo $mk->nama_matakuliah ?></td>
                <td><?php echo $mk->nama_jurusan ?></td>
                <td width="20px"><?php echo anchor('administrator/matakuliah/detail/'.$mk->kode_matakuliah,
                '<div class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/matakuliah/update/'.$mk->kode_matakuliah,
                '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                <td width="20px" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                <?php echo anchor('administrator/matakuliah/delete/'.$mk->kode_matakuliah,
                '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</div>