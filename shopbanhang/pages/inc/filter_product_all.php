<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <form action="" method="get">
                <div class="filter-widget">
                        <h4 class="fw-title">Danh mục sản phẩm</h4>
                        <ul class="filter-catagories">
                            <?php
                            require_once '/xampp/htdocs/shopbanhang/admin/class/category.php';
                            $cate = new category();
                            $check_cate = $cate->show_category();
                            foreach($check_cate as $key => $val){
                                $cate = [];
                                if(isset($_GET['category'])){
                                    $cate = $_GET['category'];
                                }
                                ?>
                                 <div>

                                    <input type="checkbox" name="category[]" value="<?= $val['category_id'] ?>" id="" 
                                    <?php if(in_array($val['category_id'],$cate)){echo "cate";} ?>
                                    />
                                        
                                    <?= $val['category_name'] ?>
                                    </div>
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
                                $checked = []; 
                                if (isset($_GET['brand'])) {
                                    $checked = $_GET['brand'];
                                }
                                ?>
                                <div>

                                    <input type="checkbox" name="brand[]" value="<?= $val['brand_id'] ?>" id="" 
                                      
                                    />
                                         
                                    <?= $val['brand_name'] ?>
                                </div>
                                <?php
                            }
                            ?>
                          
                        </ul>
                       
                    </div>
                    <div class="filter-widget"  >
                        <h4 class="fw-title">Giá</h4>
                        <div style="display: flex;justify-content: space-between;">

                            <div>
                               <label for="1">Từ</label>
                               <input style="width:100px" value="<?php if (isset($_GET['start_price'])) {echo $_GET['start_price'];}else{echo "0";} ?>" type="text" name="start_price" id="1">
                            </div>
                            <div>
                               <label for="1">Đến</label>
                               <input style="width:100px" value="<?php if (isset($_GET['end_price'])) {echo $_GET['end_price'];}else{echo "1000000";} ?>" type="text" name="end_price" id="1">
                            </div>
                        </div>
                        <button style="width: 150px;margin-top: 20px" class="btn btn-primary"   type="submit">Filter</button>
                         
                    </div>
             
                    </form>
                  
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    
                    <div class="product-list">
                        <div class="row">
                            
                            <?php
                            if (isset($_GET['brand']) && isset($_GET['category'])  ) {
                                $conn = mysqli_connect('localhost', 'root', '', 'shop');
                                include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                $cate = new category();
                                $test = [];
                                $test = $_GET['brand'];

                                $test2 = [];
                                $test2 = $_GET['category'];
                                $gia1 = $_GET['start_price'];
                                $gia2 = $_GET['end_price'];
                                foreach ($test as $test1) {
                                    foreach ($test2 as $test3) {
                                        $product = "select * from tbl_product where brand_id = $test1 and category_id = $test3 and (product_price BETWEEN $gia1 and $gia2) ";
                                        $result1b = mysqli_query($conn, $product);
                                        if ($result1b->num_rows > 0) {
                                            foreach ($result1b as $key =>$val) {
                                                $check_cate = $cate->show_category_byID($val['category_id'])
                                            ?>
                                               <div class="col-lg-4 col-sm-6">
                                       <div class="product-item">
                                           <div class="pi-pic">
                                           <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                               <div class="icon">
                                                   <i class="icon_heart_alt"></i>
                                               </div>
                                               <ul>
                                                   <li class="w-icon active"><a  href="cart.php?id=<?php echo $val['product_id'] ?> &action=add"><i class="icon_bag_alt"></i></a></li>
                                                   <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                                   <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                               </ul>
                                           </div>
                                           <div class="pi-text">
                                           <div class="catagory-name">
                                               <?php
                                                     foreach ($check_cate as $key =>$val1) {
                                                         echo $val1['category_name'];
                                                     } ?>
                                       </div>
                                           <a href="product.php?id=<?php echo $val['product_id']  ?>">
                                               
        
                                               <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $val['product_name']  ?></h5>
                                               
                                           </a>
                                           <div class="product-price">
                                           <?php echo number_format($val['product_price'], 0, ',', '.').' '.'đ'; ?>
                                           </div>
                                       </div>  
                                       </div>
                                   </div>
                                   <?php
                                            }
                                        }
                                    }
                                }
                            }else if (isset($_GET['brand']) && !isset($_GET['category'])   ){

                                $conn = mysqli_connect('localhost', 'root', '', 'shop');
                                include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                $cate = new category();
                                $test = [];
                                $test = $_GET['brand'];
                                $gia1 = $_GET['start_price'];
                                $gia2 = $_GET['end_price'];
                               

                                foreach ($test as $test1) {
                                   
                                        $product = "select * from tbl_product where brand_id = $test1 and (product_price BETWEEN $gia1 and $gia2)  ";
                                        $result1b = mysqli_query($conn, $product);
                                        if ($result1b->num_rows > 0) {
                                            foreach ($result1b as $key =>$val) {
                                                $check_cate = $cate->show_category_byID($val['category_id'])
                                            ?>
                                               <div class="col-lg-4 col-sm-6">
                                       <div class="product-item">
                                           <div class="pi-pic">
                                           <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                               <div class="icon">
                                                   <i class="icon_heart_alt"></i>
                                               </div>
                                               <ul>
                                                   <li class="w-icon active"><a  href="cart.php?id=<?php echo $val['product_id'] ?> &action=add"><i class="icon_bag_alt"></i></a></li>
                                                   <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                                   <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                               </ul>
                                           </div>
                                           <div class="pi-text">
                                           <div class="catagory-name">
                                               <?php
                                                     foreach ($check_cate as $key =>$val1) {
                                                         echo $val1['category_name'];
                                                     } ?>
                                       </div>
                                           <a href="product.php?id=<?php echo $val['product_id']  ?>">
                                               
        
                                               <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $val['product_name']  ?></h5>
                                               
                                           </a>
                                           <div class="product-price">
                                           <?php echo number_format($val['product_price'], 0, ',', '.').' '.'đ'; ?>
                                           </div>
                                       </div>  
                                       </div>
                                   </div>
                                   <?php
                                            }
                                        }
                                    }
                                }elseif(isset($_GET['category']) && !isset($_GET['brand'])  ) {

                                
                                    $conn = mysqli_connect('localhost', 'root', '', 'shop');
                                    include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                    $cate = new category();
                                    $test = [];
                                    $test = $_GET['category'];
                                    $gia1 = $_GET['start_price'];
                                    $gia2 = $_GET['end_price'];
                                   
    
                                    foreach ($test as $test1) {
                                       
                                            $product = "select * from tbl_product where category_id = $test1 and (product_price BETWEEN $gia1 and $gia2)  ";
                                            $result1b = mysqli_query($conn, $product);
                                            if ($result1b->num_rows > 0) {
                                                foreach ($result1b as $key =>$val) {
                                                    $check_cate = $cate->show_category_byID($val['category_id'])
                                                ?>
                                                   <div class="col-lg-4 col-sm-6">
                                           <div class="product-item">
                                               <div class="pi-pic">
                                               <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                                   <div class="icon">
                                                       <i class="icon_heart_alt"></i>
                                                   </div>
                                                   <ul>
                                                       <li class="w-icon active"><a  href="cart.php?id=<?php echo $val['product_id'] ?> &action=add"><i class="icon_bag_alt"></i></a></li>
                                                       <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                                       <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                   </ul>
                                               </div>
                                               <div class="pi-text">
                                               <div class="catagory-name">
                                                   <?php
                                                         foreach ($check_cate as $key =>$val1) {
                                                             echo $val1['category_name'];
                                                         } ?>
                                           </div>
                                               <a href="product.php?id=<?php echo $val['product_id']  ?>">
                                                   
            
                                                   <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $val['product_name']  ?></h5>
                                                   
                                               </a>
                                               <div class="product-price">
                                               <?php echo number_format($val['product_price'], 0, ',', '.').' '.'đ'; ?>
                                               </div>
                                           </div>  
                                           </div>
                                       </div>
                                       <?php
                                                }
                                            }
                                        }
                                    }elseif(isset($_GET['start_price']) && isset($_GET['end_price'])) {

                                
                                        $conn = mysqli_connect('localhost', 'root', '', 'shop');
                                        include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                        $cate = new category();
                                         
                                        $gia1 = $_GET['start_price'];
                                        $gia2 = $_GET['end_price'];
                                       
        
                                       
                                           
                                                $product = "select * from tbl_product where  product_price BETWEEN $gia1 and $gia2 ";
                                                $result1b = mysqli_query($conn, $product);
                                                if ($result1b->num_rows > 0) {
                                                    foreach ($result1b as $key =>$val) {
                                                        $check_cate = $cate->show_category_byID($val['category_id'])
                                                    ?>
                                                       <div class="col-lg-4 col-sm-6">
                                               <div class="product-item">
                                                   <div class="pi-pic">
                                                   <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                                       <div class="icon">
                                                           <i class="icon_heart_alt"></i>
                                                       </div>
                                                       <ul>
                                                           <li class="w-icon active"><a  href="cart.php?id=<?php echo $val['product_id'] ?> &action=add"><i class="icon_bag_alt"></i></a></li>
                                                           <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                                           <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                       </ul>
                                                   </div>
                                                   <div class="pi-text">
                                                   <div class="catagory-name">
                                                       <?php
                                                             foreach ($check_cate as $key =>$val1) {
                                                                 echo $val1['category_name'];
                                                             } ?>
                                               </div>
                                                   <a href="product.php?id=<?php echo $val['product_id']  ?>">
                                                       
                
                                                       <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $val['product_name']  ?></h5>
                                                       
                                                   </a>
                                                   <div class="product-price">
                                                   <?php echo number_format($val['product_price'], 0, ',', '.').' '.'đ'; ?>
                                                   </div>
                                               </div>  
                                               </div>
                                           </div>
                                           <?php
                                                    }
                                                }
                                            }elseif(isset($_GET['start_price'])  ) {

                                
                                                $conn = mysqli_connect('localhost', 'root', '', 'shop');
                                                include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                                $cate = new category();
                                                 
                                                $gia1 = $_GET['start_price'];
                                               
                                               
                
                                               
                                                   
                                                        $product = "select * from tbl_product where  product_price >= $gia1 ";
                                                        $result1b = mysqli_query($conn, $product);
                                                        if ($result1b->num_rows > 0) {
                                                            foreach ($result1b as $key =>$val) {
                                                                $check_cate = $cate->show_category_byID($val['category_id'])
                                                            ?>
                                                               <div class="col-lg-4 col-sm-6">
                                                       <div class="product-item">
                                                           <div class="pi-pic">
                                                           <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                                               <div class="icon">
                                                                   <i class="icon_heart_alt"></i>
                                                               </div>
                                                               <ul>
                                                                   <li class="w-icon active"><a  href="cart.php?id=<?php echo $val['product_id'] ?> &action=add"><i class="icon_bag_alt"></i></a></li>
                                                                   <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                                                   <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                               </ul>
                                                           </div>
                                                           <div class="pi-text">
                                                           <div class="catagory-name">
                                                               <?php
                                                                     foreach ($check_cate as $key =>$val1) {
                                                                         echo $val1['category_name'];
                                                                     } ?>
                                                       </div>
                                                           <a href="product.php?id=<?php echo $val['product_id']  ?>">
                                                               
                        
                                                               <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $val['product_name']  ?></h5>
                                                               
                                                           </a>
                                                           <div class="product-price">
                                                           <?php echo number_format($val['product_price'], 0, ',', '.').' '.'đ'; ?>
                                                           </div>
                                                       </div>  
                                                       </div>
                                                   </div>
                                                   <?php
                                                            }
                                                        }
                                                        
                                                    
                            }else{
                                $conn = mysqli_connect('localhost', 'root', '', 'shop');
                                include_once "/xampp/htdocs/shopbanhang/admin/class/category.php";
                                $product = "(
                                    select *
                                    from tbl_product
                                    where category_id = 6
                                   
                                    LIMIT 3
                                  )
                                  UNION ALL
                                  (
                                    select *
                                    from tbl_product
                                    where category_id = 7
                                   
                                    LIMIT 3
                                  )  ";
                                $log = mysqli_query($conn, $product);
    
                                $cate = new category();
                                foreach($log as $key =>$val){
                                    $check_cate = $cate->show_category_byID($val['category_id'])
                                    ?>
                                       <div class="col-lg-4 col-sm-6">
                               <div class="product-item">
                                   <div class="pi-pic">
                                   <img src="../admin/uploads/<?php echo $val['product_image']  ?>" alt="">
                                       <div class="icon">
                                           <i class="icon_heart_alt"></i>
                                       </div>
                                       <ul>
                                           <li class="w-icon active"><a  href="cart.php?id=<?php echo $val['product_id'] ?> &action=add"><i class="icon_bag_alt"></i></a></li>
                                           <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
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
                           </div>
                           <?php
                                }
                           ?>
                            <?php
                                
                            }
                            ?>     
                        </div>
                    </div>
                                  
                 
                    <!-- <div class="loading-more">
                        
                        <button class="btn btn-primary">
                            Loading More
                        </button>
                    </div> -->
                </div>
            </div>
        </div>