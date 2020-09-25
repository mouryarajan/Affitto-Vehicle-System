<?php
if(!isset($this->session->userdata["adminlog"]))
{
  redirect("/LogController/index");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
 
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/vertical-layout-dark/style.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'header.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     <?php include 'rightside.php';?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'leftside.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin d-flex flex-column">
              <div class="row">
                <div class="col-md-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-primary mb-4">
                        <i class="mdi mdi-account-multiple mdi-36px"></i><br>
                        <a href="<?php echo base_url(); ?>index.php/UserController/LoadAllUser" class="font-weight-medium mt-2">Customers</a>
                      </div>
                      <h1 class="font-weight-light"><?php echo $totalCustomer; ?></h1>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-danger mb-4">
                        <i class="mdi mdi-chart-pie mdi-36px"></i><br>
                        <a href="<?php echo base_url(); ?>index.php/BookingController/LoadAllBooking" class="font-weight-medium mt-2">Booking</a>
                      </div>
                      <h1 class="font-weight-light"><?php echo $totalBooking; ?></h1>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-info mb-4">
                        <i class="mdi mdi-car mdi-36px"></i><br>
                        <a href="<?php echo base_url(); ?>index.php/VehicleController/LoadApprov" class="font-weight-medium mt-2">Vehicle</a>
                      </div>
                      <h1 class="font-weight-light"><?php echo $totalVehicle; ?></h1>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-success mb-4">
                        <i class="mdi mdi-verified mdi-36px"></i><br>
                        <a href="<?php echo base_url(); ?>index.php/UserController/LoadAgency" class="font-weight-medium mt-2">Agency</a>
                      </div>
                      <h1 class="font-weight-light"><?php echo $totalAgency; ?></h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row flex-grow-1">
              <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                  <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Booking chart</h5>
                    <canvas id="barChart"></canvas>
                   </div>
                  </div>
                </div>
                <div class="col-lg-6 stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="d-flex justify-content-between align-items-start">
                      <h5 class="card-title">Vehicle chart</h5>
                    <canvas id="doughnutChart"></canvas>
                 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card d-flex flex-column justify-content-between">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <h4 class="card-title">Total Profit</h4>
                   
                  </div>
                  <h4 class="font-weight-light">Total revenue</h4>
                  <h1 class="font-weight-normal mb-0">10000</h1>
                  <div class="d-md-flex justify-content-start mt-5">
                    <div class="mb-3 mb-lg-0">
                      <h4 class="font-weight-light text-primary">+40%</h4>
                      <p class="text-primary mb-0">Growth</p>
                    </div>
                    <div class="mb-3 mb-lg-0 ml-md-4">
                      <h4 class="font-weight-light text-danger">2.5%</h4>
                      <p class="text-danger mb-0">Refund</p>
                    </div>
                    <div class="ml-md-4">
                      <h4 class="font-weight-light text-info">+23.6%</h4>
                      <p class="text-info mb-0">Online</p>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted">Lorem ipsum doller sit amete Lorem ipsum doller sit amete Lorem ipsum doller sit amete Lorem ipsum doller sit amete</p>
                </div>
                <div class="card-body px-0 pb-0 d-flex flex-column justify-content-between">
                  <canvas id="statistics-chart-dark" class="mt-auto"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Calendar</h4>
                  <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="row">
                <br>                
                </div>
                <h4 class="card-title">Best sellers</h4>
                  <div class="table-responsive">
                  </div>
              
              <div class="row">
              <div class="col-12">
                 <div class="table-responsive">
              </div>
                    <table id="order-listing" class="table">                                     
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>                            
                        <th>Booking Date</th>
                      </tr>
                    </thead>
                     <tbody>
                     <?php
                        $count=1;
                        foreach($BookingData as $item)
                      {?>
                          <tr>
                            <td><?php echo $count;$count++;?></td>
                            <td><?php echo ucwords($item->FirstName);?></td>                            
                            <td><?php echo ucwords($item->BookingDate);?></td>
                           </tr>
                      <?php
                      } 
                      ?>  

                     </tbody>
                    </table>                  
                </div>
              </div> 
             </div>
              </div>
            </div>
          </div>
        
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php include 'footer.php';?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>js/template.js"></script>
  <script src="<?php echo base_url(); ?>js/settings.js"></script>
  <script src="<?php echo base_url(); ?>js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script>
  $(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: [<?php $red=$this->db->query("select MONTHNAME(BookingDate) as Mname from tbl_booking group by MONTH(BookingDate)"); foreach($red->result() as $r) { ?> "<?php  echo $r->Mname; ?>", <?php } ?> ],
    datasets: [{
      label: '# of Votes',
      data: [<?php $red=$this->db->query("select COUNT(*) as TB from tbl_booking group by MONTH(BookingDate)"); foreach($red->result() as $r) {  echo $r->TB.","; } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var multiLineData = {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        label: 'Dataset 1',
        data: [12, 19, 3, 5, 2, 3],
        borderColor: [
          '#587ce4'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 2',
        data: [5, 23, 7, 12, 42, 23],
        borderColor: [
          '#ede190'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 3',
        data: [15, 10, 21, 32, 12, 33],
        borderColor: [
          '#f44252'
        ],
        borderWidth: 2,
        fill: false
      }
    ]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  var doughnutPieData = {
    datasets: [{
      data: [<?php $resd=$this->db->query("select TypeName,(select COUNT(*) from tbl_vehicle where TypeId=tbl_type.TypeId)as tc from tbl_type"); foreach($resd->result() as $v) { echo $v->tc.","; } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
     <?php $resd=$this->db->query("select TypeName,(select COUNT(*) from tbl_vehicle where TypeId=tbl_type.TypeId)as tc from tbl_type"); foreach($resd->result() as $v) { ?>
      '<?php echo $v->TypeName ?>',
     <?php } ?>
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  var areaData = {
    labels: ["2013", "2014", "2015", "2016", "2017"],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: true, // 3: no fill
    }]
  };

  var areaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }

  var multiAreaData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Facebook',
        data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
        borderColor: ['rgba(255, 99, 132, 0.5)'],
        backgroundColor: ['rgba(255, 99, 132, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Twitter',
        data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
        borderColor: ['rgba(54, 162, 235, 0.5)'],
        backgroundColor: ['rgba(54, 162, 235, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Linkedin',
        data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
        borderColor: ['rgba(255, 206, 86, 0.5)'],
        backgroundColor: ['rgba(255, 206, 86, 0.5)'],
        borderWidth: 1,
        fill: true
      }
    ]
  };

  var multiAreaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    elements: {
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  var scatterChartData = {
    datasets: [{
        label: 'First Dataset',
        data: [{
            x: -10,
            y: 0
          },
          {
            x: 0,
            y: 3
          },
          {
            x: -25,
            y: 5
          },
          {
            x: 40,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Second Dataset',
        data: [{
            x: 10,
            y: 5
          },
          {
            x: 20,
            y: -30
          },
          {
            x: -25,
            y: 15
          },
          {
            x: -10,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }
    ]
  }

  var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: 'linear',
        position: 'bottom'
      }]
    }
  }
  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }

  
  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  
});
  </script>
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>js/dashboard.js"></script>
  
</body>

</html>

