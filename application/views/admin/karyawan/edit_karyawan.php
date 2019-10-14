 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Karyawan</h4> 
           
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open('admin/karyawan/update') ?>

              <div class="form-group">
                <label for="text" class="m-0 font-weight-bold text-dark">NIK</label>
                <input type="text" name="nik"  value="<?php echo $data_karyawan->nik ?>" class="form-control" placeholder="Masukkan NIK">
                <input type="hidden" value="<?php echo $data_karyawan->id_karyawan ?>" name="id_karyawan">
              </div>

              <div class="form-group">
                <label for="text" class="m-0 font-weight-bold text-dark">Nama</label>
                <input type="text" name="nama_kar" value="<?php echo $data_karyawan->nama_kar ?>" class="form-control" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label for="text" class="m-0 font-weight-bold text-dark">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data_karyawan->alamat ?>" class="form-control" placeholder="Masukkan Alamat">
              </div>

              <div class="form-group">
                <label for="text" class="m-0 font-weight-bold text-dark">No HP</label>
                <input type="text" name="nohp" value="<?php echo $data_karyawan->nohp ?>" class="form-control"  placeholder="Masukkan No HP" >
              </div>

              <div class="form-group">
								<label for="name" class="m-0 font-weight-bold text-dark">Foto</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $data_karyawan->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

              <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-bars"> </span> Update </button>
              <button type="reset" class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
              <button class="btn btn-md btn-info" href="<?php echo site_url('admin/karyawan/') ?>"><i class="fas fa-arrow-left"></i>  Back </button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>