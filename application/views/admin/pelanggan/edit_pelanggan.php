<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open('admin/pelanggan/update') ?>

              <div class="form-group">
                <label for="text"  class="m-0 font-weight-bold text-dark">Nama</label>
                <input type="text" name="nama_pel" value="<?php echo $data_pelanggan->nama_pel ?>" class="form-control" placeholder="Masukkan Nama">
                <input type="hidden" value="<?php echo $data_pelanggan->id_pelanggan ?>" name="id_pelanggan">
              </div>

              <div class="form-group">
                    <label for="text"  class="m-0 font-weight-bold text-dark">Jenis Kelamin</label>
                        <select name="gender" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki"<?php echo $data_pelanggan->gender=='Laki-Laki'?'selected':'' ?>>Laki-Laki</option>
                            <option value="Perempuan"<?php echo $data_pelanggan->gender=='Perempuan'?'selected':'' ?>>Perempuan</option>
                        </select>
                        <span class="help-block"></span>
                </div>

              <div class="form-group">
                <label for="text"  class="m-0 font-weight-bold text-dark">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data_pelanggan->alamat ?>" class="form-control" placeholder="Masukkan Alamat">
              </div>

              <div class="form-group">
                <label for="text" class="m-0 font-weight-bold text-dark">No HP</label>
                <input type="text" name="nohp" value="<?php echo $data_pelanggan->nohp ?>" class="form-control"  placeholder="Masukkan No HP" >
              </div>

              <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-bars"> </span> Update </button>
              <button type="reset" class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
              <button class="btn btn-md btn-info" href="<?php echo site_url('admin/pelanggan/') ?>"><i class="fas fa-arrow-left"></i>  Back </button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>