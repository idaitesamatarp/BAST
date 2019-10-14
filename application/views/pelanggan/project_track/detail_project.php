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
                  <h6 class="m-0 font-weight-bold text-primary">Data Project</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open() ?>

                <div class="form-group">                    
                    <input type="hidden" value="<?php echo $track_project->id_project ?>" name="id_project" value="" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Project</label>
                    <input type="text" value="<?php echo $track_project->nama_project ?>" name="nama_project" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Marketing</label>
                    <input type="text" value="<?php echo $track_project->nama_marketing?>" name="id_marketing" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Programmer</label>
                    <input type="text" value="<?php echo $track_project->nama_programmer?>" name="id_programmer" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Pelanggan</label>
                    <input type="text" value="<?php echo $track_project->nama_pel ?>" name="id_pelanggan" class="form-control" readonly >
                </div>


                
                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">No PO</label>
                    <input type="text" value="<?php echo $track_project->no_po ?>" name="no_po" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Tanggal PO</label> 
                    <input type="date" value="<?php echo $track_project->tanggal_po ?>" name="tanggal_po" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Status Project</label> 
                    <input type="text" value="<?php echo $track_project->status ?>" name="status" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Harga</label> 
                    <input type="text" value="<?php echo $track_project->harga ?>" name="harga" class="form-control" readonly >
                </div>
                 <a href="<?php echo base_url() ?>pelanggan/track" class="btn btn-sm btn-primary"> <span class="fa fa-long-arrow-alt-left"></span> Back</a>
                <?php echo form_close() ?>
            </div>
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
