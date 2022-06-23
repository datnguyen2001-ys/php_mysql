<?php 
  session_start();
    require_once '/xampp/htdocs/shopbanhang/admin/config/config.php';
 if (isset($_GET['submit_check'])) {
    if(isset($_GET['coupon_code']) && $_GET['coupon_code'] != null ){
           $coupon_code = $_GET['coupon_code'];
           $result1a = mysqli_query($conn,"select * from tbl_coupon where coupon_code = '$coupon_code'");
           if($result1a->num_rows > 0){
            $coupon = mysqli_fetch_assoc($result1a);
            
            
            $_SESSION['coupon_code'] =  $coupon['coupon_code'];
            $_SESSION['coupon_method'] =  $coupon['coupon_method'];
            $_SESSION['coupon_number'] =  $coupon['coupon_number'];
            $_SESSION['mess_success'] = 'Mã giảm giá hợp lệ';
            header("location:shopping-cart.php");
           }else{
            unset($_SESSION['coupon_code']);
            unset($_SESSION['coupon_method']);
            unset($_SESSION['coupon_number']);
            $_SESSION['mess_success'] = 'Mã giảm giá không hợp lệ';
            header("location:shopping-cart.php");
           }
    }else{
             $_SESSION['mess_empty'] = 'vui lòng nhập mã giá giảm!!!';
            header("location:shopping-cart.php");
    }
}


?>