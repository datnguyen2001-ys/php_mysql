<?php
    session_start();
    if(isset($_SESSION['user_name']) && $_SESSION['user_name'] != null){
        ?>
        <!DOCTYPE html>
        <?php
            include_once './class/news_category.php';
            $news_category = new news_category();
            if (isset($_POST['submit_news_category'])) {
                  $news_category_add = $news_category->add($_POST);
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
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


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
            <form method="POST" action="add_news_category.php">
                <?php  
                    if (isset($news_category_add)) {
                        echo $news_category_add;
                    }
                ?>
                <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Tên danh mục tin</label>
                    <input type="text" name="news_category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
                   
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleInputPassword1">mô tả</label>
                    <textarea  name="news_category_desc" rows="8" class="form-control" id="exampleInputPassword1">

                    </textarea>
                   
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlSelect2">Trạng thái</label><br>
                    <select style="width: 100%" name="news_category_status"  id="exampleFormControlSelect2">
                      
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    
                    </select>
            </div>
                
                <button style="margin-top: 20px" name="submit_news_category" type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- Widgets End -->
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
            <!-- Footer End -->
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

 