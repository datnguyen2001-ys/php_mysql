 <?php     session_start(); ?>
<?php 
 
 class admin{
     public function login($email,$password){
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__.'/config/config.php');
     
       
      
            if (empty($email) || empty($password)) {
                $alert = "email hoặc mật khẩu không đươc để rỗng";
                return $alert;
            }else{

                    $sql = "select * from users where user_email = '$email' and user_password = '$password' and usertype= 0";
                    $select = $conn->query($sql);
                    if ($select->num_rows > 0) {
                        $rows = mysqli_fetch_array($select);
                       
                             
                            $_SESSION['user_name'] = $rows['user_name'] ;
                            header('location:index.php');
                        
                }else{
                    $alert = "email hoặc mật khẩu không đúng";
                    return $alert;
                }
            }
            $conn->close();
        }
    }



?>