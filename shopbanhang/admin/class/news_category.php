 
<?php 
    
    
    class news_category {
        public function add($data){
            include 'config/config.php';
        $news_category_name = mysqli_real_escape_string($conn,$data['news_category_name']);
        $news_category_desc = mysqli_real_escape_string($conn,$data['news_category_desc']);
        $news_category_status = mysqli_real_escape_string($conn,$data['news_category_status']);

        if (empty($news_category_name) ||empty($news_category_desc)  ) {
            $alert = "vui lòng nhập đầy đủ!!!";
            return $alert;
        }else{
            $sql_tmp = "select * from tbl_news_category where news_category_name = '$news_category_name'";
            $result = $conn->query($sql_tmp);
            if($result->num_rows>0){
                $alert = "Tên danh mục sản phẩm đã tồn tại!!";
                return $alert;
            }else{
                $sql = "insert into tbl_news_category (news_category_name,news_category_desc,news_category_status) values('$news_category_name','$news_category_desc','$news_category_status')";
                $result = $conn->query($sql);
                if ($result) {
                    $alert = "Thêm danh mục sản phẩm thành công";
                    return $alert;
                }else{
                    $alert = "Thêm danh mục sản phẩm thất bại";
                    return $alert;
                }
            }
            
        }
      
     }
     public function show_news_category(){
        
        include 'config/config.php';
        $sql = "select * from tbl_news_category";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     
     public function show_news_category_byID($id){
        include 'config/config.php';
       $sql = "select * from tbl_news_category where news_category_id = '$id'";
       $result = $conn->query($sql);
       $data =$result -> fetch_all(MYSQLI_ASSOC);;
       
       return $data;
       
    }
    public function update_news_category($id,$data){
        
        include 'config/config.php';
        $news_category_name = mysqli_real_escape_string($conn,$data['news_category_name']);
        $news_category_desc = mysqli_real_escape_string($conn,$data['news_category_desc']);
       $sql = "update tbl_news_category set news_category_name = '$news_category_name',news_category_desc = '$news_category_desc' where news_category_id = '$id'";
        $result = $conn->query($sql);
        if ($result) {
            echo "<script>alert('cập nhật danh mục thành công')</script>";
          
           
        }else{
            echo "<script>alert('cập nhật danh mục thất bại')</script>";;
          
        }
   
       
    }
  }
 


?>