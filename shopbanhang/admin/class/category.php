 
<?php 
    
    
    class category {
        public function add($data){
            include 'config/config.php';
        $category_name = mysqli_real_escape_string($conn,$data['category_name']);
        $category_desc = mysqli_real_escape_string($conn,$data['category_desc']);
        $category_status = mysqli_real_escape_string($conn,$data['category_status']);

        if (empty($category_name) ||empty($category_desc)  ) {
            $alert = "vui lòng nhập đầy đủ!!!";
            return $alert;
        }else{
            $sql_tmp = "select * from tbl_category where category_name = '$category_name'";
            $result = $conn->query($sql_tmp);
            if($result->num_rows>0){
                $alert = "Tên danh mục sản phẩm đã tồn tại!!";
                return $alert;
            }else{
                $sql = "insert into tbl_category (category_name,category_desc,category_status) values('$category_name','$category_desc','$category_status')";
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
     public function show_category(){
        
        include 'config/config.php';
        $sql = "select * from tbl_category";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     
     public function show_category_byID($id){
        include 'config/config.php';
       $sql = "select * from tbl_category where category_id = '$id'";
       $result = $conn->query($sql);
       $data =$result -> fetch_all(MYSQLI_ASSOC);;
       
       return $data;
       
    }
    public function update_category($id,$data){
        
        include 'config/config.php';
        $category_name = mysqli_real_escape_string($conn,$data['category_name']);
        $category_desc = mysqli_real_escape_string($conn,$data['category_desc']);
       $sql = "update tbl_category set category_name = '$category_name',category_desc = '$category_desc' where category_id = '$id'";
        $result = $conn->query($sql);
        if ($result) {
            echo "<script>alert('cập nhật danh mục thành công')</script>";
          
           
        }else{
            echo "<script>alert('cập nhật danh mục thất bại')</script>";;
          
        }
   
       
    }
  }
 


?>