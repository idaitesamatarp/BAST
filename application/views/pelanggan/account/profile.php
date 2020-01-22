        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            <?php echo $this->session->flashdata('msg'); ?>
            <?php echo $this->session->flashdata('notif'); ?>
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
              </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->