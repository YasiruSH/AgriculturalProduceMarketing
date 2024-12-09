<?php
    include_once "database/connection.php";

    if(isset($_POST['itemid'])){
        $id =  $_POST['itemid'];
        $nic = $_POST['nic'];
        $query = mysqli_query($con, "SELECT * FROM user,product WHERE user.nic = product.nic AND p_id = $id");
        if($query){
            while($row = mysqli_fetch_assoc($query)){
                echo '
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="modal-product-img">
                                <img src="data:image;base64,'.base64_encode($row['p_image']).'" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="modal-product-info">
                                    
                                    <h3>'.$row['p_name'].'</h3>
                                    <div class="product-price">Rs
                                        <span>'.$row['price'].'</span>.00
                                        
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Seller Name:</strong> 
                                                <span>
                                                '.$row['name'].'
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Available Quantity:</strong> 
                                                <span>
                                                '.$row['quantity'].' KG
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Categories :</strong> 
                                                <span>
                                                '.($row['category'] == "veg" ? "Vegetable" : "Fruit").' 
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Issue Date:</strong> 
                                                <span>
                                                '.$row['issue_date'].'
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus ">
                                                
                                                    <input type="text" value="00" name="qtybutton" class="cart-plus-minus-box" id="qty">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" onClick="itemBuy('.$id.','.$nic.','.$row['nic'].')">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>Buy</span>
                                                </a>
                                            </li>
                                        </ul>
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

    else if(isset($_POST['idValue'])){
        $vegId = $_POST['idValue'];
        $qty = $_POST['qty'];
        $actQty = (int) $qty;
        $nic = $_POST['nic'];
        $fnic = $_POST['fnic'];

        $query = mysqli_query($con, "SELECT * FROM product WHERE p_id=$vegId");
        $row = mysqli_fetch_assoc($query);
        $size = $row['quantity'];
        $newSize = $size - $qty;

        $query = mysqli_query($con,"UPDATE product SET quantity=$newSize WHERE p_id=$vegId");
        $query = mysqli_query($con,"INSERT INTO boughtitems(nic,itemid,qty,farmerId) VALUES('$nic',$vegId,$qty,'$fnic')");
        if($query){
            echo "Success";
        }
    }
