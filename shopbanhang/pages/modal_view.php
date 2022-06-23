<?php  
 if(isset($_POST["id"]))  
 {  
    $id = $_POST["id"];
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "shop");  
      $query = "SELECT * FROM tbl_product WHERE product_id = '$id'" ;  
      $result = mysqli_query($connect, $query);  
      
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Tên sản phẩm</label></td>  
                     <td width="70%">'.$row["product_name"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Mô tả</label></td>  
                    <td width="70%">'.$row["product_desc"].'</td>  
                 </tr>  
                 <tr>  
                    <td width="30%"><label>ảnh</label></td>  
                    <td width="70%"> <img style="height: 150px" src="../admin/uploads/'.$row['product_image'].' " alt=""></td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>giá</label></td>  
                     <td width="70%">'.number_format($row["product_price"],0,',','.').' '.'đ'.'</td>  
                </tr>  
                
                 
               
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>