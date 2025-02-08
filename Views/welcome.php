<?php
session_start();
include ("./header.php");
?>
   <body>
      <!-- header section start -->
<?php
include ("./headerSectionLoggedInNav.php");
?>    
      <!-- header section end --> 
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Welcome to our railway ticketing service  <?php echo $_SESSION["name"]?></h1>
            <h4> How may we help you today? </h4>
            
         </div>
         <div class="contact_section_2 layout_padding">


                <center>
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Tickets
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Get Tickets Now</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="./tickets.php" class="btn btn-primary">Click here to get Tickets</a>
                            </div>
                        </div>


                        </div>
                        <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Routes
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Get Route Information</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Click here to Check the Routes</a>
                            </div>
                        </div>


                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    Booked Tickets
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Check your booked tickets</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="bookedTickets.php" class="btn btn-primary">Complain Here</a>
                                </div>
                                </div>

                            </div>
                    </div>
                    <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    Complaints
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Not Satisfied with Service?</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Complain Here</a>
                                </div>
                                </div>

                            </div>
                    </div>
                </div>

                </center>


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