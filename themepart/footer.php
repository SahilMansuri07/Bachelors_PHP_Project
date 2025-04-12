<?php

$connection = mysqli_connect("localhost","root","","themeforest");
?>
<footer class="footer">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="home.php"><img src="img/logo2.jpg" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        
                        <h6>Categories</h6>
                        <ul>
                        <?php
$cq = mysqli_query ($connection , "select * from tbl_category limit 5");
while($cdata = mysqli_fetch_array($cq)){

    echo "<li><a href='shop.php?categoryid={$cdata['category_id']}'> {$cdata['category_name']} </li>";

}
?>
                            
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Details</h6>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li ><a href="shop.php">Shop</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="home.php">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals,  sales & promos!</p>
                            <!-- <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> -->
                            
                        <!-- </p> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>