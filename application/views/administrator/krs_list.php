<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Kartu Rencana Studi (KRS)
    </div>

    <center class="mb-3">
        <legend class="mt-3">
            <strong>KARTU RENCANA STUDI</strong>
        </legend>
        <table>
            <tr>
                <td><strong>NIM</strong></td>
                <td>&nbsp;: <?php echo $nim ?></td>
            </tr>

            <tr>
                <td><strong>NAMA LENGKAP</strong></td>
                <td>&nbsp;: <?php echo $nama_lengkap ?></td>
            </tr>

            <tr>
                <td><strong>NAMA JURUSAN</strong></td>
                <td>&nbsp;: <?php echo $nama_jurusan ?></td>
            </tr>

            <tr>
                <td><strong>TAHUN AKADEMIK (SEMESTER)</strong></td>
                <td>&nbsp;: <?php echo $tahun_akademik.'&nbsp;('.$semester.')' ?></td>
            </tr>
        </table>
    </center>

        <?php echo anchor('administrator/krs/tambah_krs/'.$nim.'/'.$id_akademik,'<button class="btn btn-sm btn-primary mr-2 mb-2"><i class="fa fa-plus fa-sm"></i> Tambah Data KRS</button>') ?>
        <a class="btn btn-sm btn-info mr-2 mb-2" href="<?php echo base_url('krs/print') ?>"><i class="fa fa-print"></i> Print</a>
    <table class="table table-bordered table-hover">
        <tr class="thead-light">
            <th>NO</th>
            <th>KODE MATA KULIAH</th>
            <th>NAMA MATA KULIAH</th>
            <th>SKS</th>
            <th colspan="2"><i class="fa fa-cogs"></i></th>
        </tr>

        <?php 
            $no = 1;
            $jumlahSks = 0;
            foreach($krs_data as $krs) : ?>

            <tr>
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $krs->kode_matakuliah ?></td>
                    <td><?php echo $krs->nama_matakuliah ?></td>
                    <td><?php echo $krs->sks; $jumlahSks+=$krs->sks ?></td>
                    <td width="20px"><?php echo anchor('administrator/krs/update/'.$krs->id_krs,
                    '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                    <td width="20px" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                    <?php echo anchor('administrator/krs/delete/'.$krs->id_krs,
                    '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Jumlah SKS</strong></td>
                <td colspan="3"><strong><?php echo $jumlahSks ?></strong></td>
            </tr>
    </table>

</div>