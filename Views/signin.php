<?php
include ("./header.php");
?>
   <body>
      <!-- header section start -->
<?php
include ("./headerSectionNav.php");
session_start();
?>    
      <!-- header section end --> 
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Login to your account</h1>
            <center><a href="signup.php">No account? Click here to create one</a></center>
         </div>
         <div class="contact_section_2 layout_padding">
            <div class="container">
               <div class="mail_section">

                <form action="../controllers/loginHandler.php" method="POST">
                  <input type="text" class="input_text" placeholder="Your email, Eg,example@email.com" name="email">
                  <input type="password" class="input_text" placeholder="Password" name="password">
                  <div class="send_bt">
                     <div class="send_text"><button class="submitButton" type="submit">SEND</button></div>
                  </div>
                </form>

               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/map-icon.png" class="image_main"><span class="padding_left_10">No.123 Chalingt Gates, Supper market New York</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/call-icon.png" class="image_main"><span class="padding_left_10">(+71 7986543234)</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/mail-icon.png" class="image_main"><span class="padding_left_10">demo@gmail.com</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="./admin.php"> Admin Login here</p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>