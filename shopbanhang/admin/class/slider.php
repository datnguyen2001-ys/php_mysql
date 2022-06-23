 
<?php 
    
    
    class slider {
        public function add($data,$flies){
            include 'config/config.php';
        $slider_name = mysqli_real_escape_string($conn,$data['slider_name']);
        $slider_desc = mysqli_real_escape_string($conn,$data['slider_desc']);
        $slider_status = mysqli_real_escape_string($conn,$data['slider_status']);

        $file_name = $_FILES['slider_image']['name'];
        if (isset($file_name) && !empty($file_name)) {

            $file_name = $_FILES['slider_image']['name'];
            move_uploaded_file($_FILES['slider_image']['tmp_name'] ,'uploads/'.$file_name);
        }
       
        if (empty($slider_name) || empty($slider_desc) )  {
            $alert = "vui lòng nhập đầy đủ!!!";
            return $alert;
        }else{
            $sql_tmp = "select * from tbl_slider where slider_name = '$slider_name'";
            $result = $conn->query($sql_tmp);
            if($result->num_rows>0){
                $alert = "Tên danh mục sản phẩm đã tồn tại!!";
                return $alert;
            }else{
                $sql = "insert into tbl_slider (slider_name ,slider_desc,slider_status,slider_image) values('$slider_name','$slider_desc','$slider_status','$file_name')";
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
     public function show_slider(){
        
        include 'config/config.php';
        $sql = "select * from tbl_slider";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     
     public function show_slider_byID($id){
        include 'config/config.php';
       $sql = "select * from tbl_slider where slider_id = '$id'";
       $result = $conn->query($sql);
       $data =$result -> fetch_all(MYSQLI_ASSOC);;
       
       return $data;
       
    }
    public function update_slider($id,$data){
        
        include 'config/config.php';
        $slider_name = mysqli_real_escape_string($conn,$data['slider_name']);
        $slider_desc = mysqli_real_escape_string($conn,$data['slider_desc']);

        
        $file_name = $_FILES['slider_image']['name'];
        if (isset($file_name) && !empty($file_name)) {

            $file_name = $_FILES['slider_image']['name'];
            move_uploaded_file($_FILES['slider_image']['tmp_name'] ,'uploads/'.$file_name);
            $sql = "update tbl_slider set slider_name = '$slider_name',slider_desc = '$slider_desc',slider_image = '$file_name' where slider_id = '$id'";
             $result = $conn->query($sql);
             if ($result) {
                 echo "<script>alert('cập nhật danh mục thành công')</script>";
               
                
             }else{
                 echo "<script>alert('cập nhật danh mục thất bại')</script>";;
               
             }
        }else{
            $sql = "update tbl_slider set slider_name = '$slider_name',slider_desc = '$slider_desc'  where slider_id = '$id'";
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