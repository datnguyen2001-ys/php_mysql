<?php
    if (isset($_GET['active'])) {
        $id = $_GET['active'];
        include_once './config/config.php';

        $sql = "update tbl_news_category set news_category_status = 1 where news_category_id = '$id'";
        $result  =$conn->query($sql);

        if ($result) {
           
            header('location:all_news_category.php');
        }else{
          
            header('location:all_news_category.php');
        }
    }


?>