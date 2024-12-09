<?php

  include_once "database/connection.php";
  
  $id = $_GET['proid'];

  $query = mysqli_query($con,"SELECT * FROM product WHERE p_id='$id'");
  $row = mysqli_fetch_array($query);





?>

<!--<a href="/../Project/">log out</a>-->
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
<br><br><br>
<div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h1>
                        <a href="farmerHome.php"><i class="fas fa-arrow-circle-left "></i></a> </h1>
                   
                    <h4 class="title-2">Update product details</h4>
                        
                            <div class="ltn__form-box">
                                                    <form method="POST" action="update.php">
                                                        <div class="row mb-50">
                                                            <div class="col-md-6">
                                                                <label>Product Name:</label>
                                                                <input type="text" disabled name="p_name" value ="<?php echo $row['p_name']; ?>" >
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <label>Change Quantity(Kg):</label>
                                                                <input type="text" name="quantity" value ="<?php echo $row['quantity']; ?>" >
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Change Price of 1Kg:</label>
                                                                <input type="text" name="price"value ="<?php echo $row['price']; ?>">
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <label>Change Enter Issue Date:</label>
                                                                <input type="date" placeholder="Click Here" name="issue_date"value ="<?php echo $row['issue_date']; ?>" >
                                                            </div>
                                                          
                                                           
                                                            
                                                        </div>
                                                       
                                                        <button  class="btn theme-btn-1 btn-effect-1 text-uppercase"   name="update"  value="<?php echo $id?>">
                                                                Update  &amp; Continue
                                                            </button>
                                                       </form>
                                                
                                             
                                                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->
    
 

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
    <!-- alert -->
    
   
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:26:47 GMT -->
</html>

