<?php
    if (isset($_GET['active'])) {
        $id = $_GET['active'];
        include_once './config/config.php';

        $sql = "update tbl_product set product_status = 1 where product_id = '$id'";
        $result  =$conn->query($sql);

        if ($result) {
           
            header('location:all_product.php');
        }else{
          
            header('location:all_product.php');
        }
    }


?>