<style>
		
		#btnSaveSign {
			color: #fff;
			background: #f99a0b;
			padding: 5px;
			border: none;
			border-radius: 5px;
			font-size: 20px;
			margin-top: 10px;
		}
		#signArea{
			width:304px;
			margin: 15px auto;
		}
		.sign-container {
			width: 90%;
			margin: auto;
		}
		.sign-preview {
			width: 150px;
			height: 50px;
			border: solid 1px #CFCFCF;
			margin: 10px 5px;
		}
		.tag-ingo {
			font-family: cursive;
			font-size: 12px;
			text-align: left;
			font-style: oblique;
		}
		.center-text {
			text-align: center;
		}
</style>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Form Wizard -->

            <!-- Content Column -->
            <div class="col-xl-12 col-lg-8">
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-body">
                  <h4 class="text-gray-800" align="center"><u>BERITA ACARA SERAH TERIMA</u></h4>
                  <div align="center"><b>No : <?php echo $data_form->no_po?>/<?php echo $data_form->nama_project?>/<?php echo $data_form->perusahaan?>/<?php echo date('m', strtotime($data_form->tanggal_po))?>/<?php echo date('Y', strtotime($data_form->tanggal_po))?> </b>
                  <br/>
                  <br/>
                    <br>
                  <p align="left">Bahwa berdasarkan <i>Purchase Order</i> dari <b><?php echo $data_form->nama_pel?></b> No. <?php echo $data_form->no_po?>/DESAPPS/<?php echo $data_form->perusahaan?>/<?php echo date('m', strtotime($data_form->tanggal_po))?>/<?php echo date('Y', strtotime($data_form->tanggal_po))?>  Tanggal <?php echo date("d M Y", strtotime($data_form->tanggal_po))?> yang ditandatangani oleh selaku yang mewakili kepada PT DES Teknologi Informasi, 
                  maka yang bertanda tangan di bawah ini : </p>
                  <br/>
                  <p align="left"> 1. Nama : <b><?php echo $data_form->nama_marketing?></b><br/>Jabatan : Marketing Aplikasi<br/>
                  Dalam hal ini bertindak untuk dan atas nama PT DES TEKNOLOGI INFORMASI yang selanjutnya disebut sebagai PIHAK PERTAMA</p>
                  <p align="left"> 2. Nama : <b><?php echo $data_form->nama_pel?></b><br/>Jabatan : <?php echo $data_form->jabatan?><br/>
                  Dalam hal ini bertindak untuk dan atas nama <?php echo $data_form->perusahaan?> yang selanjutnya disebut sebagai PIHAK KEDUA</p>
                  <br/>
                  <p align="left">PIHAK PERTAMA dan PIHAK KEDUA secara bersama-sarna selanjutnya disebut sebagai "PARA PIHAK". PARA PIHAK dengan ini terlebih dahulu menerangkan hal-hal sebagai berikut : </p>
                  <br/>
                  <p align="left">1. Bahwa, sebelum ditandatangani Berita Mara ini, PIHAK PERTAMA dan PIHAK KEDUA telah mengadakan suatu hubungan kerja sama Pekerjaan Jasa berdasarkan <i>Purchase Order</i> tersebut diatas,
                  berupa "<?php echo $data_form->nama_project?>" dengan masa berlangganan salaam 12 (duabelas) bulan terhitung sejak tanggal Berita Acara Serah Terima layanan ini yang selanjutnya disebut PEKERJAAN JASA.</p>
                  <p align="left">2. Bahwa, <i>Purchase Order</i> tersebut telah mewajibkan PIHAK PERTAMA untuk melakukan PEKERJAAN JASA tersebut.</p>
                  <p align="left">3. Bahwa, setelah dilakukan pemeriksaan terhadap basil PEKERJAAN JASA tersebut, maka PIHAK KEDUA telah berkesimpulan bahwa PIHAK PERTAMA telah mengerjakan dengan baik Pekerjaan Jasa tersebut.</p>
                  <br/>
                  <p align="left">Selanjutnya untuk melaksanakan serah terima pekerjaan tersebut maka PARA PIHAK sepakat untuk</p>
                  <br/>
                  <b><u>PASAL 1</b></u>
                  <p align="left">Bahwa PIHAK PERTAMA dengan ini menyerahkan project PEKERJAAN JASA berupa Aktivasi <?php echo $data_form->nama_project?> dilengkapi dengan Buku Panduan Penggunaan <?php echo $data_form->nama_project?> dalam format elektronik PDF kepada PIHAK KEDUA, dan PIHAK KEDUA dengan ini menyatakan telah menerima dengan baik basil PEKERJAAN JASA tersebut dari PIHAK PERTAMA.</p>
                  <br/>
                  <b><u>PASAL 2</b></u>
                  <p align="left">Bahwa sesuai dengan ketentuan <i>Purchase Order</i> yang diterima dari PIHAK KEDUA, maka PIHAK PERTAMA juga berkewajiban nntuk melakukan dukungan layanan teknis selama PIHAK KEDUA berlangganan <?php echo $data_form->nama_project?> dari PIHAK PERTAMA.</p>
                  <br/>
                  <b><u>PASAL 3</b></u>
                  <p align="left">Bahwa dengan adanya Berita Acara Serah Terima ini, maka PIHAK PERTAMA telah berhak untuk melakukan penagihan dan meaerima pembayaran sesuai dengan ketentuan yang tertuang dalam <i>Purchase Order</i> dengan batas waktu pembayaran adalah 14 hari setelah invoice diterbitkan.</p>
                  <br/>
                  <p align="left">Demikian <b>Berita Acara Serah Terima</b> ini dibuat dengan sesungguhnya dalam rangkap 2 (dua) di mana satu lembar/berkas dipegang oleh PIHAK PERTAMA dan satu lembar/berkas dipegang oleh PIHAK KEDUA yang masing-masing mempunyai kekuatan hukum yang sama.</p>
                  <br/>
                  <br/>
                  <!-- <p align="left">Semarang, <?php echo date('d M Y', strtotime($data_form->tgl_bast))?></p> -->
                  <br/>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <p style="text-align:center;"><b>PIHAK PERTAMA,</p>
                        <img src="<?php echo base_url('doc_signs').'/'.$data_form->sign_marketing.'.png'?>">
                        <p style="text-align:center;"><b><u><?php echo $data_form->nama_marketing?></b></u></p>
                        <p style="text-align:center;">Marketing Aplikasi</p>
                        <p style="text-align:center;">PT DES Teknologi Informasi</p>
                      </div>
                    
                      <div class="col">
                        <p style="text-align:center;"><b>PIHAK KEDUA,</p>
                        <div id="signArea">
                          <div class="sig sigWrapper" style="height:auto;">
                            <div class="typed"></div>
                              <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
                            </div>
                        </div>
                        <p style="text-align:center;"><b><u><?php echo $data_form->nama_pel?></b></u></p>
                        <p style="text-align:center;"><?php echo $data_form->jabatan?></p>
                        <p style="text-align:center;"><?php echo $data_form->perusahaan?></p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="sign-container">
                  <?php
                    $image_list = glob("./doc_signs/*.png");
                    foreach($image_list as $image){
                  //echo $image;
                  ?>
                  <?php
                  }
                  ?>
                  </div>

                <button id="btnSaveSign" style="margin-left:900px" class="btn btn-sm btn-success"><span class="fa fa-check-circle"> Submit !</span></button>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->