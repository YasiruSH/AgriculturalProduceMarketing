<?php
    include_once "dbcon.php";
    $loop = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" href="/../Project/img/favicon.png" type="image/x-icon" />
  <title>SmartFairAdmin</title>


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
       
        <span class="d-none d-lg-block">SmartFair</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

      
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
    <a class="nav-link " href="adminHome.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
     <!-- End Dashboard Nav -->
 
      <li class="nav-item">
        <a class="nav-link collapsed" href="users.php">
          <i class="bi bi-person"></i>
          <span>Users</Table></Table></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="farmer.php">
          <i class="bi bi-person"></i>
          <span>Farmer</Table></Table></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="buyer.php">
          <i class="bi bi-person"></i>
          <span>Buyer</Table></Table></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="worker.php">
          <i class="bi bi-person"></i>
          <span>Worker</Table></Table></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="complaints.php">
          <i class="bi bi-person"></i>
          <span>Complaints</Table></Table></span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="/../Project/">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

      <!--<li class="nav-heading">Pages</li>-->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

              

                <div class="card-body">
                  <h5 class="card-title">Farmers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <?php
                     
                      $query = "SELECT * FROM user,role WHERE role.type = 'farmer' AND user.role = role.roleId";  
                      $query_run = mysqli_query($con, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '
            
                        
                    <div class="ps-3">
                      <h6>'.$row.'</h6>';
                      
                      ?>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                
                <div class="card-body">
                  <h5 class="card-title">Buyers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <?php
                     
                     $query = "SELECT * FROM user,role WHERE role.type = 'buyer' AND user.role = role.roleId";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
                   <div class="ps-3">
                     <h6>'.$row.'</h6>';
                     
                     ?>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->


            

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card sales-card">

     
                <div class="card-body">
                  <h5 class="card-title">Workers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <?php
                     
                     $query = "SELECT * FROM user,role WHERE role.type = 'worker' AND user.role = role.roleId";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
                   <div class="ps-3">
                     <h6>'.$row.'</h6>';
                     
                     ?>
                    

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

        </div><!-- End Right side columns -->

      </div>
    </section>

 
<hr>
<section class="section">
      <div class="row">

  <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Pie Chart -->
              <div id="pieChart" style="min-height: 300px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#pieChart")).setOption({
                    title: {
                      text: 'Referer of a Website',
                      subtext: 'Smart Fair',
                      left: 'center'
                    },
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      orient: 'vertical',
                      left: 'left'
                    },
                    series: [{
                    
                      type: 'pie',
                      radius: '50%',
                      data: [
                        {
                          
                    
                          value:<?php
                     
                     $query = "SELECT * FROM user,role WHERE role.type = 'farmer' AND user.role = role.roleId";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
              
                     '.$row.'';
                     
                     ?>,
                          name: 'Farmers'
                          
                        },
                     
                        {
                          value: <?php
                     
                     $query = "SELECT * FROM user,role WHERE role.type = 'buyer' AND user.role = role.roleId";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
              
                     '.$row.'';
                     
                     ?>,
                          name: 'Buyers'
                        },
                        {
                          
                          value: <?php
                     
                     $query = "SELECT * FROM user,role WHERE role.type = 'worker' AND user.role = role.roleId";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
              
                     '.$row.'';
                     
                     ?>,
                          name: 'Workers'
                        }
                        
                      ],
                      emphasis: {
                        itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                      }
                    }]
                  });
                });
                
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Referer of a Website</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 300px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Farmer', 'Buyer', 'Worker'],
                      datasets: [{
                        label: '',
                        data: [<?php
                     
                          $query = "SELECT * FROM user,role WHERE role.type = 'farmer' AND user.role = role.roleId";  
                          $query_run = mysqli_query($con, $query);
                          $row = mysqli_num_rows($query_run);
                          echo '
           
                       
              
                          '.$row.'';
                     
                     ?>, <?php
                     
                            $query = "SELECT * FROM user,role WHERE role.type = 'buyer' AND user.role = role.roleId";  
                            $query_run = mysqli_query($con, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '
                  
                              
                      
                            '.$row.'';
                            
                     ?>, <?php
                     
                            $query = "SELECT * FROM user,role WHERE role.type = 'worker' AND user.role = role.roleId";  
                            $query_run = mysqli_query($con, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '
                  
                              
                      
                            '.$row.'';
                     
                     ?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(75, 192, 192)',
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
                
              </script>
              <br>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

        
        </div>
    </section>


  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php include 'footeradmin.php'; ?>
><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>