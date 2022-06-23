<?php session_start();  ?>
<?php
    class login{
        public function test_input($data){
            //Hàm trim() được dùng để: "Xóa những ký tự có tên trong danh sách ký tự do bạn chỉ định ra khỏi vị trí đầu tiên và cuối cùng của chuỗi.
            $data = trim($data);

            //hàm stripslashes loại bỏ \
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        public function register($data){
            define('__ROOT__', dirname(dirname(__FILE__)));
            require_once(__ROOT__.'/config/config.php');

           $email = $this->test_input($data['user_email']);
           $name = $this->test_input($data['user_name']);
           $phone = $this->test_input($data['user_phone']);
           $password = $this->test_input($data['user_password']);

            $name = mysqli_real_escape_string($conn,$data['user_name']);
            $email = mysqli_real_escape_string($conn,$data['user_email']);
            $password = md5(mysqli_real_escape_string($conn,$data['user_password']));
            $phone = mysqli_real_escape_string($conn,$data['user_phone']);
            $usertype = 1;
            // if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            //     $alert = "You Entered An Invalid Email Format"; 
            //     return $alert;
            // }
            // if (strlen($_POST["user_password"]) <= '8') {
            //     $alert = "Độ dài không vượt quá 8 kí tự!";
            //     return $alert;
            // }
            // elseif(!preg_match("#[0-9]+#",$password)) {
            //     $alert = "Your Password Must Contain At Least 1 Number!";
            //     return $alert;
            // }
            // elseif(!preg_match("#[A-Z]+#",$password)) {
            //     $alert = "Your Password Must Contain At Least 1 Capital Letter!";
            //     return $alert;
            // }
            // elseif(!preg_match("#[a-z]+#",$password)) {
            //     $alert = "Your Password Must Contain At Least 1 Lowercase Letter!";
            //     return $alert;
            // } else {
            //     $alert = "Please Check You've Entered Or Confirmed Your Password!";
            //     return $alert;
            // }
            
            $sql_tmp = "select * from users where user_email = '$email'";
            $result1 = $conn->query($sql_tmp);
            if($result1->num_rows > 0){
                $alert = "Email đã tồn tại";
                return $alert;
            } 
            
            if ( $name == "" || $email == "" || $password == "" || $phone == "" ) {
              $alert = "Không được bỏ rỗng các trường trên";
              return $alert;
            }else{
                $sql = "insert into users (user_name,user_password,user_email,user_phone,usertype) values('$name','$password','$email','$phone','$usertype')";
                $result = $conn->query($sql);
                if($result){
                    $alert = "Đăng kí tài khoản thành công";
                    return $alert;
                }else{
                    $alert = "Đăng kí tài khoản thất bại";
                    return $alert;
                }
   
            }
            
        }
        public function login($email,$password){
            require_once '/xampp/htdocs/shopbanhang/pages/config/config.php';
            $email = $this->test_input($email);
            $password = $this ->test_input($password);

            $email = mysqli_real_escape_string($conn,$email);
            $password = md5(mysqli_real_escape_string($conn,$password  ));

            if ($email == "" || $password == "") {
                $alert = "Không được bỏ rỗng các trường trên";
                return $alert;
            }else{
                $sql = "select * from users where user_email = '$email' and user_password = '$password' and usertype = 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                   
                    $rows = mysqli_fetch_array($result);
                      $_SESSION['id'] = $rows['user_id'];
                      $_SESSION['user_name'] = $rows['user_name'];
                      header("location:index.php");
                }else{
                    $alert = "email hoặc mật khẩu không đúng";
                  
                    return $alert;
                }
            }
        }
    }


?>