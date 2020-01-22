        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Projects Dashboard</h1>
          <p class="mb-4">Anda bisa melihat projek yang anda buat bersama kami.</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Data Project</h4>
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
                      <a href="<?php echo base_url() ?>pelanggan/bast" class="btn btn-sm btn-primary"><span class="fas fa-fw fa-clipboard-check"></span> Tanda Tangan</a>
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