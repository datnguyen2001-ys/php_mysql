<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/sweetalert.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             
             
            $('.add_cart').click(function(){
                var id = $(this).attr("id");
                $.ajax({
                    url:'cart.php',
                    method:'GET',
                    data:{
                    id:id,
                },
                success:function(data){
                    swal({
                    title: "Sản phẩm đã được thêm vào giỏ hàng?",
                    text: "xem tiếp hay đến trang giỏ hàng!!!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-primary",
                    confirmButtonText: "giỏ hàng",
                    cancelButtonText: "xem tiếp",
                    closeOnConfirm: false,
                    closeOnCancel: false
                    },
                    function(isConfirm) {
                    if (isConfirm) {
                        window.location.href = "shopping-cart.php";
                    } else {
                        location.reload();
                    }
                    });
                 
                    
                }

                });
             
                 
            });

            $('.view_data').click(function(){
                var id = $(this).attr("id");
              $.ajax({
                url:'modal_view.php',
                method:'post',
                data:{
                    id:id,
                },
                success:function(data){
                    $('#product_detail').html(data); 
                    $('#dataModal').modal("show");  
                }
              })
            });
        });
    </script>