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
          <h1 class="h3 mb-2 text-gray-800">BAST Online</h1>
          <p class="mb-4">Get your BAST Form here with 3 simple step!</p>

          <!-- Form Wizard -->

            <!-- Content Column -->
            <div class="col-xl-12 col-lg-8">
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Signature Here!</h6>
                </div>
                <div class="card-body">
                  <h4 class="text-gray-800" align="center"><u>BERITA ACARA, SERAH TERIMA</u></h4>
                  <div align="center"><u>No : </u><input type="text" name="nomer_surat" placeholde="Nomor Surat">
                  <br/>
                  <br/>
                  <p align="left">Bahwa berdasarkan <i>Purchase Order</i> dari <input type="text" name="nama_pt" placeholder="NAMA PERUSAHAAN"> No. <input type="text" name="no_po" placeholder="Nomor PO"> Tanggal <input type="text" name="tgl_po" placeholder="Tanggal PO"> yang ditandatangani oleh selaku yang mewakili kepada PT DES Teknologi Informasi, 
                  maka yang bertanda Langan di bawah ini : </p>
                  <br/>
                  <p align="left"> 1. Nama : <b><input type="text"></b><br/>Jabatan : <input type="text"><br/>
                  Dalam hal ini bertindak untuk dan atas nama PT DES TEKNOLOGI INFORMASI yang selanjutnya disebut sebagai PIHAK PERTAMA</p>
                  <p align="left"> 1. Nama : <b><input type="text"></b><br/>Jabatan : <input type="text"><br/>
                  Dalam hal ini bertindak untuk dan atas nama <input type="text" name="nama_pt" placeholder="NAMA PERUSAHAAN"> yang selanjutnya disebut sebagai PIHAK KEDUA</p>
                  <br/>
                  <p align="left">PIHAK PERTAMA dan PIHAK KEDUA secara bersama-sarna selanjutnya disebut sebagai "PARA PIHAK". PARA PIHAK dengan ini terlebih dahulu menerangkan hal-hal sebagai berikut : </p>
                  <br/>
                  <p align="left">1. Bahwa, sebelum ditandatangani Berita Mara ini, PIHAK PERTAMA dan PIHAK KEDUA telah mengadakan suatu hubungan kerja sama Pekerjaan Jasa berdasarkan <i>Purchase Order</i> tersebut diatas,
                  berupa "<input type="text" name="nama_po" placeholder="NAMA PROJEK">" dengan masa berlangganan salaam 12 (duabelas) bulan terhitung sejak tanggal Berita Acara Serah Terima layanan ini yang selanjutnya disebut PEKERJAAN JASA.</p>
                  <p align="left">2. Bahwa, <i>Purchase Order</i> tersebut telah mewajibkan PIHAK PERTAMA untuk melakukan PEKERJAAN JASA tersebut.</p>
                  <p align="left">3. Bahwa, setelah dilakukan pemeriksaan terhadap basil PEKERJAAN JASA tersebut, maka PIHAK KEDUA telah berkesimpulan bahwa PIHAK PERTAMA telah mengerjakan dengan baik Pekerjaan Jasa tersebut.</p>
                  <br/>
                  <p align="left">Selanjutnya untuk melaksanakan serah terima pekerjaan tersebut maka PARA PIHAK sepakat untuk</p>
                  <br/>
                  <b><u>PASAL 1</b></u>
                  <p align="left">Bahwa PIHAK PERTAMA dengan ini menyerahkan hasil PEKERJAAN JASA berupa Aktivasi <input type="text" name="nama_po" placeholder="NAMA PROJEK"> dilengkapi dengan Buku Panduan Penggunaan <input type="text" name="nama_po" placeholder="NAMA PROJEK"> dalam format elektronik PDF kepada PIHAK KEDUA, dan PIHAK KEDUA dengan ini menyatakan telah menerima dengan baik basil PEKERJAAN JASA tersebut dari PIHAK PERTAMA.</p>
                  <br/>
                  <b><u>PASAL 2</b></u>
                  <p align="left">Bahwa sesuai dengan ketentuan <i>Purchase Order</i> yang diterima dari PIHAK KEDUA, maka PIHAK PERTAMA juga berkewajiban nntuk melakukan dukungan layanan teknis selama PIHAK KEDUA berlangganan <input type="text" name="nama_po" placeholder="NAMA PROJEK"> dari PIHAK PERTAMA.</p>
                  <br/>
                  <b><u>PASAL 3</b></u>
                  <p align="left">Bahwa dengan adanya Berita Acara Serah Terima ini, maka PIHAK PERTAMA telah berhak untuk melakukan penagihan dan meaerima pembayaran sesuai dengan ketentuan yang tertuang dalam <i>Purchase Order</i> dengan batas waktu pembayaran adalah 14 hari setelah invoice diterbitkan.</p>
                  <br/>
                  <p align="left">Demikian <b>Berita Acara Serah Terima</b> ini dibuat dengan sesungguhnya dalam rangkap 2 (dua) di mana satu lembar/berkas dipegang oleh PIHAK PERTAMA dan satu lembar/berkas dipegang oleh PIHAK KEDUA yang masing-masing mempunyai kekuatan hukum yang sama.</p>
                  <br/>
                  <br/>
                  <p align="left">Semarang, 31 Oktober 2019</p>
                  <br/>
                  <div class="container">
                    <div class="row">
                      <div class="col-4">
                        <p style="text-align:center;"><b>PIHAK PERTAMA,</p>
                        <br/><br/><br/><br/><br/>
                        <p style="text-align:center;"><b><u>NAMA MANAGER</b></u></p>
                        <p style="text-align:center;">Manajer Departemen Aplikasi</p>
                        <p style="text-align:center;">PT DES Teknologi Informasi</p>
                      </div>
                    
                      <div class="col">
                        <p style="text-align:center;"><b>PIHAK KEDUA,</p>
                        <br/><br/><br/><br/><br/>
                        <p style="text-align:center;"><b><u>NAMA PELANGGAN</b></u></p>
                        <p style="text-align:center;">Jabatan</p>
                        <p style="text-align:center;">Perusahaan</p>
                      </div>
                    </div>
                  </div>
                  
                <button class="btn btn-sm btn-primary" style=margin-left:950px>NEXT
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
