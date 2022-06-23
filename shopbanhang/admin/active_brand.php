<?php
    if (isset($_GET['active'])) {
        $id = $_GET['active'];
        include_once './config/config.php';

        $sql = "update tbl_brand set brand_status = 1 where brand_id = '$id'";
        $result  =$conn->query($sql);

        if ($result) {
           
            header('location:all_brand.php');
        }else{
          
            header('location:all_brand.php');
        }
    }


?>