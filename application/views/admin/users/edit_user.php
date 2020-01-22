 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open_multipart('admin/users/update') ?>

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
					<label for="name" class="m-0 font-weight-bold text-dark">Foto</label>
					<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
					     type="file" name="image" />
					<input type="hidden" name="old_image" value="<?php echo $data_user->image ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('image') ?>
					</div>
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

                <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-bars"> </span> Update </button>
              <button type="reset" class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
              <button class="btn btn-md btn-info" href="<?php echo site_url('admin/users') ?>"><i class="fas fa-arrow-left"></i>  Back </button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>