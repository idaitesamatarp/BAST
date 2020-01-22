        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-8 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <?php foreach($project as $proses)
                { ?>
                <div class="card-body">
                  <h4 class="small font-weight-bold"> <?php echo $proses->nama_project?> <span class="float-right"><?php echo $proses->presentase ?>% </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar <?php if($proses->presentase>=0 and $proses->presentase <=20)   {echo "bg-danger";}
                                                  elseif($proses->presentase>20 and $proses->presentase<=40) {echo "bg-warning";}
                                                  elseif($proses->presentase>=41 and $proses->presentase<=60){echo "bg-dark";}
                                                  elseif($proses->presentase>=61 and $proses->presentase<=80){echo "bg-info";}
                                                  elseif($proses->presentase==100)                         {echo "bg-success";} ?>"
                    role="progressbar" style="width:<?php echo $proses->presentase ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <?php }?>
              </div>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Data Project</h4>
              <p> Pelanggan dapat melakukan tanda tangan apabila projek sudah Selesai </p>
              <?php echo $this->session->flashdata('notif') ?>
            </div>
            
            <div class="card-body"  >
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover"  id="dataTable" width="100%" cellspacing="0" >
                  <thead style="text-align: center" class="m-0 font-weight-bold text-primary">
                  <tr>
                    <th>No</th>
                    <th>Nama Project</th>
                    <th>No PO</th>
                    <th>Tanggal PO</th>
                    <th>Status Project</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody align="center" class="m-0 font-weight-bold text-dark">
                  <?php
                  $no = 1;
                  foreach($data_project as $hasil){ 
                    //print_r($hasil);\
                  ?>
                  
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama_project ?></td>
                    <td><?php echo $hasil->no_po ?></td>
                    <td><?php echo $hasil->tanggal_po ?></td> 
                    <td><span class="badge badge-pill <?php if($hasil->status=="New") {echo "badge-secondary";}
                                                  elseif($hasil->status=="Analisa")   {echo "badge-danger";}
                                                  elseif($hasil->status=="Desain") {echo "badge-warning";}
                                                  elseif($hasil->status=="Implementasi"){echo "badge-dark";}
                                                  elseif($hasil->status=="Testing"){echo "badge-info";}
                                                  elseif($hasil->status=="Selesai") {echo "badge-success";} ?>"> <?php echo $hasil->status ?> </span></td>
                    <td>
                    <a href="<?php echo base_url() ?>pelanggan/project/lihat/<?php echo $hasil->id_project?>" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Detail</a>
                    <!-- <button type="button" id="btnLihat" onClick="btnLihat()" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Detail </button> -->
                    <?php if($hasil->status=="New"){ ?>
                      <button type="button" class="btn btn-sm btn-primary" disabled="true"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan </button>
                    <?php } elseif($hasil->status=="Analisa") { ?>
                      <button type="button" class="btn btn-sm btn-primary" disabled="true"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan </button>
                    <?php } elseif($hasil->status=="Desain") { ?>
                      <button type="button" class="btn btn-sm btn-primary" disabled="true"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan </button>
                    <?php } elseif($hasil->status=="Implementasi") { ?>
                      <button type="button" class="btn btn-sm btn-primary" disabled="true"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan </button>
                    <?php } elseif($hasil->status=="Testing") { ?>
                      <button type="button" class="btn btn-sm btn-primary" disabled="true"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan </button>
                    <?php } elseif($hasil->status=="Selesai") { ?>
                      <a href="<?php echo base_url() ?>pelanggan/bast" class="btn btn-sm btn-primary"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan </a>
                    <?php } ?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->