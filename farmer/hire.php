<?php
  include_once "database/connection.php";

  $account = 0;
  $noAccount = 0;
  $passwordNotMatch = 0;

  session_start();
  $nic = $_SESSION['uid'];
 
  
?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:50 GMT -->
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
<div class="wrapper">

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
                                        <li><a href="/../Project/shop.php">Shop</a></li>
                                        <li><a href="/../Project/contact.php">Contact</a></li>
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
                                    <a href="farmerHome.php"><i class="fas fa-arrow-left "></i></a>   
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
                    <a href="index.php"><img src="/../Project/img/logo.png" alt="Logo"></a>
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
    
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="/../Project/img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                      
                            <h1 class="section-title white-color">Available Workers</h1>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                     <?php
                                        $loop = 1;
                                        $query = mysqli_query($con, "SELECT * FROM user,worke WHERE user.nic = worke.wNic");
                                        if($query){
                                            while($row = mysqli_fetch_assoc($query)){
                                                $nic = $row['nic'];

                                                $query2 = mysqli_query($con, "SELECT * FROM hirings WHERE workerNic = '$nic'");
                                                $row2 = mysqli_fetch_assoc($query2);

                                                if(mysqli_num_rows($query2) > 0){
                                                    if($row2['date'] == NULL){
                                                        echo '
                                                        <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                                <div class="product-img">
                                                                    <a href="product-details.html"><img src="data:image;base64,'.base64_encode($row['w_image']).'" alt="Image" ></a>
                                                                    <div class="product-badge">
                                                                       
                                                                    </div>
                                                                    <div class="product-hover-action">
                                                                        <ul>
                                                            
                                                                            <li>
                                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick_view_modal" id="itemOpen" onClick="clicked('.$nic.')">
                                                                                    <i class="fas fa-shopping-cart"></i>
                                                                                </a>
                                                                            </li>
                                                                           
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                <h2 class="product-title"> '.$row['name'].'</a></h2>
                                                                    <h2 class="product-title">Worke Name: '.$row['w_name'].'</a></h2>
                                                                    <div class="product-price">Rs.
                                                                        <span>'.$row['w_rate'].'</span>.00
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    }
                                                    else{
                                                        continue;
                                                    }
                                                }
                                                else{
                                                    echo '
                                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                                            <div class="product-img">
                                                                <a href="product-details.html"><img src="data:image;base64,'.base64_encode($row['w_image']).'" alt="Image" ></a>
                                                                <div class="product-badge">
                                                                   
                                                                </div>
                                                                <div class="product-hover-action">
                                                                    <ul>
                                                        
                                                                        <li>
                                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick_view_modal" id="itemOpen" onClick="clicked('.$nic.')">
                                                                                <i class="fas fa-shopping-cart"></i>
                                                                            </a>
                                                                        </li>
                                                                       
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                            <h2 class="product-title"> '.$row['name'].'</a></h2>
                                                                <h2 class="product-title">Worke Name: '.$row['w_name'].'</a></h2>
                                                                <div class="product-price">Rs.
                                                                    <span>'.$row['w_rate'].'</span>.00
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                }

                                }
                            }
                            
                    ?>
                                    
                                  <!-- ltn__product-item  close -->
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
                       

                       
                        
                       
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

   
    <!-- FOOTER AREA START -->
    <?php include 'farmerfooter.php'; ?>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                      <!-- ltn__product-item -->

                    <div class="modal-body">
                        
                    </div>';
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

   
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="/../Project/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="/../Project/js/main.js"></script>
    <script>
        function clicked(nic){
            $.ajax({
                type: "POST",
                url: "getValue.php",
                data: {
                    nic: nic,
                    itemid: "lol"
                },
                dataType: "text",
                success: function(response){
                    console.log(response);
                    $('.modal-body').html(response);
                }
            });
        }

        function itemBuy(nic){
            var date = $("#bookingDay").val();
            var days = $("#qty").val();
            $.ajax({
                type: "POST",
                url: "getValue.php",
                data: {
                    wNic : nic,
                    date : date,
                    dates : days
                },
                dataType: "text",
                success: function (response) {
                    var val = $.trim(response);
                    if(val == "success"){
                        alert("Successfully Booked.");
                    }
                    else{
                        alert("You Cannot book this worker.");
                    }
                }
            });
        }

    </script>
     <script>
        flatpickr("input[type=date]", {});
        </script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:50 GMT -->
</html>