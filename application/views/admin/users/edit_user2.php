 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open('admin/users/update2') ?>

                <div class="form-group">
                    
                    <input type="hidden" value="<?php echo $data_user->id_user ?>" name="id_user" value="" class="form-control" placeholder="Masukkan Username">
                </div>
                
                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Username</label>
                    <input type="text" value="<?php echo $data_user->username ?>" name="username" class="form-control" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Password</label> 
                    <input type="password" value="" name="password" class="form-control" placeholder="Masukkan Password">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Level</label>
                        <select name="level" class="form-control">
                            <option value="">--Pilih Level--</option>
                            <option value="admin"<?php echo $data_user->level=='admin'?'selected':'' ?>>admin</option>
                            <option value="marketing"<?php echo $data_user->level=='marketing'?'selected':'' ?>>marketing</option>
                            <option value="programmer"<?php echo $data_user->level=='programmer'?'selected':'' ?>>programmer</option>
                            <option value="pelanggan"<?php echo $data_user->level=='pelanggan'?'selected':'' ?>>pelanggan</option>
                        </select>
                        <span class="help-block"></span>
                </div>

                <button type="submit" class="btn btn-md btn-success">Update</button>
                <button class="btn btn-md btn-warning">Clear</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>