<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        MAHASISWA
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="form-inline my-2 my-lg-0">

        <?php echo anchor('administrator/mahasiswa/tambah_mahasiswa', '<button class="btn btn-sm btn-primary mr-2 mb-2"><i class="fa fa-plus fa-sm"></i> Tambah Mahasiswa</button>') ?>
        <a class="btn btn-sm btn-info mr-2 mb-2" href="<?php echo base_url('mahasiswa/print') ?>"><i class="fa fa-print"></i> Print</a>

        <?php echo form_open('administrator/mahasiswa/search') ?>
        <input class="form-control mb-2" type="text" name="keyword" placeholder="Search">
        <button class="btn btn-secondary mb-2" type="submit">Cari</button>
        <?php echo form_close() ?>
    </div>

    <table class="table table-bordered table-hover">
        <tr class="thead-light">
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA LENGKAP</th>
            <th>EMAIL</th>
            <th colspan="3"><i class="fa fa-cogs"></i></th>
        </tr>

        <?php 
            $no = 1;
            foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->nama_lengkap ?></td>
                <td><?php echo $mhs->email ?></td>
                <td width="20px"><?php echo anchor('administrator/mahasiswa/detail/'.$mhs->id,
                '<div class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->id,
                '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                <td width="20px" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                <?php echo anchor('administrator/mahasiswa/delete/'.$mhs->id,
                '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>

    </table>
</div>