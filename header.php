﻿<?php
/**
 * The template for displaying the header
 *
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head ajax-url="<?php echo admin_url('admin-ajax.php'); ?>" >
  <link rel="icon" type="image/png" href="https://alkafaa.com/wp-content/uploads/2017/02/fav.png">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
	<?php wp_head(); ?>


</head>
<body itemscope="">
    <div class="theme-layout">
        <header class="fancy-header header2">
            <div class="top-sec">
                <div class="top-bar">
                    <div class="container">
                         <span class="cargo-time"><i class="fa fa-user" style="color:#FFF; margin:0 5px;"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a> 
                        						 <i class="fa fa-envelope-o" style="color:#FFF; margin:0 5px;"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Customer Feedback</a>  
                                                 <i class="fa fa-download" style="color:#FFF; margin:0 5px;"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>download-center">Download Center</a></span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="https://www.facebook.com/alkafaa/" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="https://www.linkedin.com/in/al-kafaa-limited-company-20b596107/" title="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                               
                                <!--<li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-reddit"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-rss"></i></a></li>-->
                            </ul>
                        </div>
                        <div class="extra-links">
                            <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us" title="Contact Us">Contact Us</a>   /   <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>careers" title="Careers">Careers</a> /  <a style="font-family: Raleway;" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>ar" title="عربي">عربي</a>
                        </div>
                    </div>
                </div>
            </div><!-- Top Sec -->
            <div class="logo-menu-sec">
            <div class="container">
                <div class="logo-menu">
                    <div class="logo">
                        <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" title=""><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa.png" alt="" /></a>
                    </div>
                    <div class="quick-contact">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/ws.png" alt="" width=40/>
                                <span><a style="color:#555555;" href="https://wa.me/+966539465340">Chat us on WhatsApp</a></span>
                                <p>Have Any Inquiries?</p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/phone-dark.png" alt="" />
                                <span><a style="color:#555555;" href="https://alkafaa.com/contact-us/#contact-dateil">Call us</a></span>
                              <!-- code for move to another page and go to concontact part -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                              <script>
$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
</script>
																<!-- end the code -->
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/sms-dark.png" alt="" />
                                <span><a style="color:#555555;" href="mailto: info@alkafaa.com">info@alkafaa.com</a></span>
                                <p>Have Any Inquiries?</p>
                            </li>
                            <li>
                                <a href="#" title="" itemprop="url" class="theme-btn popup2" title="REQUEST A QUOTE">REQUEST A QUOTE</a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
                   <?php wp_nav_menu( array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'menu-curve' )); ?>
            </div><!-- Logo Menu Sec -->
        </header>

        <div class="responsive-header">
            <span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>
            <div class="responsive-top-sec">
                <div class="responsive-top-bar top-bar">
                    <div class="container">
                        <span class="cargo-time"><a href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a> | <a href="#">Customer Feedback</a> </span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="https://www.facebook.com/alkafaa/" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Top Bar -->
                <div class="responsive-quick-contact">
                    <div class="container">
                        <div class="quick-contact">
                            <ul>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/ws.png" alt="" width=40/>
                                <span><a style="color:#555555;" href="https://wa.me/+966539465340">Chat us on WhatsApp</a></span>
                                <p>Have Any Inquiries?</p>
                            </li>
                                <li>
                                    <img src="<?php bloginfo('template_url');?>/images/resource/phone.png" alt="" />
                                    <span>+966 138260994</span>
                                    <p>Main Phone No.</p>
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url');?>/images/resource/sms.png" alt="" />
                                    <span>info@alkafaa.com</span>
                                    <p>Have Any Question?</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Quick Contact -->
            </div>
            <div class="responsive-nav">
                <div class="container">
                    <div class="responsive-logo">
                        <div class="logo">
                            <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" title=""><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa.png" alt="" /></a>
                        </div>
                    </div>
                    <span class="responsive-btn"><i class="fa fa-list"></i></span>
                    <div class="responsive-menu">
                        <span class="close-btn"><i class="fa fa-close"></i></span>
                        <ul class="responsive-popup-btns">
                            <li><i class="fa fa-user"></i><a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>careers" title="Careers">Careers</a></li>
                            <li><i class="fa fa-paper-plane"></i><a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us" title="Contact Us">Contact Us</a></li>
                        </ul>
                          <?php wp_nav_menu( array('theme_location' => 'header-menu', 'container_class' => 'responsive-menu' )); ?>
                    </div><!-- Responsive Menu -->
                </div>
            </div>
        </div><!--Responsive header-->
         
        

        <div id="calculate-form-popup">
            <div class="calculate-form-popup">

                <div class="modal-dialog2">
                    <div class="modal-content2">
                        <div class="modal-body2">
                            <button type="submit"><img src="<?php bloginfo('template_url');?>/images/close1.png" alt="" /></button>
                            <div class="cargo-shipment">
                                <div class="calculate-shipping">
                                    <div class="dark-title">
                                       <!-- <span><i class="fa fa-steam"></i>Please Fill All Inquiry To Get Your Total Price.</span>-->
                                        <h3>REQUEST A QUOTE</h3>
                                    </div>

                                    <div class="calculate-shipping-form">
                                        <?php echo do_shortcode('[contact-form-7 id="235" title="Request a Quote"]');?>
                                    </div>
                                </div><!-- Calculate Shipping -->
                            </div><!-- Cargo Shipment -->
                        </div>
                    </div>
                </div>
            </div>
        </div>