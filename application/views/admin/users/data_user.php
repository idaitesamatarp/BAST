<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Data User Karyawan</h4>
    <?php echo $this->session->flashdata('notif') ?>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover"  id="dataTable" width="100%" cellspacing="0">
      <div class="pull-right"><a href="<?php echo base_url() ?>admin/users/tambah/"  class="btn btn-sm btn-success" ><span class="fa fa-plus"></span> Tambah Data User </a></div> <br>
      <thead align="center" class="m-0 font-weight-bold text-primary">
        <tr>
          <th >No</th>
          <th>Nama Karyawan</th>
          <th>Foto</th>
          <th>Level</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody align="center" class="m-0 font-weight-bold text-dark">
      <?php
          $no = 1;
          foreach($data_user as $hasil){ 
            //print_r($hasil);
      ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $hasil->nama_kar ?></td>
          <td><img src="<?php echo base_url('upload/user/'.$hasil->image) ?>" width="64" /></td>
          <td><?php echo $hasil->level ?></td>
          <td>
              <a href="<?php echo base_url() ?>admin/users/edit/<?php echo $hasil->id_user?>" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a>
              
              <a onclick="deleteConfirm('<?php echo base_url('admin/users/hapus/'.$hasil->id_user) ?>')"
                href="#!" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Hapus</a>

                <a href="<?php echo base_url() ?>admin/users/lihat/<?php echo $hasil->id_user?>" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Detail</a>

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

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Data User Pelanggan</h4>
    <?php echo $this->session->flashdata('notif') ?>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover"  id="dataTable" width="100%" cellspacing="0">
      <div class="pull-right"><a href="<?php echo base_url() ?>admin/users/tambah1/"  class="btn btn-sm btn-success" ><span class="fa fa-plus"></span> Tambah Data User </a></div> <br>
      <thead align="center" class="m-0 font-weight-bold text-primary">
        <tr>
          <th>No</th>
          <th>Nama Pelanggan</th>
          <th>Foto</th>
          <th>Level</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody align="center" class="m-0 font-weight-bold text-dark">
      <?php
          $no = 1;
          foreach($data_user1 as $hasil){ 
      ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $hasil->nama_pel ?></td>
          <td><img src="<?php echo base_url('upload/user/'.$hasil->image) ?>" width="64" /></td>
          <td><?php echo $hasil->level ?></td>
          <td>
              <a href="<?php echo base_url() ?>admin/users/edit/<?php echo $hasil->id_user ?>" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a>
              
              <a onclick="deleteConfirm('<?php echo base_url('admin/users/hapus/'.$hasil->id_user) ?>')"
                href="#!" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Hapus</a>

                <a href="<?php echo base_url() ?>admin/users/lihat2/<?php echo $hasil->id_user?>" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Detail</a>
                
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


