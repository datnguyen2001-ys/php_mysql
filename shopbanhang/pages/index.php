<?php
 session_start()
    
?>
<!DOCTYPE html>
<html lang="zxx">

 <?php require_once '../pages/inc/lib.php';   ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
         
            
<body>
    
    

    <?php require_once '../pages/inc/header.php';   ?>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
        <?php 
        include_once "/xampp/htdocs/shopbanhang/admin/class/slider.php";
        $sli = new slider();
        $select = $sli->show_slider();
        foreach ($select as $key => $val) {
            ?>
            <div class="single-hero-items set-bg" data-setbg="../admin/uploads/<?php echo $val['slider_image']  ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            
                            <h1><?php echo $val['slider_name']  ?></h1>
                            <p style="color:white"><?php echo $val['slider_desc']  ?></p>
                            <a href="shop.php" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    <!-- <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div> -->
                </div>
            </div>
          <?php
        }
        ?>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Thời trang nam</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Thời trang nữ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Thời trang trẻ em</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="uploads/photo-1519764622345-23439dd774f7.avif">
                        <h2 style="font-size: 35px; ">Thời trang nam</h2>
                        <!-- <a href="#">Discover More</a> -->
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                     
                    <div class="product-slider owl-carousel">
                        <?php 
                            include_once "/xampp/htdocs/shopbanhang/admin/class/product.php";
                            include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                            $cate = new category();
                            $pro = new product();
                            $log = $pro->show_product_bycategory(6);

                            foreach($log as $key =>$val){
                                $check_cate = $cate->show_category_byID($val['category_id'])
                                ?>
                                <div class="product-item">
                                <div class="pi-pic">
                                    <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a class="add_cart" id="<?php echo $val['product_id']  ?>" href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><input style="height: 40px  " type="button" name="view" value="Xem nhanh" id="<?php echo $val["product_id"]; ?>" class="btn btn-primary view_data" /></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">
                                        <?php
                                              foreach ($check_cate as $key =>$val1) {
                                                    echo $val1['category_name'];
                                              }
                                        ?>
                                </div>
                                    <a href="product.php?id=<?php echo $val['product_id']  ?>">
                                        

                                        <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $val['product_name']  ?></h5>
                                        
                                    </a>
                                    <div class="product-price">
                                    <?php echo number_format($val['product_price'],0,',','.').' '.'đ';  ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
     

    <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                    <h4 class="modal-title">Thông Tin sản phẩm</h4>  
                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
                <div class="modal-body" id="product_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                        
                </div>  
           </div>  
      </div>  
 </div>  
    

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                     <img src="" alt="">
                    <div class="product-slider owl-carousel">
                        <?php  
                          include_once "/xampp/htdocs/shopbanhang/admin/class/product.php";
                         include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";

                         $pro = new product();
                         $log = $pro->show_product_bycategory(7);
                         $cate = new category();
                           
                         foreach($log as $key =>$row){
                                    $check_cate = $cate->show_category_byID($row['category_id'])
                                     ?>
                            <div class="product-item">
                            <div class="pi-pic">
                                <img style="height: 300px;object-fit: cover" src="../admin/uploads/<?= $row['product_image'] ?>" alt="">
                                 
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                         
                                        <li class="w-icon active"><a class="add_cart" id="<?php echo $row['product_id']  ?>" href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><input style="height: 40px" type="button" name="view" value="Xem nhanh" id="<?php echo $row["product_id"]; ?>" class="btn btn-primary view_data" /></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                            </div>
                            <div class="pi-text">
                            <div class="catagory-name">
                                        <?php
                                              foreach ($check_cate as $key =>$val1) {
                                                    echo $val1['category_name'];
                                              }
                                        ?>
                                </div>
                                <a href="product.php?id=<?php echo $row['product_id']  ?>">
                                        

                                        <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $row['product_name']  ?></h5>
                                        
                                    </a>
                                    <div class="product-price">
                                    <?php echo number_format($val['product_price'],0,',','.').' '.'đ';  ?>
                                    </div>
                            </div>
                        </div>
                                     <?php
                                }
                            
                        ?>
                       
                        
                    
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="uploads/photo-1549062573-edc78a53ffa6.avif">
 
                        <h2 style="font-size: 35px; ">Thời trang nữ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
     

   
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 <?php 
                    $conn = mysqli_connect('localhost','root','','shop');

                    $sql = "select * from tbl_news limit 3";
                    $result = mysqli_query($conn,$sql);
                    foreach($result as $key =>$val){
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img style="height: 300px;object-fit: cover;" src="../admin/uploads/news/<?=$val['news_image']   ?>" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                     <?=  $val['create_at'] ?>
                                </div>
                                
                            </div>
                            <a href="blog-details.php?id=<?=  $val['news_id'] ?>">
                                <h4> <?=  $val['news_title'] ?></h4>
                            </a>
                            <p ><?=  $val['news_desc']  ?></p>
                        </div>
                    </div>
                </div>
                        <?php

                    }
                 ?>
                 
                
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php require_once "../pages/inc/footer.php";   ?>
      
    <?php require_once "../pages/inc/lib_js.php";   ?>
    
</body>

</html>