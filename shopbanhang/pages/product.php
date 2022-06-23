<?php
 session_start()
    
?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once '../pages/inc/lib.php';   ?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php require_once '../pages/inc/header.php';   ?>

     
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="home.php"><i class="fa fa-home"></i> Home</a>
                        <a href="shop.php">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Danh mục sản phẩm</h4>
                        <ul class="filter-catagories">
                            <?php
                            require_once '/xampp/htdocs/shopbanhang/admin/class/category.php';
                            $cate = new category();
                            $check_cate = $cate->show_category();
                            foreach($check_cate as $key => $val){
                                ?>
                                <li><a href="#"><?php  echo $val['category_name']  ?></a></li>
                                <?php
                            }
                            ?>
                          
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Thương hiệu</h4>
                        <ul class="filter-catagories">
                            <?php
                            require_once '/xampp/htdocs/shopbanhang/admin/class/brand.php';
                            $cate = new brand();
                            $check_cate = $cate->show_brand();
                            foreach($check_cate as $key => $val){
                                ?>
                                <li><a href="#"><?php  echo $val['brand_name']  ?></a></li>
                                <?php
                            }
                            ?>
                          
                        </ul>
                    </div>
                    
                    
                    
                </div>
                <div class="col-lg-9">
                    <div class="row">
                    <?php
                            require_once '/xampp/htdocs/shopbanhang/admin/class/product.php';
                            
                            if (isset($_GET['id'])) {
                                 $id = $_GET['id'];
                            }
                            $product = new product();
                            $img_des = $product->show_desc_image($id);
                            $check_product = $product->show_product_byID($id);
                            foreach( $check_product as $key => $pro){
                                ?>
                        <div class="col-lg-6">
                         
                            <div class="product-pic-zoom">
                                <img class="product-big-img"  src="../admin/uploads/<?php echo $pro['product_image']  ?>" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                <?php  
                                $i = 0;
                                        foreach( $img_des as $key => $val){
                                            $i++;
                                                ?>
                                    <div class="pt <?= ($i == 1) ? 'active':''; ?>" data-imgbigurl="../admin/uploads/<?php echo $val['image']  ?>"><img
                                            src="../admin/uploads/<?php echo $val['image']  ?>" alt=""></div>

                                                <?php
                                        }
                                    ?>
                                   
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                
                                <div class="pd-title">
                                    
                                    <h3><?php echo $pro['product_name']   ?></h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                 
                                <div class="pd-desc">
                                    <p><?php echo $pro['product_desc']   ?> </p>
                                    <h4> <?php echo number_format($pro['product_price'],0,',','.').' '.'đ'; ?></h4>
                                </div>
                                
                                <div class="quantity">
                                    
                                    <form action="cart.php" method="GET">
                                        <input type="hidden" name="action" value="add">
                                            <input type="number" name="quantity" min="1" value="1">
                                        
                                        <input type="hidden" name="id" value="<?php echo $pro['product_id']   ?>">
                                         <button name="submit" style="height: 48px" class="btn btn-primary" type="submit">Thêm vào giỏ hàng</button>
                                        </form>
                                        </div>
                                    
                                
                                <div class="pd-share">
                                    <div class="p-code">mã sản phẩm: <?php echo $pro['product_code']   ?></div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
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
        </div>
   
    <div style="margin-top: 150px" class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 
            <?php  
             require_once '/xampp/htdocs/shopbanhang/admin/class/product.php';
             $pro = new product();
             if (isset($_SESSION['category_id'])) {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
               }
               
                    $check_pro = $pro->show_product_bycate($id,$_SESSION['category_id']);
                    foreach($check_pro as $key => $vlo){
                        ?>
                        <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="../admin/uploads/<?php echo $vlo['product_image']  ?>" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                            <div class="catagory-name">
                                        <?php
                                          include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                          $cate = new category();
                                          $check_cate = $cate->show_category_byID($vlo['category_id']);
                                              foreach ($check_cate as $key =>$val1) {
                                                    echo $val1['category_name'];
                                              }
                                        ?>
                                </div>
                                <a href="#">
                                    <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $vlo['product_name']  ?></h5>
                                </a>
                                <div class="product-price">
                                <?php echo number_format($vlo['product_price'],0,',','.').' '.'đ'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?> 
                                 
            <?php
                }
            ?>
               
            </div>
        </div>
    </div>
    
    <?php require_once "../pages/inc/footer.php";   ?>

<?php require_once "../pages/inc/lib_js.php";   ?>
</body>

</html>