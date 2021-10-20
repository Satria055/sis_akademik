<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Form Updat Mata Kuliah
    </div>

    <?php foreach($matakuliah as $mk) : ?>
        <form method="post" action="<?php echo base_url('administrator/matakuliah/update_aksi') ?>">
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="hidden" name="kode_matakuliah" class="form-control" value="<?php echo $mk->kode_matakuliah ?>">
                <input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $mk->nama_matakuliah ?>">
            </div>

            <div class="form-group">
            <label>SKS</label>
                <select name="sks" class="form-control">
                    <option><?php echo $mk->sks ?></option>
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
                <option><?php echo $mk->semester; ?></option>
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
                    <option value="<?php echo $mk->nama_jurusan ?>"><?php echo $mk->nama_jurusan; ?></option>

                    <?php foreach($jurusan as $jrs) : ?>
                        <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?php echo base_url('administrator/matakuliah');?>" class="btn btn-primary">Kembali</a>
        </form>
    <?php endforeach; ?>
</div>