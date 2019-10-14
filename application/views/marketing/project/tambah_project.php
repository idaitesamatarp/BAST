 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Project</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <?php echo form_open('marketing/project/simpan') ?>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Project</label>
                    <input type="text" name="nama_project" class="form-control" placeholder="Masukkan Nama Project">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Marketing</label>
                        <select name="id_marketing" class="form-control">

                        <option value="">--Pilih Nama Karyawan--</option>
                                <?php foreach($get_category as $row) { ?>
                                    <option value="<?php echo $row->id_user;?>"><?php echo $row->nama_kar;?></option>
                                <?php } ?>

                        </select>
                        <span class="help-block"></span>
                </div>

                <div class="form-group" class="m-0 font-weight-bold text-dark">
                    <label for="text">Nama Programmer</label>
                        <select name="id_programmer" class="form-control">
                        
                        <option value="">--Pilih Nama Programmer--</option>
                                <?php foreach($get_category2 as $row) { ?>
                                    <option value="<?php echo $row->id_user;?>"><?php echo $row->nama_kar;?></option>
                                <?php } ?>

                        </select>
                        <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Nama Pelanggan</label>
                        <select name="id_pelanggan" class="form-control">
                        
                        <option value="">--Pilih Nama Pelanggan--</option>
                                <?php foreach($get_category1 as $row) { ?>
                                    <option value="<?php echo $row->id_user;?>"><?php echo $row->nama_pel;?></option>
                                <?php } ?>

                        </select>
                        <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">No PO</label>
                    <input type="text" name="no_po" class="form-control" placeholder="Masukkan No PO">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Tanggal PO</label> 
                    <input type="date" name="tanggal_po" class="form-control" placeholder="Masukkan Tanggal PO">
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Status Project</label>
                        <select name="status" class="form-control">
                            <option value="">--Pilih Status Project--</option>
                            <option value="New">New</option>
                            <!--option value="Analisa">Analisa</option>
                            <option value="Desain">Desain</option>
                            <option value="Implementasi">Implementasi</option>
                            <option value="Testing">Testing</option>
                            <option value="Selesai">Selesai</option-->
                        </select>
                        <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="text" class="m-0 font-weight-bold text-dark">Harga</label> 
                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
                </div>

                <button type="submit" class="btn btn-md btn-success" ><span class="fa fa-save"> </span> Simpan </button>
                <button type="reset" class="btn btn-md btn-warning"><span class="fa fa-trash"></span> Clear </button>
              
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>