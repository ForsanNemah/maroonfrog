<?php
/**
 * The template for displaying the footer

 */
?>

	<?php $cur_file = basename($_SERVER[PHP_SELF]); if( $cur_file != 'index.php') { ?>
         <!--- SOCIAL FLYOUT -->
        	<nav class="social">
              <ul>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home <i class="fa fa-home" style="padding:7px 9px;"></i></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pipe-calculator">Pipe Calculator <i class="fa fa-building-o" style="padding:8px 9px;"></i></a></li>
                  <li><a href="<?php bloginfo('template_url');?>/images/maroonfrog/ALKAFAA-Catalogue-24-May-2016.pdf">Company Brochure <i class="fa fa-users" style="padding:8px;"></i></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us#locations">Location Map <i class="fa fa-map-marker" style="padding:8px 12px;"></i></a></li>
                  
              </ul>
     		</nav>

        <!-- END SOCIAL FLYOUT -->
        <?php } ?>
         
        
  <footer>
            <section class="block" style="padding: 40px 0;">
                <div class="parallax dark" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url(<?php bloginfo('template_url');?>/images/maroonfrog/footer-bg.jpg) no-repeat 50% 0;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 column">
                                    <div class="widget">
                                    	 	<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				 
												<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					 
										    <?php endif; ?>
                                        
                                    </div>
                                </div>
                                <div class="col-md-5 column">
                                    <Div class="row">
                                        <div class="col-md-6 column">
                                            <div class="widget">
                                                <div class="heading2">
                                                    <span>LINKS AND MORE</span>
                                                    <h3>USEFUL LINKS</h3>
                                                </div>
                                                <div class="links-widget">
                                                	<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				 
														<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					 
													<?php endif; ?>

                                                </div>
                                            </div><!-- Widget -->
                                        </div>
                                        <div class="col-md-6 column">
                                            <div class="widget">
                                                <div class="heading2">
                                                    <span>BEST AND ELITE SERVICES</span>
                                                    <h3>RANGE OF PRODUCTS</h3>
                                                </div>
                                                <div class="links-widget">
                                                  <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				 
														<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					 
													<?php endif; ?>
                                                </div>


                                            </div><!-- Widget -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 column">
                                    <div class="widget blue1">
                                        <div class="heading2">
                                            <span>GENERAL ENQUIRY FORM</span>
                                           
                                        </div>
                                         <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
				 
											<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
					 
										<?php endif; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 column">
                            <span>&copy; 2017 <a itemprop="url" title="" href="#">ALKAFAA</a> - All Rights Reserved</span>
                        </div>
                        <div class="col-md-6 column">
                        	 <?php wp_nav_menu( array('theme_location' => 'footer-bottom-menu' )); ?>                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank"></div>
        </footer>		

    </div>

    <!-- Region Popup -->
    <div class="modal fade region" id="region" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php bloginfo('template_url');?>/images/close.png" alt="" itemprop="image" /></span></button>
                    <div class="region-detail">
                        <div class="row">
                            <div class="col-md-6 column">
                                <div class="region-contact-info">
                                    <div class="heading2">
                                        <span>Fast And Safe</span>
                                        <h3>Office Address</h3>
                                    </div>
                                    <p>Transport logitec, ltd. 2258 millenioum Street Columbia, DK 85966</p>
                                    <div class="contact-detail">
                                        <span class="contact">
                                            <i class="fa fa-mobile"></i>
                                            <strong>Phone No</strong>
                                            <span>+858 5549 512</span>
                                            <span>+858 5549 512</span>
                                        </span>
                                        <span class="contact">
                                            <i class="fa fa-email"></i>
                                            <strong>Email Address</strong>
                                            <span>info@transport@gmail.com</span>
                                        </span>
                                        <span class="contact">
                                            <i class="fa fa-time"></i>
                                            <strong>Office Timing</strong>
                                            <span>10:00am - 06:00pm / Sunday: Close</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="loc-thumb">
                                    <img src="http://placehold.it/340x221" alt="" itemprop="image" />
                                    <p>Lorem Ipsum dolor sit amet, consectetuer adipiscing elit. Aennean commodo enean dolor sit amet, consectetuer.</p>
                                    <a class="theme-btn" href="#" title="" itemprop="url">CONTACT US NOW</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Region Detail -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="submission-message" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="submission-data">
                        <span><img src="<?php bloginfo('template_url');?>/images/resource/submission.png" alt="" /></span>
                        <h1>SUBMISSION SUCCESSFUL</h1>
                        <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                        <a href="#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                    </div><!-- Submission-data -->
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>

<!-- Script -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/modernizr-2.0.6.js"></script><!-- Modernizr -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-2.2.2.js"></script><!-- jQuery -->

<script src="<?php bloginfo('template_url');?>/js/custom-js.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.scrolly.js"></script><!-- Scrolly -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/icheck.js"></script><!-- iCheck -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/select2.full.js"></script><!-- Select2 -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->

<!-- External libraries: jQuery & GreenSock -->
<script src="<?php bloginfo('template_url');?>/layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="<?php bloginfo('template_url');?>/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/script.js"></script>

<script>

		
    $(document).ready(function () {
        "use strict";	

        //** Slider  **//
        $("#layerslider").layerSlider({
            responsive: true,
            responsiveUnder: 1170,
            layersContainer: 1170,
            skin: 'v5',
            hoverPrevNext: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            skinsPath: 'layerslider/skins/'
        });

        //** Reviews **//
        $("#customers-review-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 1,
            singleItem: true,
            responsiveClass: true,
            responsive: {
                0: {
                    nav: false

                },
                900: {
                    nav: true
                }
            }
        });
				var owl = $("#modern-services-carousel");
        $("#modern-services-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 2000,
  					autoplayHoverPause:false,
            loop: true,
            dots: false,
            nav: true,
            margin: 30,
            items: 3,
            responsiveClass: true,
            responsive: {
                1200: {items: 3},
                980: {items: 2},
                480: {items: 2},
                0: {items: 1}
            }
        });
  /* Mahmood, To fix mouse hover autoplay stop. */
   $('#modern-services-carousel').on('mouseenter',function(){
      owl.trigger('stop.owl.autoplay');
  		//Another autoplay function will occur after 1.8 seconds, to overcome the
  		//Owl carousel autoplay bug. Change this if you change the carousel
  		//timeout time.
  		setTimeout(function() { owl.trigger('stop.owl.autoplay'); }, 1800);
  		console.log('Mouse Enter!');
  })
  $('#modern-services-carousel').on('mouseleave',function(){ 
  		owl.trigger('play.owl.autoplay',[2000],[2000]);
  		console.log('Mouse Left! :(');
  });
		/*----------------------------*/
		//** News Carousel **//	
        $("#cities-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 2000,
            loop: true,
            dots: false,
            nav: true,
            margin: 30,
            items: 1,
            singleItem: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

        // Accordion //
        $('#toggle .content').hide();
        $('#toggle h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
        $('#toggle h3').on("click", function () {
            if ($(this).next().is(':hidden')) {
                $('.toggle h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                return false;
            }
        });
    });
</script>
 <script>
        $(document).ready(function(){
            'use strict';
            // Accordion //
            $('#toggle5 .content').hide();
            $('#toggle5 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle5 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle5 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });
        });
    </script>
    <script type="text/javascript">
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1500);
				return false;
			  }
			}
		  });
		});
		</script>
</body>
</html>
