  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Setting Profile</h1>
      <?php echo $this->session->flashdata('notif'); ?>
      <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Content Column -->
      <div class="col-lg-12 mb-4">
        
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#personal" data-toggle="tab">Personal Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#update" data-toggle="tab">Update Profile</a>
          </li>

        </ul>

        <!-- Tab Panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="personal">
            <br>
            <img class="img-profile rounded-circle" src="<?php echo base_url('upload/user/'.$this->session->userdata['image'])?>" width="150px"> <br>
            <div class="dropdown-divider"></div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <?php
                    
                    foreach($data_user as $hasil){ 
                ?>
                <tr>
                  <td width="150px">Username</td>
                  <td width="20px"> : </td>
                  <td><?php echo $hasil->username ?></td>
                </tr>
                    
               
                
                <tr>
                  <td width="150px">Password</td>
                  <td width="20px"> : </td>
                  <td><?php echo $hasil->password ?></td>
                </tr>
                <tr>
                  <td width="150px">Level</td>
                  <td width="20px"> : </td>
                  <td><?php echo $hasil->level ?></td>
                </tr>
                <?php } ?>
                
              </table>
            </div>
          </div>

          <div class="tab-pane container fade" id="update">
            <div class="card-body">
              <div class="col-md-12">
              <?php echo form_open_multipart('admin/setting/update') ?>

              <div class="form-group">
                    <input type="hidden" value="<?php echo $hasil->id_user ?>" name="id_user" value="" class="form-control" placeholder="Masukkan Username">
                </div>
                
                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Username</label>
                    <input type="text" value="<?php echo $hasil->username ?>" name="username" class="form-control" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Password</label> 
                    <input type="password" value="" name="password" class="form-control" placeholder="Masukkan Password">
                </div>

                <div class="form-group">
                  <label for="name" class="m-0 font-weight-bold text-dark">Foto</label>
                  <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                      type="file" name="image" />
                  <input type="hidden" name="old_image" value="<?php echo $hasil->image ?>" />
                  <div class="invalid-feedback">
                    <?php echo form_error('image') ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-bars"> </span> Update </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <!-- /.container-fluid -->
