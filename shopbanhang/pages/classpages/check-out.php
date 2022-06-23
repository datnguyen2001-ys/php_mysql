<?php 
 
    class check{
        public function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        public function check_out($data){
            $conn = mysqli_connect('localhost','root','','shop');
            $name = $this->test_input($data['name']);
            $email = $this->test_input($data['email']);
            $phone = $this->test_input($data['phone']);
            $address = $this->test_input($data['address']);
            $notes = $this->test_input($data['notes']);

            $name = mysqli_real_escape_string($conn,$data['name']);
            $email = mysqli_real_escape_string($conn,$data['email']);
            $phone = mysqli_real_escape_string($conn,$data['phone']);
            $address = mysqli_real_escape_string($conn,$data['address']);
            $notes = mysqli_real_escape_string($conn,$data['notes']);
            $order_code = substr(md5(time()),0,6);
            $payment = $data['method_payment'];
            if ($name == "" || $email == "" || $phone == "" || $address == ""|| $payment == "" ) {
               $_SESSION['alert'] = "Không được bỏ trống các trường có dấu *";
                 
            }else{
                $user_id = $_SESSION['id'];
                $sql = "insert into tbl_receive (user_id,receive_name,receive_email,receive_phone,receive_address) values('$user_id','$name','$email','$phone','$address')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $receive_id = mysqli_insert_id($conn);
                  
                    $order_status = 1;
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date =date('d/m/Y H:i:s A');
                    $total = $_SESSION['thanhtien'];
                    $sql_order ="insert into tbl_order (order_code,receive_id,order_status,payment_method,order_notes,create_at,order_total) values('$order_code','$receive_id','$order_status','$payment','$notes','$date','$total')";
                    $result1 = mysqli_query($conn,$sql_order);
                    if($result1){
                        if(isset($_SESSION['cart'])){
                            if (isset($_SESSION['coupon_code'])) {
                                $coupon = $_SESSION['coupon_code'];
                                for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                                    $coupon = $_SESSION['coupon_code'];
                                    $pr_id = $_SESSION['cart'][$i][0];
                                    $pr_name = $_SESSION['cart'][$i][1];
                                    $pr_image = $_SESSION['cart'][$i][2];
                                    $pr_price = $_SESSION['cart'][$i][3];
                                    $pr_quantity = $_SESSION['cart'][$i][4];
                                    $sql_order_detalis ="insert into tbl_order_details (order_code,product_id,product_name,product_image,product_price,product_quantity,order_coupon) 
                                    values('$order_code','$pr_id','$pr_name','$pr_image','$pr_price','$pr_quantity','$coupon')";
                                    $result2 = mysqli_query($conn,$sql_order_detalis);
                                    if ($result2) {
                                       
                   
                                        
                                        
                                    }
                            }
                             
                            unset($_SESSION['coupon_code']);
                            unset($_SESSION['coupon_method']);
                            unset($_SESSION['coupon_number']);
                            echo "<script>
                                    alert('đơn hàng đã được đặt thành công!!!');
                            </script>";
                            } 
                            unset($_SESSION['cart']);
                        }
                        unset($_SESSION['thanhtien']);
                    }
                    
                }else{
                    echo "<script>alert('lỗi!!!')</script>";
                }
            }
        }
    }


?>