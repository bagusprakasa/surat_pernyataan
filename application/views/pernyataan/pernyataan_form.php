<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <!-- <input type="hidden" name="id" value="<?= $id ?>"> -->
            <table class='table table-bordered'>    
                        <tr><td width='200'>Nama Siswa <?php echo form_error('nama_siswa') ?></td><td><input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" value="<?php echo $nama_siswa; ?>" /></td></tr>

                        <tr><td width='200'>NIK Siswa <?php echo form_error('nik_siswa') ?></td><td><input type="number" class="form-control" name="nik_siswa" id="nik_siswa" placeholder="NIK Siswa" value="<?php echo $nik_siswa; ?>" /></td></tr>
                        
                        <tr><td width='200'>Kelas <?php echo form_error('kelas') ?></td><td><input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" /></td></tr>
                        
                        <tr><td width='200'>Sekolah <?php echo form_error('sekolah') ?></td><td><input type="text" class="form-control" name="sekolah" id="sekolah" placeholder="Sekolah" value="<?php echo $sekolah; ?>" /></td></tr>
                        
                        <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td><textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" ></textarea></td></tr>
                        
                        <tr><td width='200'>Nama Orang Tua/Wali<?php echo form_error('nama_ortu') ?></td><td><input type="text" class="form-control" name="nama_ortu" id="nama_ortu" placeholder="Nama Orang Tua/Wali" value="<?php echo $nama_ortu; ?>" /></td></tr>
                        
                        <tr><td width='200'>NIK Orang Tua <?php echo form_error('nik_ortu') ?></td><td><input type="number" class="form-control" name="nik_ortu" id="nik_ortu" placeholder="NIK Orang Tua" value="<?php echo $nik_ortu; ?>" /></td></tr>
                        
                        <tr><td width='200'>Pekerjaan Orang Tua <?php echo form_error('pekerjaan') ?></td><td><input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan Orang Tua" value="<?php echo $pekerjaan; ?>" /></td></tr>
                        
                        <tr><td width='200'>Upload TTD <?php echo form_error('images') ?></td><td><input type="file" name="images"></td></tr>

                        <tr><td></td><td>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('pernyataan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table>
                </form>        
            </div>
</div>
</div>