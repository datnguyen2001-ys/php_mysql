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
    <?php require_once '../pages/inc/header.php';   ?>

     
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <?php 
                if (isset($_GET['id'])) {
                     $id = $_GET['id'];
                }
                    $conn = mysqli_connect('localhost','root','','shop');
                    $sql = "select * from tbl_news where news_id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if ($result) {
                         while ($rows = mysqli_fetch_array($result)) {
                            ?>
                     <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2><?= $rows['news_title']  ?></h2>
                            <p> 
                            <?php
                                $cate = $rows['news_category_id'];
                                $sql1 = "select * from tbl_news_category where news_category_id= '$cate'";
                                $result1 = mysqli_query($conn,$sql1);
                                foreach($result1 as $key => $ml){
                                        echo $ml['news_category_name'];
                                }
                            ?>
                            <span><?= $rows['create_at']  ?></span></p>
                        </div>
                       
                        <div class="blog-detail-desc">
                            <p><?= $rows['news_desc']  ?> </p>
                        </div>
                        <div class="blog-quote">
                            <?= $rows['news_content']  ?>
                        </div>
                        
                       
                        <div class="tag-share">
                            
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                            <?php
                         }
                    }
                ?>
    
            </div>
        </div>
    </section>
     
    <?php require_once "../pages/inc/footer.php";   ?>
      
      <?php require_once "../pages/inc/lib_js.php";   ?>
</body>

</html>