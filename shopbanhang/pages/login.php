<?php  
    include_once './classpages/login.php';
    $login_tmp =new login();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST['submit'])) {
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];
        $login_check = $login_tmp->login($email,$password);
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
                        <span>Login</span>
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
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="login.php" method="post">
                            <?php  
                            if (isset( $login_check )) {
                               echo $login_check;
                            }

                            ?>
                            <div class="group-input">
                                <label for="username">Email</label>
                                <input type="text" name="user_email" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">mật khẩu</label>
                                <input type="password" name="user_password" id="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Save Password
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Forget your Password</a>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="site-btn login-btn">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="register.php" class="or-login">Or Create An Account</a>
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