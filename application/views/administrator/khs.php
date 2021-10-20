<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Kartu Hasil Studi (KHS)
    </div>

    <center class="mb-3">
        <legend class="mt-3">
            <strong>KARTU HASIL STUDI</strong>
        </legend>
        <table>
            <tr>
                <td><strong>NIM</strong></td>
                <td>&nbsp;: <?php echo $mhs_nim ?></td>
            </tr>

            <tr>
                <td><strong>NAMA LENGKAP</strong></td>
                <td>&nbsp;: <?php echo $mhs_nama ?></td>
            </tr>

            <tr>
                <td><strong>NAMA JURUSAN</strong></td>
                <td>&nbsp;: <?php echo $mhs_jurusan ?></td>
            </tr>

            <tr>
                <td><strong>TAHUN AKADEMIK (SEMESTER)</strong></td>
                <td>&nbsp;: <?php echo $thn_akademik ?></td>
            </tr>
        </table>
    </center>

        <a class="btn btn-sm btn-info mr-2 mb-2" href="<?php echo base_url('krs/print') ?>"><i class="fa fa-print"></i> Print</a>
    <table class="table table-bordered table-hover">
        <tr class="thead-light">
            <th>NO</th>
            <th>KODE MATA KULIAH</th>
            <th>NAMA MATA KULIAH</th>
            <th>SKS</th>
            <th>NILAI</th>
            <th>SKOR</th>
        </tr>

        <?php 
            $no = 1;
            $jumlahSks = 0;
            $jumlahNilai = 0;
            foreach($mhs_data as $row) : ?>

            <tr>
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $row->kode_matakuliah ?></td>
                    <td><?php echo $row->nama_matakuliah ?></td>
                    <td><?php echo $row->sks ?></td>
                    <td><?php echo $row->nilai ?></td>
                    <td><?php echo skorNilai($row->nilai, $row->sks) ?></td>
                    <?php 
                    $jumlahSks+=$row->sks;
                    $jumlahNilai+=skorNilai($row->nilai,$row->sks) ?>
            </tr>
        <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Jumlah</strong></td>
                <td><strong><?php echo $jumlahSks ?></strong></td>
                <td><strong><?php echo $jumlahNilai ?></strong></td>
            </tr>
    </table>
    Index Prestasi: <?php echo number_format($jumlahNilai/$jumlahSks,2); ?>

</div>