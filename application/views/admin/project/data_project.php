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
          <td > <span class="badge badge-pill  <?php if($hasil->status=="New") {echo "badge-dark";} 
                                                     elseif($hasil->status=="Analisa") {echo "badge-primary";} 
                                                     elseif($hasil->status=="Desain") {echo "badge-info";} 
                                                     elseif($hasil->status=="Implementasi") {echo "badge-warning";} 
                                                     elseif($hasil->status=="Testing") {echo "badge-success";} 
                                                     elseif($hasil->status=="Selesai") {echo "badge-danger";} 
          ?>" ><?php echo $hasil->status ?></span></td>
          <td>
            <a href="<?php echo base_url() ?>admin/project/lihat/<?php echo $hasil->id_project?>" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Lihat Projek</a>
            <a href="<?php echo base_url() ?>admin/project/bast/<?php echo $hasil->id_project?>" class="btn btn-sm btn-primary"><span class="fa fa-clipboard"></span> Lihat Form Bast</a>
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

