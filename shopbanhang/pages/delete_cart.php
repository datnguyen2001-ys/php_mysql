<?php 
session_start();
if(isset($_GET['delete']) && $_GET['delete'] >= 0){
    array_splice($_SESSION['cart'],$_GET['delete'],1);
    
    header("location:shopping-cart.php");
 }
 if(isset($_GET['delete_index']) && $_GET['delete_index'] >= 0){
    array_splice($_SESSION['cart'],$_GET['delete_index'],1);
    
    header("location:index.php");
 }
?>