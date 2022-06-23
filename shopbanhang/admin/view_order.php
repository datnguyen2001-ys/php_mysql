 
<?php
    session_start();
    if(isset($_SESSION['user_name']) && $_SESSION['user_name'] != null){
        ?>
        <!DOCTYPE html>
        

        <?php 
            if (isset($_POST['update_status'])) {
                $status = $_POST['status'];
                $conn = mysqli_connect('localhost','root','','shop');
                
                    $sql_tmp = "update tbl_order set order_status = '$status'";
                    $result1a = mysqli_query($conn,$sql_tmp);
                    if ($result1a) {
                        echo "<script>alert('cập nhật trạng thái đơn hàng thành công')</script>";
                        header('location:all_order.php');
                    }
                    
                         


            }
        ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
         
        
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> <?php 
                           
                           echo $_SESSION['user_name']; 
                       
                        ?></span></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">danh mục sản phẩm</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="add_category.php" class="dropdown-item">Thêm Danh mục</a>
                            <a href="all_category.php" class="dropdown-item">Quản lí danh mục</a>
                        </div>
                    </div>
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">danh mục Thương hiệu</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="add_brand.php" class="dropdown-item">Thêm Thương hiệu</a>
                            <a href="all_brand.php" class="dropdown-item">Quản lí Thương hiệu</a>
                        </div>
                    </div>
                   
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">Sản phẩm</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="add_product.php" class="dropdown-item">Thêm sản phẩm</a>
                            <a href="all_product.php" class="dropdown-item">Quản lí sản phẩm</a>
                        </div>
                    </div>
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">slider</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="add_slider.php" class="dropdown-item">Thêm slider</a>
                            <a href="all_slider.php" class="dropdown-item">Quản lí slider</a>
                        </div>
                    </div>
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">đơn hàng</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="all_order.php" class="dropdown-item">quản lí đơn hàng</a>
                            
                        </div>
                    </div>
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">Danh mục tin tức</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_news_category.php" class="dropdown-item">Thêm danh mục</a>
                            <a href="all_news_category.php" class="dropdown-item">quản lí danh mục</a>
                            
                        </div>
                    </div>
                    <div class="nav-item  ">
                        <a href="#" class="nav-link  " data-bs-toggle="dropdown">Tin tức</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_news.php" class="dropdown-item">Thêm tin tức</a>
                            <a href="all_news.php" class="dropdown-item">quản lí tin tức</a>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
          

<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                                <?php 
                           
                                echo $_SESSION['user_name']; 
                            
                             ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
 
            <div class="container-fluid pt-4 px-4">
                     <div class="bg-light rounded-top p-4">
                        <h2 >Thông tin chi tiết đơn hàng</h2>
                         
                        <?php
                        if (isset($_GET['id'])) {
                            $conn = mysqli_connect('localhost','root','','shop');
                            $id = $_GET['id'];
                                $sql_tmp = "select * from tbl_order where order_code = '$id'";

                                 $result1a = mysqli_query($conn,$sql_tmp);
                                 if ($result1a) {
                                     while ($row = mysqli_fetch_array($result1a)) {
                                         $id_1a = $row['receive_id'];
                                         $sql_us = "select * from tbl_receive where receive_id = $id_1a";
                                         $result1b = mysqli_query($conn, $sql_us);
                                         if ($result1b) {
                                             while ($rows = mysqli_fetch_array($result1b)) {
                                                 ?>
                                           <p style="color: black;">Họ tên người nhận: <?= $rows['receive_name'] ?>  </p>
                                           <p style="color: black;">Số điện thoại: <?= $rows['receive_phone'] ?>  </p>
                                           <p style="color: black;">Địa chỉ nhận hàng: <?= $rows['receive_address'] ?>  </p>
                                           <p style="color: black;">Ghi chú: <?= $row ['order_notes']?>  </p>
                                           <p style="color: black;">ngày đặt:  <?=$row ['create_at'] ?>  </p>
                                           <p style="color: black;">trạng thái đơn hàng:  
                                           <?php
                                           if($row ['order_status'] == 1){
                                                echo 'đang xử lí';
                                           }elseif( $row['order_status'] == 2){
                                            echo 'đã xử lí';
                                           } elseif( $row['order_status'] == 3){
                                            echo 'đang giao hàng';
                                           } elseif($row ['order_status'] == 4){
                                            echo 'đã giao';
                                           }else{
                                            echo 'hủy đơn/trả lại';
                                           }
                                           ?>  </p>
                                           
                                        <?php
                                             }
                                         }
                                     }
                                 }
                                 } 
                                 ?>
                       
                       


                </div>
            </div>


            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <h3>Danh sách đơn hàng</h3>
                    <div class="row">
                    <table class="table table-primary">
                    <thead>
                        <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">ảnh</th>
                        <th scope="col">số lượng</th>
                        <th scope="col">giá</th>
                        <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     if (isset($_GET['id'])) {
                        $id_code  = $_GET['id'];
                        
                        $conn = mysqli_connect('localhost','root','','shop');
                
                        $sql = "select * from tbl_order_details where order_code = '$id_code'";
                        $result = mysqli_query($conn,$sql);
                         $i= 0;
                            foreach ($result as $key => $value) {
                                $i++;
                                ?>
                             <tr>
                          
                             <td><?= $i?></td>
                                 
                           
                           <td>
                                     <?= $value['product_name']  ?>
                           </td>
                           <td>
                                 <img style="height: 100px;width: 100px;object-fit: cover;" src="./uploads/<?=  $value['product_image']  ?>" alt="">
                           </td>
                           <td>
                                 <?=  $value['product_quantity'] ?>
                           </td>
                           <td>
                                     <?=  number_format($value['product_price'],0,',','.').' '.'đ'; ?>
                           </td>
                           <td>
                                     <?=  number_format(($value['product_price']*$value['product_quantity']),0,',','.').' '.'đ'; ?>
                           </td>
                        </tr>
                         

                            <?php

                            }
                            ?>
                            
                    
                     
                            
                      
                    
                        <?php
                        }
                        ?>
                          
                    </tbody>
                    </table>
                    <p style="width: 100%;"> Tổng tiền:
                                    <?php
                                     if (isset($_GET['id'])) {
                                        $conn = mysqli_connect('localhost','root','','shop');
                                        $id = $_GET['id'];
                                            $sql_tmp = "select * from tbl_order where order_code = '$id'";
            
                                             $result1a = mysqli_query($conn,$sql_tmp);
                                             if ($result1a) {
                                                 while ($row = mysqli_fetch_array($result1a)) {
                                
                                                         echo  number_format($row['order_total'],0,',','.').' '.'đ';; 
                                                 
                            
                                                 }
                                                
                                             }
                                            }
                                ?>


                                </p>

                            <form action="view_order.php" method="POST" style="display:flex">
                            <div style="width: 300px;" class="form-group">
                                
                                <select name="status" class="form-control" id="sel1">
                                    <?php
                                if (isset($_GET['id'])) {
                            $conn = mysqli_connect('localhost','root','','shop');
                            $id = $_GET['id'];
                                $sql_tmp = "select * from tbl_order where order_code = '$id'";

                                 $result1a = mysqli_query($conn,$sql_tmp);
                                 if ($result1a) {
                                     while ($row = mysqli_fetch_array($result1a)) {
                                        if($row['order_status'] == 1){
                                            ?>
                                            <option selected value="1"><?= 'đang xử lí' ?></option>
                                            <option  value="2"><?= 'đã xử lí' ?></option>
                                            <option  value="3"><?= 'đang giao hàng' ?></option>
                                            <option  value="4"><?= 'đã  giao ' ?></option>
                                            <option  value="5"><?= 'hủy đơn/trả lại' ?></option>
                                            <?php
                                        }elseif($row['order_status'] == 2){
                                            ?>
                                           <option  value="1"><?= 'đang xử lí' ?></option>
                                            <option selected  value="2"><?= 'đã xử lí' ?></option>
                                            <option  value="3"><?= 'đang giao hàng' ?></option>
                                            <option  value="4"><?= 'đã  giao ' ?></option>
                                            <option  value="5"><?= 'hủy đơn/trả lại' ?></option>
                                            <?php
                                        }
                                        elseif($row['order_status'] == 3){
                                            ?>
                                           <option  value="1"><?= 'đang xử lí' ?></option>
                                            <option   value="2"><?= 'đã xử lí' ?></option>
                                            <option selected value="3"><?= 'đang giao hàng' ?></option>
                                            <option  value="4"><?= 'đã  giao ' ?></option>
                                            <option  value="5"><?= 'hủy đơn/trả lại' ?></option>
                                            <?php
                                        }
                                        elseif($row['order_status'] == 4){
                                            ?>
                                             <option  value="1"><?= 'đang xử lí' ?></option>
                                            <option   value="2"><?= 'đã xử lí' ?></option>
                                            <option  value="3"><?= 'đang giao hàng' ?></option>
                                            <option selected  value="4"><?= 'đã  giao ' ?></option>
                                            <option  value="5"><?= 'hủy đơn/trả lại' ?></option>
                                            <?php
                                        }
                                        elseif($row['order_status'] == 5){
                                            ?>
                                          <option  value="1"><?= 'đang xử lí' ?></option>
                                            <option  value="2"><?= 'đã xử lí' ?></option>
                                            <option  value="3"><?= 'đang giao hàng' ?></option>
                                            <option   value="4"><?= 'đã  giao ' ?></option>
                                            <option selected  value="5"><?= 'hủy đơn/trả lại' ?></option>
                                            <?php
                                        }
                                     }
                                    }
                                }
                                        ?>
                                   
                                    
                                </select>
                                </div>
                                <button style="height: 40px; margin-left: 10px;" class="btn btn-primary" name="update_status" type="submit">Cập nhật</button>
                            </form>
                    </div>
            </div>
            
        </div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php

    
    
    }else{
        header("location:signin.php");
    }

 