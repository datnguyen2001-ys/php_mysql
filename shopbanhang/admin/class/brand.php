 
<?php 
    
    
    class brand {
        public function add($data){
            include 'config/config.php';
        $brand_name = mysqli_real_escape_string($conn,$data['brand_name']);
        $brand_desc = mysqli_real_escape_string($conn,$data['brand_desc']);
        $brand_status = mysqli_real_escape_string($conn,$data['brand_status']);

        if (empty($brand_name) ||empty($brand_desc)  ) {
            $alert = "vui lòng nhập đầy đủ!!!";
            return $alert;
        }else{
            $sql_tmp = "select * from tbl_brand where brand_name = '$brand_name'";
            $result = $conn->query($sql_tmp);
            if($result->num_rows>0){
                $alert = "Tên danh mục sản phẩm đã tồn tại!!";
                return $alert;
            }else{
                $sql = "insert into tbl_brand (brand_name,brand_desc,brand_status) values('$brand_name','$brand_desc','$brand_status')";
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
     public function show_brand(){
        
        include 'config/config.php';
        $sql = "select * from tbl_brand";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     
     public function show_brand_byID($id){
        include 'config/config.php';
       $sql = "select * from tbl_brand where brand_id = '$id'";
       $result = $conn->query($sql);
       $data =$result -> fetch_all(MYSQLI_ASSOC);;
       
       return $data;
       
    }
    public function update_brand($id,$data){
        
        include 'config/config.php';
        $brand_name = mysqli_real_escape_string($conn,$data['brand_name']);
        $brand_desc = mysqli_real_escape_string($conn,$data['brand_desc']);
       $sql = "update tbl_brand set brand_name = '$brand_name',brand_desc = '$brand_desc' where brand_id = '$id'";
        $result = $conn->query($sql);
        if ($result) {
            echo "<script>alert('cập nhật danh mục thành công')</script>";
          
           
        }else{
            echo "<script>alert('cập nhật danh mục thất bại')</script>";;
          
        }
   
       
    }
  }
 


?>