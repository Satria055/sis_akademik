<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        TAHUN AKADEMIK
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="form-inline my-2 my-lg-0">

        <?php echo anchor('administrator/tahun_akademik/tambah_tahun_akademik', '<button class="btn btn-sm btn-primary mr-2 mb-2"><i class="fa fa-plus fa-sm"></i> Tambah Tahun Akademik</button>') ?>
        <a class="btn btn-sm btn-info mr-2 mb-2" href="<?php echo base_url('tahun_akademik/print') ?>"><i class="fa fa-print"></i> Print</a>

        <?php echo form_open('administrator/tahun_akademik/search') ?>
        <input class="form-control mb-2" type="text" name="keyword" placeholder="Search">
        <button class="btn btn-secondary mb-2" type="submit">Cari</button>
        <?php echo form_close() ?>
    </div>

    <table class="table table-bordered table-hover">
        <tr class="thead-light">
            <th>NO</th>
            <th>TAHUN AKADEMIK</th>
            <th>SEMESTER</th>
            <th>STATUS</th>
            <th colspan="2"><i class="fa fa-cogs"></i></th>
        </tr>

        <?php 
            $no = 1;
            foreach($tahun_akademik as $takad) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $takad->tahun_akademik ?></td>
                <td><?php echo $takad->semester ?></td>
                <td><?php echo $takad->status ?></td>
                <td width="20px"><?php echo anchor('administrator/tahun_akademik/update/'.$takad->id_akademik,
                '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                <td width="20px" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                <?php echo anchor('administrator/tahun_akademik/delete/'.$takad->id_akademik,
                '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>

    </table>
</div>