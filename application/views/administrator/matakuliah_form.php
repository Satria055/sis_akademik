<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Input Mata Kuliah
    </div>

    <form method="post" action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>">
        <div class="form-group">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah" placeholder="Masukkan Kode Mata Kuliah" class="form-control">
            <?php echo form_error('kode_matakuliah', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah" placeholder="Masukkan Nama Mata Kuliah" class="form-control">
            <?php echo form_error('nama_matakuliah', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>SKS</label>
            <select name="sks" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
        </div>

        <div class="form-group">
            <label>Semester</label>
            <select name="semester" class="form-control">
            <script language="javascript" type="text/javascript"> 

                for(var i=1;i<=8;i++){
                    document.write("<option>"+i+"</option>");
                }
            </script>
            </select>
        </div>

        <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
                <option value="">--Pilih Jurusan--</option>
                <?php foreach($jurusan as $jrs) : ?>
                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success mb-5"> Simpan</button>
        <a href="<?php echo base_url('administrator/matakuliah');?>" class="btn btn-primary mb-5">Kembali</a>
    </form>
</div>