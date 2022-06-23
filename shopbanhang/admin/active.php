<?php
 

            if (isset($_GET['active'])) {
                $id = $_GET['active'];
                include_once './config/config.php';
        
                $sql = "update tbl_category set category_status = 1 where category_id = '$id'";
                $result  =$conn->query($sql);
        
                if ($result) {
                   
                    header('location:all_category.php');
                }else{
                  
                    header('location:all_category.php');
                }
            }
      


?>