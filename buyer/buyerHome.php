<?php
    include_once "database/connection.php";
    $name;
    session_start();
    $id = $_SESSION['uid'];

    $query = mysqli_query($con,"SELECT * FROM user WHERE nic='$id'");
    $row = mysqli_fetch_assoc($query);
    $name = $row['name'];



?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:26:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Smart Fair</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="/../Project/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="/../Project/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="/../Project/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/../Project/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/../Project/css/responsive.css">
    <!-- calendar -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
                                <a href="index.html"><img src="/../Project/img/logo-2.png" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                    <li><a href="/../Project/index.php">Home</a></li>
                                        <li><a href="/../Project/about.php">About</a></li>
                                        <li><a href="bshop.php">Shop</a></li>
                                        <li><a href="/../Project/contact.php">Contact</a></li>
                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="/../Project/login.php"><i class="icon-user"></i></a>   
                                </li>
                            </ul>
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
                    <a href="/../Project/index.php"><img src="/../Project/img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close"></button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="/../Project/index.php">Home</a></li>
                    <li><a href="/../Project/about.php">About</a></li>
                    <li><a href="/../Project/shop.php">Shop</a></li>
                    <li><a href="/../Project/contact.php">Contact</a></li>
                </ul>
            </div>   
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->
    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/../Project/img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            
                            <h1 class="section-title white-color">Buyer Home</h1>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

     <!-- WISHLIST AREA START -->
     <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <br>
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-toggle="tab" href="#dashboard">Dashboard <i class="fas fa-home"></i></a>
                                            <a href="bshop.php">Shop <i class="fas fa-arrow-down"></i></a>
                                            <a data-toggle="tab" href="#add">Buy Product <i class="fas fa-file-alt"></i></a>
                                            
                                           
                                          
                                          
                
                                            
                                            <a href="/../Project/">Logout <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="dashboard">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong><?php echo $name; ?></strong> </p>
                                                <p>From your account dashboard you can view your <span>works</span>.</p>
                                            </div>
                                                  
                                        </div>
                                       
                                       
                                        <div class="tab-pane fade" id="add">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Item ID</th>
                                                                <th>Item Name</th>
                                                                <th>Farmer Name</th>
                                                                <th>Qty</th> 
                                                                <th>Order Date</th>
                                                            
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $loop = 1;

                                                            $query = mysqli_query($con, "SELECT * FROM boughtitems,product,user WHERE product.p_id = boughtitems.itemid AND boughtitems.farmerId  = user.nic AND boughtitems.nic = '$id'");
                                                            //$query = mysqli_query($con, "SELECT * FROM user,boughtitems WHERE user.nic =boughtitems.nic AND product.nic = '$id'");
                                                            /*if($query){*/
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                echo '
                                                                    <tr>
                                                                        <td>'.$loop.'</td>
                                                                        <td>'.$row['itemid'].'</td>
                                                                        <td>'.$row['p_name'].'</td>
                                                                        <td>'.$row['name'].'</td>                              
                                                                        <td>'.$row['qty'].'</td>                             
                                                                        <td>'.$row['date'].'</td>        
                                                                    </tr>';
                                                                ++$loop; 
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
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->



<br><br><br><br><br>
   

    
    <!-- FOOTER AREA START -->
    <?php include 'buyerfooter.php'; ?>
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="/../Project/js/plugins.js"></script>
    <!-- Contact Form -->
    <script src="/../Project/js/contact.js"></script>
    <!-- Main JS -->
    <script src="/../Project/js/main.js"></script>
    <!-- calendar -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("input[type=date]", {});
        </script>
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:26:47 GMT -->
</html>

