<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('pelanggan/_partials/head')?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('pelanggan/_partials/sidebar')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('pelanggan/_partials/navbar')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Project Tables</h1>
          <p class="mb-4">Anda bisa melihat projek apa saja yang anda ingin buat bersama kami.</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Data Project</h4> <br>
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
                  foreach($track_project as $hasil){ 
                    //print_r($hasil);\
                  ?>
                  
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama_project ?></td>
                    <td><?php echo $hasil->no_po ?></td>
                    <td><?php echo $hasil->tanggal_po ?></td> 
                    <td ><span class="badge badge-pill badge-danger" ><?php echo $hasil->status ?></span></td>
                    <td>
                      <a href="<?php echo base_url() ?>pelanggan/track/lihat/<?php echo $hasil->id_project?>" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Detail</a>
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

      <!-- Footer -->
      <?php $this->load->view('pelanggan/_partials/footer')?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view('pelanggan/_partials/scrolltop')?>

  <!-- Logout Modal-->
  <?php $this->load->view('pelanggan/_partials/modal')?>

  <!-- Custom scripts for all pages-->
  <?php $this->load->view('pelanggan/_partials/js')?>

</body>

</html>
