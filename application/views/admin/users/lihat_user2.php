 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data User</h4>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open() ?>

                <div class="form-group">                    
                    <input type="hidden" value="<?php echo $data_user2->id_user ?>" name="id_user" value="" class="form-control" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Pelanggan</label>
                    <input type="text" value="<?php echo $data_user2->nama_pel ?>" name="nama_kar" class="form-control" placeholder="Masukkan Username" readonly>
                </div>
                
                
                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Username</label>
                    <input type="text" value="<?php echo $data_user2->username ?>" name="username" class="form-control" placeholder="Masukkan Username" readonly>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Password</label> 
                    <input type="password" value="<?php echo $data_user2->password ?>" name="password" class="form-control" placeholder="Masukkan Password" readonly>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Level</label>
                        <select name="level" class="form-control" readonly>
                            <option value="">--Pilih Level--</option>
                            <option value="admin"<?php echo $data_user2->level=='admin'?'selected':'' ?>>admin</option>
                            <option value="marketing"<?php echo $data_user2->level=='marketing'?'selected':'' ?>>marketing</option>
                            <option value="programmer"<?php echo $data_user2->level=='programmer'?'selected':'' ?>>programmer</option>
                            <option value="pelanggan"<?php echo $data_user2->level=='pelanggan'?'selected':'' ?>>pelanggan</option>
                        </select>
                        <span class="help-block"></span>
                </div>

                <button class="btn btn-md btn-info" href="<?php echo base_url('admin/users') ?>"><i class="fas fa-arrow-left"></i>  Back </button>

                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>