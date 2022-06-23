 
<?php 
    
    
    class news {
        public function add($data,$files){
            include 'config/config.php';
        $news_name = mysqli_real_escape_string($conn,$data['news_name']);
        $news_desc = mysqli_real_escape_string($conn,$data['news_desc']);
        $news_content = mysqli_real_escape_string($conn,$data['news_content']);
        $news_status = mysqli_real_escape_string($conn,$data['news_status']);
        $news_category = mysqli_real_escape_string($conn,$data['news_category']);
        date_default_timezone_set('Asia/Ho_Chi_Minh').
        $date =  date('d/m/Y - H:i:s');
        $filename = $_FILES['news_image']['name'];
        $file_tmp =  $_FILES['news_image']['tmp_name'];


        if (empty($news_name) ||empty($news_desc) ||empty($news_content)  ||empty($news_desc) || empty($filename) )   {
            $alert = "vui lòng nhập đầy đủ!!!";
            return $alert;
        }else{
            $sql_tmp = "select * from tbl_news where news_title = '$news_name'";
            $result = $conn->query($sql_tmp);
            if($result->num_rows>0){
                $alert = "Tên tin sản phẩm đã tồn tại!!";
                return $alert;
            }else{
                move_uploaded_file($file_tmp,'uploads/news/'.$filename);
                $sql = "insert into tbl_news (news_title,news_desc,news_status,news_content,news_category_id,create_at,news_image	) 
                values('$news_name','$news_desc','$news_status','$news_content','$news_category','$date','$filename')";
                $result = $conn->query($sql);
                if ($result) {
                    $alert = "Thêm tin sản phẩm thành công";
                    return $alert;
                }else{
                    $alert = "Thêm tin sản phẩm thất bại";
                    return $alert;
                }
            }
            
        }
      
     }
     public function show_news(){
        
        include 'config/config.php';
        $sql = "select * from tbl_news";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     
     public function show_news_byID($id){
        include 'config/config.php';
       $sql = "select * from tbl_news where news_id = '$id'";
       $result = $conn->query($sql);
       $data =$result -> fetch_all(MYSQLI_ASSOC);;
       
       return $data;
       
    }
    public function update_news($id,$data){
        
        include 'config/config.php';
        $news_name = mysqli_real_escape_string($conn,$data['news_name']);
        $news_desc = mysqli_real_escape_string($conn,$data['news_desc']);
        $news_content = mysqli_real_escape_string($conn,$data['news_content']);
   
        $news_category = mysqli_real_escape_string($conn,$data['news_category']);

        $filename = $_FILES['news_image']['name'];
        $file_tmp =  $_FILES['news_image']['tmp_name'];
        if (empty($filename)) {
            $sql = "update tbl_news set  news_title = '$news_name',news_desc = '$news_desc',news_content = '$news_content',news_category_id='$news_category' where news_id = '$id'";
            $result = $conn->query($sql);
            if ($result) {
                echo "<script>alert('cập nhật danh mục thành công')</script>";
              
               
            }else{
                echo "<script>alert('cập nhật danh mục thất bại')</script>";;
              
            }
        }else{
            move_uploaded_file($file_tmp,'uploads/news/'.$filename);
            $sql = "update tbl_news set  news_image = '$filename' ,  news_title = '$news_name',news_desc = '$news_desc',news_content = '$news_content',news_category_id='$news_category' where news_id = '$id'";
             $result = $conn->query($sql);
             if ($result) {
                 echo "<script>alert('cập nhật danh mục thành công')</script>";
               
                
             }else{
                 echo "<script>alert('cập nhật danh mục thất bại')</script>";;
               
             }
        }
        
       
    }
  }
 


?>