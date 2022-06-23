<?php
 session_start()
    
?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once '../pages/inc/lib.php';   ?>

<body>
    <!-- Page Preloder -->
 

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
                 
                <div class="col-lg-12">
                    <div class="row">
               <?php include_once './search.php';
               require_once '/xampp/htdocs/shopbanhang/admin/config/config.php';
               if (isset($_POST['submit_search'])) {
                   if($_POST['key_search'] == null){
                       
                   }else{
                       $key =$_POST['key_search'];
                       $sql = "select * from  tbl_product where product_name LIKE '%".$key."%'";
                       $result = mysqli_query($conn,$sql);
                       if($result->num_rows>0){
                            
                            
                           while($vlo = mysqli_fetch_array($result)) {

               
                            ?>
                      <div class="col-lg-4 col-sm-6">
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
                           
                      
                   }
                   
               }
    
              
              
              ?>
         </div>
         <?php
          } 
               ?>
                        
                
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
 
    
    <?php require_once "../pages/inc/footer.php";   ?>

<?php require_once "../pages/inc/lib_js.php";   ?>
</body>

</html>