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
     
      <thead align="center" class="m-0 font-weight-bold text-primary">
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

