<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Data Project</h4> <br>
    <?php echo $this->session->flashdata('notif') ?>
  </div>
  <div class="card-body"  >
    <div class="table-responsive"  > 
      <table class="table table-striped table-bordered table-hover"  id="dataTable" width="100%" cellspacing="0" >
      <div class="pull-right"><a href="<?php echo base_url() ?>marketing/project/tambah"  class="btn btn-sm btn-success" ><span class="fa fa-plus"></span> Buat Project Baru </a></div> <br>
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
            //print_r($hasil);
      ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $hasil->nama_project ?></td>
          <td><?php echo $hasil->no_po ?></td>
          <td><?php echo $hasil->tanggal_po ?></td> 
          <td > <span class="badge badge-pill badge-danger" ><?php echo $hasil->status ?></span></td>
          <td>
                <a href="<?php echo base_url() ?>marketing/project/lihat/<?php echo $hasil->id_project?>" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Detail</a>
                <a onclick="deleteConfirm('<?php echo base_url('marketing/project/hapus/'.$hasil->id_project) ?>')"
                  href="#!" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Hapus</a>
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
      <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
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