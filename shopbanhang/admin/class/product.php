 
<?php 
    
    
    class product {
        public function add($data,$files){
            include 'config/config.php';
        $product_name = mysqli_real_escape_string($conn,$data['product_name']);
        $product_desc = mysqli_real_escape_string($conn,$data['product_desc']);
        $product_status = mysqli_real_escape_string($conn,$data['product_status']);
        $brand_id = mysqli_real_escape_string($conn,$data['brand_id']);
        $category_id = mysqli_real_escape_string($conn,$data['category_id']);
        $product_price = mysqli_real_escape_string($conn,$data['product_price']);
        $product_quantity = mysqli_real_escape_string($conn,$data['product_quantity']);
        $product_code = substr(md5(time()),0,6);

    //     $dinhdang = array('jpg','png','jpeg','gif');
    //     $file_name = $_FILES['product_image']['name'];
    //     $file_size = $_FILES['product_image']['size'];
    //     $file_tmp = $_FILES['product_image']['tmp_name'];
        
    //    $div = explode('.',$file_name);
    //    $file_ext = strtolower(end($div));
    //    $uni = substr(md5(time()),0,10).'.'.$file_ext;
    //    $upload = "uploads/".$uni;

       if (isset($_FILES['product_image'])) {
         
        $file_name = $_FILES['product_image']['name'];
        // if ( $file_name = $_FILES['product_image']['type'] == 'image/jpeg '||$file_name = $_FILES['product_image']['type'] == 'image/jpg '||$file_name = $_FILES['product_image']['type'] == 'image/png') {
            move_uploaded_file($_FILES['product_image']['tmp_name'] ,'uploads/'.$file_name);
        // }else{
        //     $alert = "vui lòng chọn file ảnh đúng định dạng!!";
        //         return $alert;
        // }
       }
       if (isset($_FILES['product_images'])) {
         
        $file_names = $_FILES['product_images']['name'];
        
        foreach($file_names as $key => $val){
             move_uploaded_file($_FILES['product_images']['tmp_name'][$key] ,'uploads/'.$val);

         }
       }
       
    
        if (empty($product_name) ||empty($product_desc || $brand_id == ""|| $category_id == "" || $product_price == "" || $product_quantity == "")  ) {
            $alert = "vui lòng nhập đầy đủ!!!";
            return $alert;
        }else{
            $sql_tmp = "select * from tbl_product where product_name = '$product_name'";
            $result = $conn->query($sql_tmp);
            if($result->num_rows>0){
                $alert = "Tên danh mục sản phẩm đã tồn tại!!";
                return $alert;
            }else{
              
                $sql = "insert into tbl_product (product_name,product_desc,product_status,brand_id,category_id,product_price,product_quantity,product_image,product_code) 
                values('$product_name','$product_desc','$product_status','$brand_id','$category_id','$product_price','$product_quantity','$file_name','$product_code')";
                $result = $conn->query($sql);
                $tmp_id = mysqli_insert_id($conn);
                foreach($file_names as $key => $val){
                    mysqli_query($conn,"insert into img_products (product_id,image) values('$tmp_id','$val')");
       
                }
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
     public function show_desc_image($id){
        
        include 'config/config.php';
        $sql = "select * from img_products where product_id = '$id'";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     public function show_product(){
        
        include 'config/config.php';
        $sql = "select * from tbl_product";
         $result = $conn->query($sql);
         $data =$result -> fetch_all(MYSQLI_ASSOC);;

         return $data;

     }
     
     public function show_product_byID($id){
        include 'config/config.php';
       $sql = "select * from tbl_product where product_id = '$id'";
       $result = $conn->query($sql);

       // lấy session category_id
       $sql1 = "select * from tbl_product where product_id = '$id'";
       $result1 = $conn->query($sql1);
       $rows = mysqli_fetch_assoc($result1);
       $_SESSION['category_id'] = $rows['category_id'];

       $data =$result -> fetch_all(MYSQLI_ASSOC);
       
       return $data;
       
    }
    public function show_product_bycategory($category_id){
        include 'config/config.php';
       $sql = "select * from tbl_product where category_id = '$category_id' and product_status = 1 ";
       $result = $conn->query($sql);

       $data =$result -> fetch_all(MYSQLI_ASSOC);
       
       return $data;
       
    }
    public function show_product_bycate($id,$category_id){
        include 'config/config.php';
       $sql = "select * from tbl_product where category_id = '$category_id' AND not product_id ='$id' ";
       $result = $conn->query($sql);

       $data =$result -> fetch_all(MYSQLI_ASSOC);
       
       return $data;
       
    }
    public function update_product($id,$data,$files){
        
        include 'config/config.php';
        $product_name = mysqli_real_escape_string($conn,$data['product_name']);
        $product_desc = mysqli_real_escape_string($conn,$data['product_desc']);
       
        $brand_id = mysqli_real_escape_string($conn,$data['brand_id']);
        $category_id = mysqli_real_escape_string($conn,$data['category_id']);
        $product_price = mysqli_real_escape_string($conn,$data['product_price']);
        $product_quantity = mysqli_real_escape_string($conn,$data['product_quantity']);


    //     $dinhdang = array('jpg','png','jpeg','gif');
    //     $file_name = $_FILES['product_image']['name'];
    //     $file_size = $_FILES['product_image']['size'];
    //     $file_tmp = $_FILES['product_image']['tmp_name'];
        
    //    $div = explode('.',$file_name);
    //    $file_ext = strtolower(end($div));
    //    $uni = substr(md5(time()),0,10).'.'.$file_ext;
    //    $upload = "uploads/".$uni;

    if (isset($_FILES['product_image'])) {
         
        $file_name = $_FILES['product_image']['name'];
        // if ( $file_name = $_FILES['product_image']['type'] == 'image/jpeg '||$file_name = $_FILES['product_image']['type'] == 'image/jpg '||$file_name = $_FILES['product_image']['type'] == 'image/png') {
            move_uploaded_file($_FILES['product_image']['tmp_name'] ,'uploads/'.$file_name);
        // }else{
        //     $alert = "vui lòng chọn file ảnh đúng định dạng!!";
        //         return $alert;
        // }
       }
       if (isset($_FILES['product_images'])) {
         
        $file_names = $_FILES['product_images']['name'];
        
        foreach($file_names as $key => $val){
             move_uploaded_file($_FILES['product_images']['tmp_name'][$key] ,'uploads/'.$val);

         }
       }

       if (empty($product_name) ||empty($product_desc || $brand_id == ""|| $category_id == "" || $product_price == "" || $product_quantity == "")  ) {
        $alert = "vui lòng nhập đầy đủ!!!";
        return $alert;
    }
    if (!empty($file_names)) {
        foreach($file_names as $key => $val){
            mysqli_query($conn,"insert into img_products (product_id,image) values('$id','$val')");

        }
    }
        if (empty($file_name)) {
            $sql = "UPDATE tbl_product SET product_name = '$product_name', product_desc = '$product_desc',product_price = '$product_price', product_quantity = '$product_quantity',brand_id = '$brand_id',category_id = '$category_id'  where product_id = '$id'";
            $result = $conn->query($sql);
            
            if ($result) {
                echo "<script>alert('cập nhật danh mục thành công')</script>";
              
               
            }else{
                echo "<script>alert('cập nhật danh mục thất bại')</script>";;
              
            }
        }else{
             
             
                
                $sql = "UPDATE tbl_product SET product_name = '$product_name', product_desc = '$product_desc',product_price = '$product_price', product_quantity = '$product_quantity',brand_id = '$brand_id',category_id = '$category_id', product_image = '$uni', where product_id = '$id'";
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