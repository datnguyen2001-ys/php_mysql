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
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
    <?php require_once "../pages/inc/filter_product_all.php";   ?>
    </section>
    
    <?php require_once "../pages/inc/footer.php";   ?>

<?php require_once "../pages/inc/lib_js.php";   ?>

</body>

</html>