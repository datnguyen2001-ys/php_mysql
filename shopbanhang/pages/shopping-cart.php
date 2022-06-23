<?php
 session_start();
 if (!isset($_SESSION['user_name']) && $_SESSION['user_name'] == null) {
     header("location:login.php");
 }
 
?>

<!DOCTYPE html>
<html lang="zxx">

<?php require_once '../pages/inc/lib.php';   ?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php require_once '../pages/inc/header.php';   ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="home.php"><i class="fa fa-home"></i> Trang chủ</a>
                        <a href="shop.php">Cửa hàng</a>
                        <span>giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            
                    <div class="row">
                        <?php
                        if (sizeof($_SESSION['cart']) > 0 ) {
                            ?>
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ảnh</th>
                                    <th class="p-name">tên sản phẩm</th>
                                    <th>giá</th>
                                    <th>số lượng</th>
                                    <th>tổng tiền</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 
                                    for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) {
                                        ?>
                                        <tr>
                                    <td class="cart-pic"><img height="100px" src="../admin/uploads/<?php echo $_SESSION['cart'][$i][2]  ?>" alt=""></td>
                                    <td class="cart-title">
                                        <h5><?php echo $_SESSION['cart'][$i][1]  ?></h5>
                                    </td>
                                    <td class="p-price"><?php echo number_format($_SESSION['cart'][$i][3], 0, ',', '.').' '.'đ'; ?></td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                           
                                                <form action="cart.php" method="GET">
                                                    <input type="hidden" name="action" value="update">
                                                    <input type="hidden" name="id" value="<?php echo $_SESSION['cart'][$i][0]  ?>">
                                                    <input style="width: 80px;height: 37px;" name="quantity_update" value="<?php echo $_SESSION['cart'][$i][4]  ?>" type="number" min="1" value="1">
                                                    <button class="btn btn-primary" type="submit" name="submit">Cập nhật</button>

                                                </form>
                                             
                                        </div>
                                    </td>
                                    <td class="total-price">
                                    <?php

                                        $tmp_total = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                                        echo number_format($tmp_total, 0, ',', '.').' '.'đ'; ?>
                                
                                </td>
                                    <td class="close-td"><a onclick="return confirm('bạn có muốn xóa!!!')"   href="delete_cart.php?delete=<?php echo  $i ?>"><i class="ti-close"></i></a> </td>
                                </tr>
                                <?php
                                    } ?>   
                                
                 
                                     
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                         
                            <div class="discount-coupon">
                                <h6>Mã giảm giá</h6>
                                    <?php  
                                        if(isset($_SESSION['mess_success'])){
                                            echo $_SESSION['mess_success'];
                                        }
                                        unset($_SESSION['mess_success']);
                                    ?>
                                      <?php  
                                        if(isset($_SESSION['mess_empty'])){
                                            echo $_SESSION['mess_empty'];
                                        }
                                        unset($_SESSION['mess_empty']);
                                    ?>
                                <form action="check_coupon.php" class="coupon-form" method="get">
                                    <input type="text" name="coupon_code" placeholder="Nhập mã...">
                                    <button name="submit_check" type="submit" class="site-btn coupon-btn">sử dụng</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    
 
                                    <li class="subtotal">
                                        Tạm tính: 
                                        <span>
                                            <?php
                                               $tmp_total1 = 0;
                                               for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) {
                                                $tmp_total1 += $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                                             }
                                             echo number_format($tmp_total1, 0, ',', '.').' '.'đ';
                                              ?>
                                         </span>
                                        </li>
                                    <li class="cart-coupon">tiền giảm:
                                     <span>
                                             <?php  
                                             $sale = 0;
                                                if (isset($_SESSION['coupon_code']) && $_SESSION['coupon_method'] != null) {
                                                    if (isset($_SESSION['coupon_method']) && $_SESSION['coupon_method'] == 1) {
                                                        if (isset($_SESSION['coupon_number']) && $_SESSION['coupon_number'] != 0) {
                                                            $sale = ($tmp_total1 * $_SESSION['coupon_number'])/100;
                                                        }  
                                                             
                                                        }else{
                                                            if (isset($_SESSION['coupon_number']) && $_SESSION['coupon_number'] != 0) {
                                                                $sale =   $_SESSION['coupon_number'] ;
                                                            }  
                                                        }
                                                    }
                                                
                                                echo number_format($sale, 0, ',', '.').' '.'đ';
                                             ?>
                                    </span>
                                </li>
                                    <li class="cart-total">Thành tiền: 
                                        <span>
                                       <?php  
                                            $avg = $tmp_total1 - $sale;
                                            echo number_format( $avg, 0, ',', '.').' '.'đ';
                                       ?>
                                    </span>
                                </li>
                                        
                                </ul>
                                <a href="check-out.php" class="proceed-btn">Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php    
                    }else{
                        echo "<h2>giỏ hàng của bạn đang trống</h2>";
                    } 
                     ?>  
            </div>
            
             
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <?php require_once "../pages/inc/footer.php";   ?>

<?php require_once "../pages/inc/lib_js.php";   ?>
</body>

</html>