<?php
 session_start()
    
?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once '../pages/inc/lib.php';   ?>
<body>
   


    <?php require_once '../pages/inc/header.php';   ?>

   
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">

                   
                        <div class="search-form">
                            <h4>Tìm kiếm</h4>
                            <form action="blog.php" method="post">
                                <input name="keyword" type="text" placeholder="Search . . .  ">
                                <button name="submit" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <form action="" method="get">

                            
                            <h4>Danh mục</h4>
                            <ul>
                                <?php 
                                    include_once '../admin/class/news_category.php';
                                    $new = new news_category();
                                    $check = $new->show_news_category();
                                    foreach($check as $key => $val){
                                       
                                        ?>
                                        <div>

                                            <input type="checkbox" name="category[]" value="<?= $val['news_category_id'] ?>">
                                            <?= $val['news_category_name'] ?>
                                        </div>
                                        <?php

                                    }
                                ?>
                               
                                 
                            </ul>
                            <button style="margin-top: 10px;" name="submit" class="btn btn-primary" type="submit">Lọc Tin</button>
                            </form>
                        </div>
                   
                      
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                <?php 
               
                    if (isset($_POST['submit'])) {
                         $key = $_POST['keyword'];
                          $conn = mysqli_connect('localhost','root','','shop');

                          $sql="select * from tbl_news where news_title like '%" .$key."%' ";

                            $result = mysqli_query($conn,$sql);
                            if ($result->num_rows>0) {
                                foreach($result as $key => $val){
                                    ?>
                                    <div class="row">
                        
                   
                                    
                                   <div class="col-lg-4 col-md-6">
                                       <div class="single-latest-blog">
                                           <img style="height: 300px;width:200px;object-fit: cover;" src="../admin/uploads/news/<?=$val['news_image']   ?>" alt="">
                                           <div class="latest-text">
                                               <div class="tag-list">
                                                   <div class="tag-item">
                                                       <i class="fa fa-calendar-o"></i>
                                                        <?=  $val['create_at'] ?>
                                                   </div>
                                                   
                                               </div>
                                           
                                               <a style="  display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; overflow: hidden;" href="blog-details.php?id=<?=  $val['news_id'] ?>">
                                                   <h4 style="font-size: 20px;"  > <?=  $val['news_title'] ?></h4>
                                               </a>
                                               <div style=" display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; overflow: hidden">
                   
                                                   <p ><?=  $val['news_desc']  ?></p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                           <?php
                   
                                       }
                                    ?>
                                    
                                   
                               </div>
                               <?php
                                
                            }
                        }elseif(isset($_GET['category'])){
                            $tmp = [];
                            $tmp = $_GET['category'];
                            ?>
                            <div class="row">
                        
                   
                        <?php 
                           $conn = mysqli_connect('localhost','root','','shop');
       
                           foreach( $tmp as $key =>$val1){
                           $sql = "select * from tbl_news where news_category_id = '$val1' ";
                           $result = mysqli_query($conn,$sql);
                           foreach($result as $key =>$val){
                               ?>
                       <div class="col-lg-4 col-md-6">
                           <div class="single-latest-blog">
                               <img style="height: 300px;width:200px;object-fit: cover;" src="../admin/uploads/news/<?=$val['news_image']   ?>" alt="">
                               <div class="latest-text">
                                   <div class="tag-list">
                                       <div class="tag-item">
                                           <i class="fa fa-calendar-o"></i>
                                            <?=  $val['create_at'] ?>
                                       </div>
                                       
                                   </div>
                               
                                   <a style="  display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; overflow: hidden;" href="blog-details.php?id=<?=  $val['news_id'] ?>">
                                       <h4 style="font-size: 20px;"  > <?=  $val['news_title'] ?></h4>
                                   </a>
                                   <div style=" display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; overflow: hidden">
       
                                       <p ><?=  $val['news_desc']  ?></p>
                                   </div>
                               </div>
                           </div>
                       </div>
                               <?php
       
                           }
                        }
                        ?>
                        
                       
                   </div>
                        <?php
                            
                    }else{
                        ?>
                        <div class="row">
                        
                   
                        <?php 
                           $conn = mysqli_connect('localhost','root','','shop');
       
                           $sql = "select * from tbl_news ";
                           $result = mysqli_query($conn,$sql);
                           foreach($result as $key =>$val){
                               ?>
                       <div class="col-lg-4 col-md-6">
                           <div class="single-latest-blog">
                               <img style="height: 300px;width:200px;object-fit: cover;" src="../admin/uploads/news/<?=$val['news_image']   ?>" alt="">
                               <div class="latest-text">
                                   <div class="tag-list">
                                       <div class="tag-item">
                                           <i class="fa fa-calendar-o"></i>
                                            <?=  $val['create_at'] ?>
                                       </div>
                                       
                                   </div>
                               
                                   <a style="  display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; overflow: hidden;" href="blog-details.php?id=<?=  $val['news_id'] ?>">
                                       <h4 style="font-size: 20px;"  > <?=  $val['news_title'] ?></h4>
                                   </a>
                                   <div style=" display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; overflow: hidden">
       
                                       <p ><?=  $val['news_desc']  ?></p>
                                   </div>
                               </div>
                           </div>
                       </div>
                               <?php
       
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