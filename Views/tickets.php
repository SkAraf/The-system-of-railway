<?php
include ("./header.php");
?>
   <body>
      <!-- header section start -->
<?php
include ("./headerSectionLoggedInNav.php");
include ("../controllers/passangerAuth.php");
?>    
      <!-- header section end --> 
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Fill up the form to book your ticket</h1>
            <center><p>For any problem, please fill up a <a href="customerComplain.php">complain report</a> or call us at 01311111111</p></center>
         </div>
         <div class="contact_section_2 layout_padding">
            <div class="container">
               <div class="mail_section">
                <form method="POST" action="../controllers/ticketHandler.php">
                  <div class="row">
                     <div class="col-md-6">
                     <select class=""  name="source">
                        <option selected>Pickup</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Sylhet">Sylhet</option>
                    </select>
                     </div>
                     <div class="col-md-6">
                     <select class=""  name="destination">
                        <option selected>Destination</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Sylhet">Sylhet</option>
                    </select>
                     </div>
                  </div>
<br/><br/>
                  <div class="row">
                     <div class="col-md-6">
                     <select class=""  name="no_passanger">
                        <option selected value="0">No of Tickets</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                     </div>
                     <div class="col-md-6">
                     <input type="Date" name="date" id="date" placeholder="Date">
                     </div>
                  </div>
                  <br/><br/>
                  <div class="send_text"><button class="submitButton" type="submit">Book Now</button></div>
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
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
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