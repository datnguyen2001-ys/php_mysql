<?php 
    session_start();
    if(isset($_SESSION['user_name']) && isset($_SESSION['user_name']) != null){
        unset($_SESSION['user_name']);
        session_destroy();
        header("location:index.php");
    }


?>