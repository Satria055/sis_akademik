<?php

$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('mahasiswa_model');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahun_akademik_model');

$krs = $nilai->krs_model->get_by_id($id_krs[0]);
$kode_matakuliah = $krs->kode_matakuliah;
$id_akademik = $krs->id_akademik;
?>

<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Daftar Nilai Mahasiswa
    </div>

    <center>
        <legend><strong>DAFTAR NILAI MAHASISWA</strong></legend>
        <table>
            <tr>
                <td>Kode Matakuliah</td>
                <td>: <?php echo $kode_matakuliah; ?></td>
            </tr>
        </table>
    </center>
</div>