<?php
    if (isset($_GET['active'])) {
        $id = $_GET['active'];
        include_once './config/config.php';

        $sql = "update tbl_news set news_status = 1 where news_id = '$id'";
        $result  =$conn->query($sql);

        if ($result) {
           
            header('location:all_news.php');
        }else{
          
            header('location:all_news.php');
        }
    }


?>