      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
         </div>
         <div class="footer_section_2">
            <div class="container">
               <h2 class="addres_text">Addres</h2>
               <div class="row map_addres">
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="{{ asset('frontend/images/map-icon.png') }}"><span class="map_icon">No.123 Chalingt Gates, Supper market New York</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="{{ asset('Frontend/images/phone-icon.png') }}"><span class="map_icon">( +71 7986543234 )</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="{{ asset('Frontend/images/email-icon.png') }}"><span class="map_icon">demo@gmail.com</span></div>
                  </div>
               </div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="{{ asset('frontend/images/fb-icon.png') }}"></a></li>
                     <li><a href="#"><img src="{{ asset('Frontend/images/twitter-icon.png') }}"></a></li>
                     <li><a href="#"><img src="{{ asset('Frontend/images/in-icon.png') }}"></a></li>
                     <li><a href="#"><img src="{{ asset('Frontend/images/instagram-icon.png') }}"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('Frontend/js/jquery.min.js') }}"></script>
      <script src="{{ asset('Frontend/js/popper.min.js') }}"></script>
      <script src="{{ asset('Frontend/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('Frontend/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('Frontend/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('Frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('Frontend/js/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ asset('Frontend/js/owl.carousel.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>