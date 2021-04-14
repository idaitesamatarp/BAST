        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Data Project</h4> <br>
              <?php echo $this->session->flashdata('notif') ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              
                <thead align="center" class="m-0 font-weight-bold text-primary">
                  <tr>
                    <th>No</th>
                    <th>Nama Project</th>
                    <th>Nama Pelanggan</th>
                    <th>No PO</th>
                    <th>Tanggal PO</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody align="center" class="m-0 font-weight-bold text-dark">
                <?php
                    $no = 1;
                    foreach($data_karyawan as $hasil){ 
                ?>

                  <tr>
        
                    <td><?php echo $hasil->id_project ?></td>
                    <td><?php echo $hasil->nama_project ?></td>
                    <td><?php echo $hasil->nama_pel ?></td>
                    <td><?php echo $hasil->no_po ?></td>
                    <td><?php echo $hasil->tanggal_po ?></td>
                    <td > <span class="badge badge-pill  <?php if($hasil->status=="New") {echo "badge-dark";} 
                                                     elseif($hasil->status=="Analisa") {echo "badge-primary";} 
                                                     elseif($hasil->status=="Desain") {echo "badge-info";} 
                                                     elseif($hasil->status=="Implementasi") {echo "badge-warning";} 
                                                     elseif($hasil->status=="Testing") {echo "badge-success";} 
                                                     elseif($hasil->status=="Selesai") {echo "badge-danger";} 
          ?>" ><?php echo $hasil->status ?></span></td>
                    <td><?php echo $hasil->harga ?></td>
                   
                    <td>
                        <a href="<?php echo base_url() ?>programmer/control_status/edit/<?php echo $hasil->id_project ?>" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a>
                        
                        <!--<a onclick="deleteConfirm('<?php echo base_url('programmer/control_status/hapus/'.$hasil->id_karyawan) ?>')"
                          href="#!" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Hapus</a-->

                          <a href="<?php echo base_url() ?>programmer/control_status/hapus/<?php echo $hasil->id_project ?>" onclick=" return confirm ('Are you sure you want to delete this item?');"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>

                <?php } ?>
                
                </tbody>
                </table>
              </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

        <!-- Modal Delete Confirmation-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="">Delete</a>
              </div>
            </div>
          </div>
        </div>

        <script>
          function deleteConfirm(url){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
          }
        </script>


      