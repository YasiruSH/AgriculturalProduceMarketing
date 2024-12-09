<?php
  include_once "database/connection.php";

  $account = 0;
  $noAccount = 0;
  $passwordNotMatch = 0;

  // farmer registration
  if(isset($_POST['farmerReg'])){
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE nic='$nic'");
    $rows = mysqli_num_rows($query);

    if($rows > 0){
      $account = 1;
    }
    else{
      $query = mysqli_query($con,
        "INSERT INTO user(nic,name,email,mobile,address,password,role) VALUE('$nic','$name','$email','$contact','$address','$password','$role')"
      );
      session_start();
      $_SESSION['uid'] = $nic;
      
        if($role == '1'){
          header("location: buyer/buyerHome.php");
        }
        elseif($role == '2'){
          header("location: farmer/farmerHome.php");
        }
        elseif($role == '3'){
          header("location: worker/workerHome.php");
        }
        else{
          header("location: admin/adminHome.php");
        }
      
    }
  }

  

  // login
  else if(isset($_POST['login'])){
    $nic = $_POST['nic'];
    $password = $_POST['password'];

    $query = mysqli_query($con, 
      "SELECT * FROM user, role WHERE nic = '$nic' AND user.role = role.roleId"
    );
    $row = mysqli_fetch_assoc($query);
    $actPassword = $row['password'];
    $role = $row['type'];

    $rows = mysqli_num_rows($query);
    if($rows == 0){
      $noAccount = 1;
    }
    else{
      if($password != $actPassword){
        $passwordNotMatch = 1;
      }
      else{
        if($role == 'buyer'){
          session_start();
          $_SESSION['uid'] = $nic;
          header("location: buyer/buyerHome.php");
        }
        elseif($role == 'farmer'){
          session_start();
          $_SESSION['uid'] = $nic;
          header("location: farmer/farmerHome.php");
        }
        elseif($role == 'worker'){
          session_start();
          $_SESSION['uid'] = $nic;
          header("location: worker/workerHome.php");
        }
        else{
          session_start();
          $_SESSION['uid'] = $nic;
          header("location: admin/adminHome.php");
        }
      }
    }
  }
  
?>




<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Smart Fair</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-2">
    

        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black sticky-active-into-mobile plr--9---">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index.html"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                    <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                         
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="login.php"><i class="icon-user"></i></a>   
                                </li>
                            </ul>
                        </div>
                        <div class="mini-cart-icon">
                            <a href="shop.php"><i class="icon-shopping-cart"></i>
                                
                            </a>
                        </div>
                       
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    
    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close"></button>
            </div>
           
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>   
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                           
                            <h1 class="section-title white-color">Register Account</h1>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form method="POST" class="ltn__form-box contact-form-box">
                            <input type="text"  placeholder="NIC Number*" name ="nic" name="nic">
                            <input type="text" placeholder="Enter Name" name="name">
                            
                            <input type="email" id="email" placeholder="Email*" name="email">
                            <input type="text" id="mobile" placeholder="Mobile*" name="contact">
                            <input type="text" name="address" placeholder="Address*" name="address">
                            
                           
                                    <div class="input-item">
                                        <select class="nice-select" placeholder="Seller Or Buyer" name="role">
                                            <option selected>Select Role Type</option>
                                            <option value ="2">Farmer </option>
                                            <option value ="1">Buyer </option>
                                            <option value ="3">Worker</option>
                                           
                                        </select>
                                    </div>
                            <input type="password" id="password" placeholder="Password*" name="password"> 
                           
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit"name="farmerReg">CREATE ACCOUNT</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                          

                            <div class="go-to-btn mt-50">
                                <a href="login.php">ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

 

     <!-- FOOTER AREA START -->
     <?php include 'footer.php'; ?>
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:57 GMT -->
</html>

