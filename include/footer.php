<footer class="pt-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-12 text-lg-left">
                  <div class="foterlogo">
                     <img src="images/footer-logo-img.png" class="img-fluid" > 
                  </div> 
               </div>
			   <div class="col-lg-2 col-sm-6 col-12 mb-5">
                        <h3 class="footer-title pt-3"> Links</h3>
                        <ul class="footer-link list-unstyled mt-3">
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about-us.php">Company</a></li> 
                           <li><a href="Knowledge_Center.php">Knowledge Center</a></li> 
                           <li><a href="career.php">Careers</a></li> 
                           <li><a href="about-us.php#contact">Contact </a></li> 
                        </ul> 
                     </div>
					    <div class="col-lg-4 col-sm-6 col-12 mb-5 address">
                        <h3 class="footer-title pt-3 mb-3">Bangalore</h3>
                         <p>649, 13th Cross, 27th Main Rd, 1st Sector, HSR Layout, Bengaluru, Karnataka 560102</p>
						 
						<h3 class="footer-title pt-3 mb-3">Santa Clara,CA</h3>
                         <p>San Tomas Business Centre, 2060 Walsh Ave, #Suite 242, Santa Clara, CA 95050</p>
                     </div>
                     <div class="col-lg-4 col-12 mb-5">
                        <div class="footer_bottom_border d-lg-none d-block"></div>
                        <h3 class="footer-title pt-3">Google Map</h3> 
                       					<!--     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8949595333183!2d77.67518631413469!3d12.914472219625171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae131116ed9e2d%3A0xa944246ffc2fc280!2sIndiQube%20Zeta!5e0!3m2!1sen!2sin!4v1643294794408!5m2!1sen!2sin" width="100%" height="250" style="border:0; border-radius:8px; margin-top:13px" allowfullscreen="" loading="lazy"></iframe>-->
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.870324952001!2d77.6500166147397!3d12.91605499089229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1482f4cae0f7%3A0xc3864f57228b89d8!2s649%2C%2013th%20Cross%20Rd%2C%20Sector%202%2C%20PWD%20Quarters%2C%201st%20Sector%2C%20HSR%20Layout%2C%20Bengaluru%2C%20Karnataka%20560102!5e0!3m2!1sen!2sin!4v1648876994047!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
					      <ul class="socials col spacer">
                          <!-- <li class="social" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
                              <a href="#." aria-label="facebook" target="_blank" title="Facebook" rel="noopener" class="btn-link -white social-link">  <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp;
                              Facebook</a>
                           </li>-->
                           <li class="social">
                              <a href="https://twitter.com/p2fsemi" aria-label="Twitter" target="_blank" title="Twitter" rel="noopener" class="btn-link -white social-link">  <i class="fa fa-twitter" aria-hidden="true"></i> 
                              Twitter</a>
                           </li>
                           <li class="social">
                              <a href="https://www.linkedin.com/company/p2fsemi/" aria-label="linkedin" target="_blank" title="LinkedIn" rel="noopener" style="border:none" class="btn-link -white social-link"> <i class="fa fa-linkedin" aria-hidden="true"></i> 
                              LinkedIn</a>
                           </li>
                        </ul>
                       </div>
                 
            </div>
         </div>
         <div class="bottom-footer">
            <div class="container">
               <div class="row  pt-4">
                  <div class="col-lg-6 col-md-6 ">
                     <p class="mb-0">Copyright © 2023 P2F SEMI. All Rights Reserved.</p>
                     <p>:::| powered
                        by  <a href="https://www.dimakhconsultants.com/" target="_blank" title="Website design development, Search Engine Optimization, Internet marketing, Web hosting, company in pune India">dimakh consultants</a> |:::
                     </p>
                  </div>
                  <div class="col-lg-6 col-md-6 text-right d-none d-md-block">
                     <p>[Best viewed in IE 10+, Firefox, Chrome , Safari, Opera.]</p>
                  </div>
               </div>
            </div>
         </div>
      </footer> 
<!-----------------footer------------------------------>

<!------------------Script js-------------------------->


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

  <script src="js/nav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/slider.js"></script>
  <!-----------------------------------Script end------------------------------------------------------->



  <!-- ----------------case stuies script-Start-------------------------->
<script>
        
  // Fixed header on scroll 
  $(window).scroll(function() {
    windowWidth = $(window).width();
  
    if (windowWidth > 300) {
        var scroll = $(window).scrollTop();
  
        if (scroll >= 150) {
            $("header").addClass("header-fixed animateHeader");
        } else {
            $("header").removeClass("header-fixed animateHeader");
        }
    }
  });


</script>


  <script>
   var owl = $('#partnerCarousel.owl-carousel');
			owl.owlCarousel({ 
			loop:true, 
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 4
        }
    } 
    })
	
	
  </script>
  <script>
  jQuery('#banner-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false, 
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 1
      }
    }
});

  </script> 
