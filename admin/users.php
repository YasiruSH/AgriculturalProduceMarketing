<?php
    include_once "dbcon.php";
    $loop = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AUsers</title>
 

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
        <a class="nav-link collapsed" href="adminHome.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</Table></Table></span>
        </a>
      </li><!-- End Dashboard Nav -->
 
    
      <li class="nav-item">
        <a class="nav-link " href="users.php">
          <i class="bi bi-person"></i>
          <span>Users</span>
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
      <h1>Users Details</h1>
      
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>NIC</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Role</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM user,role WHERE user.role = role.roleId");
                    while($row = mysqli_fetch_assoc($query))
                    {
                        echo "<tr>
                            <td>".$loop."</td>
                            <td>".$row['nic']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['mobile']."</td>
                            <td>".$row['type']."</td>
                            <td><a href='delete.php?id=".$row['nic']."'<button class='delete'>Remove</button></a></td>
                        </tr>";
                       ++$loop; 
                    }
                ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

                 </div>
               </div>   
            </div>
          </div>

     <!--     <div class="card">
            <div class="card-body">
              <h5 class="card-title">Small tables</h5>
             
               Small tables 
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
               End small tables -->

            </div>
          </div>

        </div>
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
  
 <!-- End Footer -->

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