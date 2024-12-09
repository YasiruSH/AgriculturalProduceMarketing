<?php
    include_once "dbcon.php";
    $loop = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AFarmer</title>
 

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
        <a class="nav-link " href="farmer.php">
          <i class="bi bi-person"></i>
          <span>Farmer</span>
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
      <h1>Farmer Details</h1>
    
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
                   $loop = 1;
                    $query = mysqli_query($con, "SELECT * FROM user,role WHERE role.type = 'farmer' AND user.role = role.roleId");
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

   <!--Product-->
 

    <div class="pagetitle">
      <h1>Product Details</h1>
    
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Product ID</th>
                      <th>Name</th>
                      <th>Nic</th>
                      <th>Product Name</th>
                      <th>Catagory</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Issued Date</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $loop = 1;
                $query = mysqli_query($con, "SELECT * FROM user,product WHERE user.nic = product.nic");
                if($query){
                    while($row = mysqli_fetch_assoc($query)){
                        echo '
                            <tr>
                                <td>'.$loop.'</td>
                                <td>'.$row['p_id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['nic'].'</td>
                                <td>'.$row['p_name'].'</td>
                                <td>'.($row['category'] == "veg" ? "Vegetable" : "Fruit").'</td>
                                <td>'.$row['quantity'].'</td>
                                <td>'.$row['price'].'</td>
                                <td>'.$row['issue_date'].'</td>
                                <td><a href="delete.php?proid='.$row['p_id'].'"><button class="delete">Remove</button></a> 
                                
                            </tr>';
                            
                        // loop here
                        /* multi line comment*/    
                        ++$loop;  

                      }
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
                      text: 'Referer of a Products',
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
                     
                     $query = "SELECT * FROM product WHERE category = 'veg' ";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
              
                     '.$row.'';
                     
                     ?>,
                          name: 'Vegetables'
                          
                        },
                     
                        {
                          value: <?php
                     
                     $query = "SELECT * FROM product WHERE category = 'Frut' ";  
                     $query_run = mysqli_query($con, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '
           
                       
              
                     '.$row.'';
                     
                     ?>,
                          name: 'Fruits'
                        },
                       
                        
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

        
        </div>
    </section>


          <div class="pagetitle">
      <h1>Order Details</h1>
    
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Order ID</th>
                      <th>Item ID</th>
                      <th>Buyer Name</th>
                      <th>Qty</th> 
                      <th>Order Date</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php
                $loop = 1;
                $query = mysqli_query($con, "SELECT * FROM user,boughtitems WHERE user.nic =boughtitems.nic");
                if($query){
                    while($row = mysqli_fetch_assoc($query)){
                        echo '
                            <tr>
                                <td>'.$loop.'</td>
                                <td>'.$row['orderId'].'</td>
                                <td>'.$row['itemid'].'</td>
                                <td>'.$row['name'].'</td>                              
                                <td>'.$row['qty'].'</td>                             
                                <td>'.$row['date'].'</td>
                               
                                
                            </tr>';
                            
                        // loop here
                        /* multi line comment*/    
                        ++$loop;  

                      }
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