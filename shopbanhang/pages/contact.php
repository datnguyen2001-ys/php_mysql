<?php
 session_start()
    
?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once '../pages/inc/lib.php';   ?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php require_once '../pages/inc/header.php';   ?>
   
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14899.584618781577!2d105.8407837!3d20.9967994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac72914e2e8d%3A0x11a547b7de3ce221!2zQ2jhu6MgTcah!5e0!3m2!1svi!2s!4v1655953894311!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <?php 
                $conn = mysqli_connect('localhost','root','','shop');
                                
                $sql_tmp = "select * from tbl_contact";
                $result1a = mysqli_query($conn,$sql_tmp);
                if ($result1a -> num_rows > 0) {
                    while ($row = mysqli_fetch_array($result1a)) {
                        ?>
                    <div class="col-lg-5">
                    <div class="contact-title">
                        <h4><?= $row['contact_title'] ?></h4>
                        <p><?= $row['contact_desc']?></p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>?????a ch???:</span>
                                <p><?= $row['contact_address']?></p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>s??? ??i???n tho???i:</span>
                                <p><?= $row['contact_phone']?></p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p><?= $row['contact_email']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                }
                ?>
               
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>????? l???i b??nh lu???n</h4>
                            <p>Nh??n vi??n c???a ch??ng t??i s??? g???i l???i sau v?? gi???i ????p c??c th???c m???c c???a b???n.</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message"></textarea>
                                        <button type="submit" class="site-btn">G???i</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require_once "../pages/inc/footer.php";   ?>
      
      <?php require_once "../pages/inc/lib_js.php";   ?>
      
</body>

</html>