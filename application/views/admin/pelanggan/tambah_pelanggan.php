 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open('admin/pelanggan/simpan') ?>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama</label>
                    <input type="text" name="nama_pel" class="form-control" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Jenis Kelamin</label>
                        <select name="gender" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">No HP</label> 
                    <input type="text" name="nohp" class="form-control" placeholder="Masukkan NO HP">
                </div>

                <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-save"> </span> Simpan </button>
              <button type="reset" class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
              
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>