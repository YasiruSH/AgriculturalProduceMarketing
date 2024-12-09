<?php
  include_once "database/connection.php";
  $name;
  session_start();
  $id = $_SESSION['uid'];

  $query = mysqli_query($con,"SELECT * FROM user WHERE nic='$id'");
  $row = mysqli_fetch_assoc($query);
  $name = $row['name'];
  

  if(isset($_POST['addProduct'])){
     
    $productName = $_POST['p_name'];
    $catogory = $_POST['category'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $date = $_POST['issue_date'];
    $file = addslashes(file_get_contents($_FILES["p_image"]["tmp_name"]));  

    $query = mysqli_query($con, "INSERT INTO product(p_name,category,quantity,price,issue_date,p_image,nic) VALUES('$productName','$catogory',$qty,$price,'$date','$file','$id')");
  }

  $val = "";
  $today = date("Y-m-d");
  $query = mysqli_query($con, "SELECT * FROM hirings");
  while($row = mysqli_fetch_assoc($query)){
    $day = $row['date'];
    $wNic = $row['workerNic'];
    $finalDate = date('Y-m-d', strtotime($day. ' + '.$row['nDates'].' days'));
    if($day == $today || $finalDate < $today){
        $query = mysqli_query($con, "UPDATE hirings SET date = NULL, nDates = 0 WHERE workerNic = '$wNic'");
    }
    else{
        continue;
    }
  }

?>

<!--<a href="/../Project/">log out</a>-->
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:26:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Smart Fair <?php echo $val; ?></title>
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
                                        <li><a href="/../Project/shop.php">Shop</a></li>
                                        <li><a href="/../Project/contact.php">Contact</a></li>
                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                   
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
                           
                            <h1 class="section-title white-color">Farmer Home</h1>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

     <!-- WISHLIST AREA START -->
     <div class="liton__wishlist-area pb-70">
        
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                       
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-toggle="tab" href="#dashboard">Dashboard <i class="fas fa-home"></i></a>
                                            <a data-toggle="tab" href="#add">Add Product <i class="fas fa-arrow-down"></i></a>
                                            <a data-toggle="tab" href="#your">Your Products <i class="fas fa-file-alt"></i></a>
                                            <a data-toggle="tab" href="#orders">Orders <i class="fas fa-file-alt"></i></a>
                                            <a  href="hire.php">Hire Worker <i class="fas fa-arrow-down"></i></a>
                                            <a data-toggle="tab" href="#booking">Booking Details <i class="fas fa-file-alt"></i></a>
                                            
                                     
                
                                            
                                            <a href="/../Project/">Logout <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="dashboard">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong><?php echo $name; ?></strong> </p>
                                                <p>From your account dashboard you can view your <span>product</span>,<span>recent orders</span>, manage your <span>product and orders</span>.</p>
                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="your">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                            <th>No.</th>
                                                            <th>Product ID</th>
                                                            
                                                            <th>Product Name</th>
                                                            <th>Catagory</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Issued Date</th>
                                                            
                                                            
                                                            <th colspan='2' class='text-center'>Action</th>
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                                $loop = 1;
                                                                $query = mysqli_query($con, "SELECT p.p_id,u.name,p.p_name,p.category,p.quantity,p.price,p.issue_date FROM product p INNER JOIN user u ON p.nic = u.nic WHERE p.nic = $id");
                                                                if($query){
                                                                    while($row = mysqli_fetch_assoc($query)){
                                                                        echo '
                                                                            <tr>
                                                                                <td>'.$loop.'</td>
                                                                                <td>'.$row['p_id'].'</td>
                                                                                
                                                                                <td>'.$row['p_name'].'</td>
                                                                                <td>'.($row['category'] == "veg" ? "Vegetable" : "Fruit").'</td>
                                                                                <td>'.$row['quantity'].'</td>
                                                                                <td>'.$row['price'].'</td>
                                                                                <td>'.$row['issue_date'].'</td>
                                                                                <td> <a href="edit.php?proid='.$row['p_id'].'" class="edit">Edit</a>
                                                                                <td><a href="delete.php?proid='.$row['p_id'].'"><button class="delete">Delete</button></a>
                                                                                </td>
                                                                                
                                                                            </tr>';
                                                                            
                                                                        // loop here
                                                                        /* multi line comment*/    
                                                                        ++$loop;  

                                                                    }
                                                                    }
                                                                    
                                                            ?>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="booking">
                                            
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                            <th>No.</th>
                                                                <th>Worker Name</th>
                                                                <th>Starting Date</th>
                                                                <th>Working Dates</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                                $loop = 1;
                                                                $query = mysqli_query($con, "SELECT * FROM user,hirings WHERE  hirings.workerNic = user.nic AND farmerNic = $id ");
                                                                if($query){
                                                                    while($row = mysqli_fetch_assoc($query)){
                                                                        if($row['date'] ==  NULL){
                                                                            continue;
                                                                        }
                                                                        else{
                                                                        echo '
                                                                            <tr>
                                                                                <td>'.$loop.'</td>
                                                                             
                                                                                <td>'.$row['name'].'</td>
                                                                                
                                                                                <td>'.$row['date'].'</td>
                                                                                <td>'.$row['nDates'].'</td>
                                                                                <td>'.$row['status'].'</td>
                                                                                <td><a href="delete.php?cancel='.$row['workerNic'].'"<button class="delete">Delete</button></a></td>
                                                                            </tr>';
                                                                            
                                                                        // loop here
                                                                        /* multi line comment*/    
                                                                        ++$loop;  
                                                                        }
                                                                    }
                                                                    }
                                                                    
                                                            ?>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Item ID</th>
                                                                <th>Buyer Name</th>
                                                                <th>Qty</th> 
                                                                <th>Order Date</th>
                                                            
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $loop = 1;

                                                            $query = mysqli_query($con, "SELECT * FROM boughtitems,product,user WHERE product.p_id = boughtitems.itemid AND boughtitems.nic = user.nic AND boughtitems.farmerId = '$id'");
                                                            //$query = mysqli_query($con, "SELECT * FROM user,boughtitems WHERE user.nic =boughtitems.nic AND product.nic = '$id'");
                                                            /*if($query){*/
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                echo '
                                                                    <tr>
                                                                        <td>'.$loop.'</td>
                                                                        <td>'.$row['itemid'].'</td>
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
                                        <div class="tab-pane fade" id="add">
                                        <div class="ltn__myaccount-tab-content-inner">
                                                <br>
                                                <div class="ltn__form-box">
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="row mb-50">
                                                            <div class="col-md-6">
                                                                <label>Product Name:</label>
                                                                <input type="text" name="p_name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Select Category:</label>
                                                                <div class="input-item">
                                                                    <select class="nice-select"  name="category">
                                                                        <option selected>Select Category</option>
                                                                        <option value ="veg">Vegetables </option>
                                                                        <option value ="Frut">Fruits</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Total Quantity(Kg):</label>
                                                                <input type="text" name="quantity">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Price Of 1KG:</label>
                                                                <input type="text" name="price">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Enter Issue Date:</label>
                                                                <input type="date" placeholder="Click Here" name="issue_date" >
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label  class= "form-label">Choose Image:</label>
                                                                <input type="file" class="form-control" name="p_image" id="p_image">
                                                            </div>
                                                           
                                                            
                                                        </div>
                                                       
                                                        <div class="btn-wrapper">
                                                            <button  class="btn theme-btn-1 btn-effect-1 text-uppercase" name="addProduct" value ="Upload Image/Data">
                                                                Save  &amp; Continue
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            
                                        </div>
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
    <?php include 'farmerfooter.php'; ?>
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

