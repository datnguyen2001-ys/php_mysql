 
<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        chibi.haiz@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +0398941332
                    </div>
                </div>
                <?php
                
                if(isset($_SESSION['user_name']) && $_SESSION['user_name'] != null){
                        ?>
                         <div class="ht-right">
                         <a href="logout.php" class="login-panel"><i class="fa-solid fa-lock"></i>đăng xuất</a>
                            <a href="" style="margin-right: 15px" class="login-panel"><i class="fa fa-user"></i><?php echo $_SESSION['user_name'] ?></a>
                            <div class="top-social">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-linkedin"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>
                         
                        <?php
                        }else{
                            ?>
                            <div class="ht-right">
                            <a href="register.php" class="login-panel"><i class="fa-solid fa-lock"></i>đăng kí</a>
                            <a href="login.php" style="margin-right: 15px" class="login-panel"><i class="fa fa-user"></i>đăng nhập</a>
                            <div class="top-social">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-linkedin"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>
                            <?php
                        }
                 ?>
                
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Tìm kiếm</button>
                            <div class="input-group">
                                <form action="search_result.php" method="POST">

                                    <input name="key_search" type="text" placeholder="Tìm kiếm của bạn">
                                    <button name="submit_search" type="submit" type="button"><i class="ti-search"></i></button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>
                                    <?php
                                        if (isset($_SESSION['cart'])) {
                                             $count = count($_SESSION['cart']);
                                        }else{
                                            $count = 0;
                                        }
                                        echo $count;
                                    ?>

                                    </span>
                                </a>
                                <?php 
                                  if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) {
                                    ?>
                                        <div class="cart-hover">
                                    <div class="select-items">
                                        <?php

                                            if (isset($_SESSION['cart'])) {
                                                for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                                                    ?>
                                                    <table>
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td class="si-pic"><img style="width: 50px;" src="/../shopbanhang/admin/uploads/<?php echo $_SESSION['cart'][$i][2] ?>" alt=""></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <p><?php echo $_SESSION['cart'][$i][3] ?> x <?php echo $_SESSION['cart'][$i][4] ?></p>
                                                                    <h6 style="width: 150px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $_SESSION['cart'][$i][1] ?></h6>
                                                                </div>
                                                            </td>
                                                            <td class="si-close">
                                                                <a onclick="return confirm('bạn có muốn xóa!!!')"   href="delete_cart.php?delete_index=<?php echo  $i ?>">
                                                                    <i class="ti-close"></i>
                                                            </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php 
                                                }
                                            } 
                                        ?>  
                                         
                                    </div>
                                    <div class="select-total">
                                        <span>Tạm tính:</span>
                                        <h5 >
                                            <?php
                                                  if (isset($_SESSION['cart'])) {
                                                    $rt = 0;
                                                    for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
                                                        $rt += $_SESSION['cart'][$i][3]*$_SESSION['cart'][$i][4];
                                                    }
                                                    echo number_format($rt,0,',','.').' '.'đ';
                                                }
                                            ?>
                                            
                                        </h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.php" class="primary-btn view-card">Xem giỏ hàng</a>
                                        <a href="check-out.php" class="primary-btn checkout-btn">Thanh toán</a>
                                    </div>
                                </div>
                                    <?php
                                  }else{
                                    ?>
                                    <div class="cart-hover">
                                    <div class="select-items">
                                    <?php echo "giỏ hàng bạn đang trống"; ?>
                                    <?php
                                  }
                                ?>
                                 
                            </li>
                            <?php
                                 if (isset($_SESSION['cart'])) {
                                    $rt = 0;
                                        for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
                                             $rt += $_SESSION['cart'][$i][3]*$_SESSION['cart'][$i][4];
                                        }
                                        ?>
                                        <li class="cart-price"><?php echo number_format($rt,0,',','.').' '.'đ'; ?></li>  
                                    <?php
                                    }else{
                                        ?>
                                        <li class="cart-price"><?php echo '0'.'.'.'đ'; ?></li>  
                                    <?php
                                    }
                                    ?>
                           
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                     
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class=" "><a href="index.php">Trang chủ</a></li>
                        <li class=""><a href="shop.php">Cửa hàng</a></li>
                        <li><a href="#">Bộ sưu tập</a>
                             
                        </li>
                        <li><a href="blog.php">Tin tức</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>