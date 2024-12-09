<?php
    include_once "database/connection.php";
    session_start();
    $farmerNIC = $_SESSION['uid'];

    if(isset($_POST['itemid'])){
        $id =  $_POST['itemid'];
        $nic = $_POST['nic'];
        $query = mysqli_query($con, "SELECT * FROM user,worke WHERE user.nic = worke.wNic AND wNic = '$nic'");
        if($query){
            while($row = mysqli_fetch_assoc($query)){
                echo '
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="modal-product-img">
                                <img src="data:image;base64,'.base64_encode($row['w_image']).'" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="modal-product-info">
                                    
                                    <h3>'.$row['name'].'</h3>
                                    <div class="product-price">Rs
                                    <span>'.$row['w_rate'].'</span>.00
                                        
                                        
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Worker Name:</strong> 
                                                <span>
                                                '.$row['name'].'
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Worke Name:</strong> 
                                                <span>
                                                '.$row['w_name'].'
                                                </span>
                                           </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="ltn__product-details-menu-2">
                                    <form method="POST">
                                        <strong>Enter starting date:</strong> <input type="date" placeholder="Click Here" name="starting" id="bookingDay" >
                                        <strong><br>Enter number of days & booking:</strong> 
                                        <ul>                                        
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="00" name="qtybutton" class="cart-plus-minus-box" id="qty">
                                                </div>
                                            </li>
                                            <li>
                                                <button class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" id="hire-btn" onClick="itemBuy('.$nic.')">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>Booking</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>                       
                                    <hr>                                    
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>';         
            }
        }
    }

    else if(isset($_POST['wNic'])){
        $workerNic = $_POST['wNic'];
        $day = $_POST['date'];
        $days = $_POST['dates'];

        $query = mysqli_query($con, "SELECT * FROM hirings WHERE workerNic = '$workerNic'");
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            if($row['date'] == NULL){
                $query = mysqli_query($con,"UPDATE hirings SET date = '$day', nDates = $days WHERE workerNic = '$workerNic'");
                if($query){
                    echo "success";
                }
            }
            else{
                echo "booked";
            }
        }
        else{
            $query = mysqli_query($con, "INSERT INTO hirings(workerNic,farmerNic,date,nDates) VALUES('$workerNic','$farmerNIC','$day',$days)");
            if($query){
                echo "success";
            }
        }        
    }


    
