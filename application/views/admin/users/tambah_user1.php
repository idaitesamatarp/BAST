 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open('admin/users/simpan1') ?>


                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Pelanggan</label>
                        <select name="id_pelanggan" id="nama_pel" class="form-control">
                        
                            <option value="">--Pilih Nama Pelanggan--</option>
                                <?php foreach($get_category1 as $row) { ?>
                                    <option value="<?php echo $row->id_pelanggan;?>"><?php echo $row->nama_pel;?></option>
                                <?php } ?>
                        </select>
                        <span class="help-block"></span>
                </div>


                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Password</label> 
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Level</label>
                        <select name="level" class="form-control">
                            <option value="">--Pilih Level--</option>
                            <option value="admin">Admin</option>
                            <option value="marketing">Marketing</option>
                            <option value="programmer">Programmer</option>
                            <option value="pelanggan">Pelanggan</option>
                        </select>
                        <span class="help-block"></span>
                </div>

                <button type="submit" class="btn btn-md btn-success"><span class="fa fa-save"> </span> Simpan </button>
                <button class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>





