<?php
    include_once "dbcon.php";
    $loop = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ABuyer</title>
 

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
  
      </li>
  <li class="nav-item">
    <a class="nav-link " href="complaints.php">
      <i class="bi bi-person"></i>
      <span>Complaints</span>
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
      <h1>Customer Complaints</h1>
      
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                     
               
                      <th>Name</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th colspan='2'>Message</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
            $loop = 1;
                $query = mysqli_query($con, "SELECT * FROM complaints");
                while($row = mysqli_fetch_assoc($query))
                {
                    echo "<tr>
                        
                        <td>".$row['c_name']."</td>
                        <td>".$row['c_role']."</td>
                        <td>".$row['c_email']."</td>
                        <td>".$row['c_mobile']."</td>
                        <td colspan='2'>".$row['c_message']."</td>
                        <td><a href='https://mail.google.com/mail/'< class='edit'><b>Reply</b></button></a></td>
                        
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

   

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footeradmin.php'; ?>
  
  </footer><!-- End Footer -->

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