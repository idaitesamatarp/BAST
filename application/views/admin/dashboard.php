  <!-- Page level plugins -->
  <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'assets/js/demo/chart-area-demo.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/demo/chart-pie-demo.js'?>"></script>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Earnings (This Month)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo $sharga->total_harga ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Earnings (This Year)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo $stahun->tot_tahun ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Project On Progress</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $belum_selesai ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Content Row -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Project Finished</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $status ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card  shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>

                 <?php
        foreach($chart as $data){
            $merk[] = $data->tanggal_po;
            $stok[] = (float) $data->harga;
        }
    ?>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
               <!-- Isi Chart -->
           <!--Load Area chart js-->
           <script>
 // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var ctx = document.getElementById("myAreaChart");
//console.log(ctx.length);

            var AreaChart = {
                labels : <?php echo json_encode($merk);?>,
                datasets : [
                     
                    {
                      label: "Pendapatan",
                      lineTension: 0.3,
                      backgroundColor: "rgba(78, 115, 223, 0.05)",
                      borderColor: "rgba(78, 115, 223, 1)",
                      pointRadius: 3,
                      pointBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointBorderColor: "rgba(78, 115, 223, 1)",
                      pointHoverRadius: 3,
                      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                      pointHitRadius: 10,
                      pointBorderWidth: 2,
                      data: <?php echo json_encode($stok);?>,
   
                    }
 
                ]
                 
            };
 
        var myLine = new Chart(ctx, {
  type: 'line',
  data: AreaChart,
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'Rp.' + value;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': Rp.' + tooltipItem.yLabel;
        }
      }
    }
  }
        });
         
    </script>
<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-dark">Persentase Project</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Dropdown Header:</div>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>

    
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-pie pt-4 pb-2">
        <canvas id="myPieChart"></canvas>
      </div>

              <!-- Load Pie Chart -->
<script>

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["New", "Analisa", "Desain","Implementasi","Testing","Selesai"],
    datasets: [{
      data: [ <?php echo $new?>,<?php echo $analisa?>,<?php echo $desain?>,<?php echo $implementasi?>,<?php echo $testing?>,<?php echo $selesai?>],
      backgroundColor: ['#858796','#4e73df', '#36b9cc', '#f6c23e','#1cc88a','#e74a3b'],
      hoverBackgroundColor: ['#0a244d','#0a244d', '#0a244d', '#0a244d','#0a244d','#0a244d'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
      <div class="mt-4 text-center small">
        <span class="mr-2">
          <i class="fas fa-circle text-careful"></i> New
        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-primary"></i> Analisa
        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-info"></i> Desain
        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-warning"></i> Implementasi
        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-success"></i> Testing
        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-danger"></i> Selesai
        </span>
      </div>
    </div>
  </div>
</div>
</div>




        <!-- End of Pie Chart -->

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-dark">Projects</h6>
                </div>
                <?php foreach($semua as $nama)
                { ?>

                
                <div class="card-body">
                  <h4 class="small font-weight-bold"><?php echo $nama->nama_project?> <span class="float-right"><?php echo $nama->presentase ?>%  </span></h4>
                  <div class="progress mb-10">
                    <div class="progress-bar <?php if($nama->presentase>=0 and $nama->presentase <=20)   {echo "bg-danger";}
                                                  elseif($nama->presentase>20 and $nama->presentase<=40) {echo "bg-warning";}
                                                  elseif($nama->presentase>=41 and $nama->presentase<=60){echo "bg-dark";}
                                                  elseif($nama->presentase>=61 and $nama->presentase<=80){echo "bg-info";}
                                                  elseif($nama->presentase==100)                         {echo "bg-success";}
                                                  

                    ?>" role="progressbar" style="width: <?php echo $nama->presentase ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    
                    </div>
                  </div>
                </div>
<?php } ?>
              </div>

          

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
