        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Settings Profile</h1>
            <?php echo $this->session->flashdata('msg'); ?>
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
                  <?php
                      foreach($data_pel as $hasil){ 
                    ?>
                  <img class="img-profile rounded-circle" src="<?php echo base_url('upload/user/'.$this->session->userdata['image'])?>" width="200px" height="200px">
                  <div class="dropdown-divider"></div>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                      <tr>
                        <td width="150px">Nama</td>
                        <td width="20px"> : </td>
                        <td><?php echo $hasil->nama_pel ?></td>
                      </tr>
                      <tr>
                        <td width="150px">Gender</td>
                        <td width="20px"> : </td>
                        <td><?php echo $hasil->gender ?></td>
                      </tr>
                      <tr>
                        <td width="150px">Alamat</td>
                        <td width="20px"> : </td>
                        <td><?php echo $hasil->alamat ?></td>
                      </tr>
                      <tr>
                        <td width="150px">Nomor HP</td>
                        <td width="20px"> : </td>
                        <td><?php echo $hasil->nohp ?></td>
                      </tr>
                    </table>
                  </div>
                  <?php } ?>
                </div>

                <div class="tab-pane container fade" id="update">
                  <div class="card-body">
                  <div class="col-md-12">
                    <?php echo form_open_multipart('pelanggan/account/update_pel') ?>
                      <div class="form-group">
                        <label for="text"  class="m-0 font-weight-bold text-dark">Nama</label>
                        <input type="text" name="nama_pel" value="<?php echo $hasil->nama_pel ?>" class="form-control" placeholder="Masukkan Nama">
                        <input type="hidden" value="<?php echo $hasil->id_pelanggan ?>" name="id_pelanggan">
                      </div>
                      <div class="form-group">
                            <label for="text"  class="m-0 font-weight-bold text-dark">Jenis Kelamin</label>
                                <select name="gender" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki"<?php echo $hasil->gender=='Laki-Laki'?'selected':'' ?>>Laki-Laki</option>
                                    <option value="Perempuan"<?php echo $hasil->gender=='Perempuan'?'selected':'' ?>>Perempuan</option>
                                </select>
                                <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                        <label for="text"  class="m-0 font-weight-bold text-dark">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $hasil->alamat ?>" class="form-control" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="text" class="m-0 font-weight-bold text-dark">No HP</label>
                        <input type="text" name="nohp" value="<?php echo $hasil->nohp ?>" class="form-control"  placeholder="Masukkan No HP" >
                      </div>
                      <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-bars"> </span> Update </button>
                      <button type="reset" class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
                      <?php echo form_close() ?>                    
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->