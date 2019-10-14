 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Project</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open() ?>

                <div class="form-group">                    
                    <input type="hidden" value="<?php echo $data_project->id_project ?>" name="id_project" value="" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Project</label>
                    <input type="text" value="<?php echo $data_project->nama_project?>" name="nama_project" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Marketing</label>
                    <input type="text" value="<?php echo $data_project->nama_marketing?>" name="id_marketing" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Programmer</label>
                    <input type="text" value="<?php echo $data_project->nama_programmer?>" name="id_programmer" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Pelanggan</label>
                    <input type="text" value="<?php echo $data_project->nama_pel ?>" name="id_pelanggan" class="form-control" readonly >
                </div>


                
                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">No PO</label>
                    <input type="text" value="<?php echo $data_project->no_po ?>" name="no_po" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Tanggal PO</label> 
                    <input type="date" value="<?php echo $data_project->tanggal_po ?>" name="tanggal_po" class="form-control" readonly >
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Status Project</label> 
                    <input type="text" value="<?php echo $data_project->status ?>" name="status" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Harga</label> 
                    <input type="text" value="<?php echo $data_project->harga ?>" name="harga" class="form-control" readonly >
                </div>
              
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>