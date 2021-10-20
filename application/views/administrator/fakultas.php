<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        FAKULTAS
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="form-inline my-2 my-lg-0">

        <?php echo anchor('administrator/fakultas/input', '<button class="btn btn-sm btn-primary mr-2 mb-2"><i class="fa fa-plus fa-sm"></i> Tambah Fakultas</button>') ?>
        <a class="btn btn-sm btn-info mr-2 mb-2" href="<?php echo base_url('fakultas/print') ?>"><i class="fa fa-print"></i> Print</a>

        <?php echo form_open('administrator/fakultas/search') ?>
            <input class="form-control mb-2" type="text" name="keyword" placeholder="Search">
            <button class="btn btn-secondary mb-2" type="submit">Cari</button>
        <?php echo form_close() ?>
    </div>

    <table class="table table-bordered table-hover">
        <tr class="thead-light">
            <th>NO</th>
            <th>KODE FAKULTAS</th>
            <th>NAMA FAKULTAS</th>
            <th colspan="2"><i class="fa fa-cogs"></i></th>
        </tr>

        <?php 
            $no = 1;
            foreach ($fakultas as $fks) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $fks->kode_fakultas ?></td>
                <td><?php echo $fks->nama_fakultas ?></td>
                <td width="20px"><?php echo anchor('administrator/fakultas/update/'.$fks->id_fakultas,
                '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                <td width="20px" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')"><?php echo anchor('administrator/fakultas/delete/'.$fks->id_fakultas,
                '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>