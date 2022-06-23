<?php
 

            if (isset($_GET['active'])) {
                $id = $_GET['active'];
                include_once './config/config.php';
        
                $sql = "update tbl_slider set slider_status = 0 where slider_id = '$id'";
                $result  =$conn->query($sql);
        
                if ($result) {
                   
                    header('location:all_slider.php');
                }else{
                  
                    header('location:all_slider.php');
                }
            }
      


?>