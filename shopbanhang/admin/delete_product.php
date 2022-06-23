<?php
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        include 'config/config.php';

        $sql = "delete  from tbl_product where product_id = '$id'";
        $result  =$conn->query($sql);
        if ($result) {
            echo "<script>alert('xoá danh mục thành công')</script>";
            header("location:all_product.php");
           
        }else{
            echo "<script>alert('xoá danh mục thất bại')</script>";;
            header("location:all_product.php");
        }
    }


?>