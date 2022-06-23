<?php 
    include_once './classpages/login.php';
        $login = new login();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
       $log_tmp = $login->register($_POST);
       
    }


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
     
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Đăng ký</h2>
                        <form action="register.php" method="post">
                            <?php
                                if (isset($log_tmp)) {
                                    echo $log_tmp;
                                }
                            ?>
                            <div class="group-input">
                                <label for="username">Họ tên: </label>
                                <input type="text" required name="user_name" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">email</label>
                                <input type="email" name="user_email" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">mật khẩu</label>
                                <input type="password" name="user_password" id="con-pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Số điện thoại: </label>
                                <input type="text" name="user_phone" id="con-pass">
                            </div>
                            <button type="submit" name="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
      
    <?php require_once "../pages/inc/footer.php";   ?>

    <?php require_once "../pages/inc/lib_js.php";   ?>

</body>

</html>