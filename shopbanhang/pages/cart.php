<?php
    session_start();
    if (!isset($_SESSION['user_name']) && $_SESSION['user_name'] == null) {
        header("location:login.php");
    }else{
        require_once '/xampp/htdocs/shopbanhang/admin/config/config.php';
     
    

        // session_destroy();
        // die();
    
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
        }
         if(!isset($_SESSION['cart'])) $_SESSION['cart'] =[];
        
         //xóa giỏ hàng
          
        $quantity_tmp = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
         
        
        
       
        $query = mysqli_query($conn,"SELECT * FROM tbl_product  WHERE product_id = '$id'");
        if ($query) {
            $product = mysqli_fetch_assoc($query);
        }
         
        
            $pro_id = $product['product_id'];
            $name = $product['product_name'];
            $image = $product['product_image'];
            $price = $product['product_price'];
            $quantity = $quantity_tmp;
    
        $check = 0;
            //kiem tra gio hang
            if(isset($_SESSION['cart'])){
                for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                    if ($_SESSION['cart'][$i][1] == $name) {
                       $check++;
                        $slm = $quantity + $_SESSION['cart'][$i][4];
                        $_SESSION['cart'][$i][4] = $slm;
                        break;
                    }
                  
               }
               if($check == 0){
       
                   $sp = [$pro_id, $name, $image, $price,$quantity];
                   $_SESSION['cart'][] = $sp;
                   
               }
               
               if (isset($_GET['action']) && $_GET['action'] == 'update' ) {
                   
                   for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                       if ($_SESSION['cart'][$i][0] == $_GET['id']) {
                           
                           $slm =  $_GET['quantity_update'];
                           $_SESSION['cart'][$i][4] = $slm;
                           break;
                       }
                   }
               }
            }
            
            
        header("location:shopping-cart.php");
    }
    
?>