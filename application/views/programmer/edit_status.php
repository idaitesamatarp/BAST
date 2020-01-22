 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-15">
            <h6 class="m-0 font-weight-bold text-dark">Data Karyawan</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
            <?php echo form_open_multipart('programmer/control_status/update') ?>


              <div class="form-group">
                <input type="hidden" name="id_project" value="<?php echo $data_karyawan->id_project ?>" class="form-control" placeholder="Masukkan ID" disabled>
                <input type="hidden" value="<?php echo $data_karyawan->id_project ?>" name="id_project" >
              </div>

               <div class="form-group">
                <label for="text">Nama Project</label>
                <input type="text" name="nama_project" value="<?php echo $data_karyawan->nama_project ?>" class="form-control" placeholder="Masukkan Nama"disabled>
                <input type="hidden" value="<?php echo $data_karyawan->nama_project ?>" name="nama_project" >
              </div>

              <div class="form-group">
                <label for="text">Nomor Purechase Order</label>
                <input type="text" name="no_po" value="<?php echo $data_karyawan->no_po ?>" class="form-control" placeholder="Masukkan Nama"disabled>
                <input type="hidden" value="<?php echo $data_karyawan->no_po ?>" name="no_po" >
              </div>
              <div class="form-group">
                <label for="text">Tanggal Purechase Order</label>
                <input type="date" name="tanggal_po" value="<?php echo $data_karyawan->tanggal_po ?>" class="form-control" disabled >
              </div>
              <div class="form-group">
                <label for="text">Status</label>  <br>
                    <select name="status" class="form-control">
                        <option value="New"<?php echo $data_karyawan->status=='New'?'selected':'' ?>>New</option>
                        <option value="Analisa"<?php echo $data_karyawan->status=='Analisa'?'selected':'' ?>>Analisa</option>
                        <option value="Desain"<?php echo $data_karyawan->status=='Desain'?'selected':'' ?>>Design</option>
                        <option value="Implementasi"<?php echo $data_karyawan->status=='Implementasi'?'selected':'' ?>>Implementasi</option>
                        <option value="Testing"<?php echo $data_karyawan->status=='Testing'?'selected':'' ?>>Testing</option>
                        <option value="Selesai"<?php echo $data_karyawan->status=='Selesai'?'selected':'' ?>>Selesai</option>
                    </select>
              </div>
              <!-- <div class="form-group">
                <label for="text">Presentase</label>
          
                  <input type="number" name="presentase" 
                
                    value="<?php echo $data_karyawan->presentase=="0"?>" class="form-control"  readonly
                  } 
                  elseif(status="Analisa")
                  {
                    value="<?php echo $data_karyawan->presentase=="20"?>" class="form-control"  readonly
                  }
                  elseif(status="Desain")
                  {
                    value="<?php echo $data_karyawan->presentase=="40"?>" class="form-control"  readonly
                  }
                  elseif(status="Implementasi")
                  {
                    value="<?php echo $data_karyawan->presentase=="60"?>" class="form-control"  readonly
                  }
                  elseif(status="Testing")
                  {
                    value="<?php echo $data_karyawan->presentase=="80"?>" class="form-control"  readonly
                  }
                  elseif(status="Selesai")
                  {
                    value="<?php echo $data_karyawan->presentase=="100"?>" class="form-control"  readonly
                  }
                  else
                  {
                    value= "100"
                  }
            
                  >
              </div> -->
          
              <div class="form-group">
                <label for="text">Harga</label>
                <input type="number" name="harga" value="<?php echo $data_karyawan->harga ?>" class="form-control" disabled >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">Clear</button>
                <?php echo form_close() ?>
         
            </div>
        </div>
    </div>
</div>