<?php
 session_start();
 if (!isset($_SESSION['user_name'])  ) {
     header("location:login.php");
 }elseif(!isset($_SESSION['cart']) && !isset($_SESSION['coupon_code'])){
    header("location:shop.php");
 }
 
?>
<?php  
    include_once './classpages/check-out.php';
    $check_tmp =new check();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST['submit'])) {
       $xm = $check_tmp->check_out($_POST);
       
    }

?>

<!DOCTYPE html>
<html lang="zxx">

<?php require_once '../pages/inc/lib.php';   ?>
<body>
    
    <div id="preloder">
        <div class="loader"></div>
    </div>

     
    <?php require_once '../pages/inc/header.php';   ?>
    
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
                        <a href="shop.php">cửa hàng</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <section class="checkout-section spad">
        <div class="container">
            <?php 
                if (!isset($_SESSION['cart']) && !isset($_SESSION['coupon_code'])) {
                    ?>
                   <h3>Đơn hàng của bạn đã được đặt!!! Cảm ơn bạn đã mua hàng</h3>
                    
                    <?php
                }else{
                    ?>
            <form action="check-out.php" method="POST" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                         
                        <h4>Chi tiết hóa đơn</h4>
                        <div class="row">
                            <?php
                            
                                if(isset($_SESSION['alert'])){
                                    echo  $_SESSION['alert'];
                                }
                                unset($_SESSION['alert']);
                            ?>
                        
                            <div class="col-lg-12">
                                <label for="fir">Họ tên:<span>*</span></label>
                                <input  name="name" type="text" id="fir" placeholder="nhập họ tên...">
                            </div>
                            
                            <div class="col-lg-12">
                                <label for="cun-name">Email:<span>*</span></label>
                                <input   name="email" type="text"  placeholder="nhập email..." id="cun-name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Số điện thoại:<span>*</span></label>
                                <input name="phone"    placeholder="nhập số điện thoại của bạn..." type="text" id="cun">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa chỉ: <span>*</span></label>
                                <input type="text" name="address" id="address" class="address-first">
                                
                            </div>
                            <div class="col-lg-12">
                                <label for="notes">Ghi chú:</label><br>
                                
                                <textarea style="width: 100%" name="notes"  id="notes"  rows="10"></textarea>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                         
                        <div class="place-order">
                            <h4>Đơn hàng của bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản phẩm <span>Tạm tính</span></li>
                                    <?php
                                     if (isset($_SESSION['cart'])) {
                                        $total = 0;
                                        for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                                            $total += $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                                            $total_tmp = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                                            ?>
                                            <div style="display: flex;justify-content: space-between">
                                                <li  style="width: 350px; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" class="fw-normal"><?=$_SESSION['cart'][$i][1] ?> x <?=$_SESSION['cart'][$i][4] ?></li>
                                                <span><?= number_format( $total_tmp,0,',','.').' '.'đ'; ?></span> 
                                            </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                   
                                    <li class="fw-normal">Tạm tính: 
                                        <span>
                                                <?= 
                                                
                                                number_format( $total,0,',','.').' '.'đ'; 
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
                                                            $sale = ($total * $_SESSION['coupon_number'])/100;
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
                                            $avg = $total - $sale;
                                            echo number_format( $avg, 0, ',', '.').' '.'đ';
                                            $_SESSION['thanhtien'] = $avg;
                                       ?>
                                    </span>
                                </li>
                                </ul>
                                <div class="payment-check">
                                <h5>Phương thức thanh toán:</h5>

                                     <input  style="margin-top: 50px;width: 50px;height: 20px;" value="1" type="radio" id="tienmat" name="method_payment"  >
                                    <label for="tienmat">Tiền mặt</label><br>
                                    <input style="width: 50px;height: 20px;"  type="radio" id="Paypal" name="method_payment" value="2">
                                    <label for="Paypal">Paypal</label><br>
                                    <input style="width: 50px;height: 20px;"  type="radio" id="VNpay" name="method_payment" value="3">
                                    <label for="VNpay">VNpay</label>
 
                                </div>
                                <div class="order-btn">
                                    <button name="submit" type="submit" class="site-btn place-btn">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form
                    <?php
                }
            ?>
            >
        </div>
    </section>
 
    <?php require_once "../pages/inc/footer.php";   ?>

<?php require_once "../pages/inc/lib_js.php";   ?>
</body>

</html>