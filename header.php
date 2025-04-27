<?php
/**
 * The template for displaying the header
 *
*/?><!DOCTYPE html>
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
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<style>
/* Sticky Navigation Styles */
.sticky-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    background: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    animation: slideDown 0.35s ease-out;
    width: 100% !important;
}

@keyframes slideDown {
    from {transform: translateY(-100%);}
    to {transform: translateY(0);}
}

body.sticky-nav-active {
    padding-top: 120px; /* Adjust this value to match your header height */
}

/* Responsive adjustments */
@media (max-width: 991px) {
    body.sticky-nav-active {
        padding-top: 80px;
    }
}
</style>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
	<?php wp_head(); ?>

</head>
<body itemscope="" <?php body_class(); ?>>
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
                            </ul>
                        </div>
                        <div class="extra-links">
                            <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us" title="Contact Us">Contact Us</a>   /   <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>careers" title="Careers">Careers</a> /  <a style="font-family: Raleway;" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>ar" title="عربي">عربي</a>
                        </div>
                    </div>
                </div>
            </div><!-- Top Sec -->
            
            <div class="logo-menu-sec" id="main-header">
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
            </div><!-- Logo Menu Sec -->
            
            <nav class="menu-curve sticky-nav">
                <?php wp_nav_menu( array('theme_location' => 'header-menu', 'container' => 'div', 'container_class' => 'main-navigation' )); ?>
            </nav>
        </header>

        <!-- Rest of your existing code (responsive header, popup form, etc.) remains the same -->
        <div class="responsive-header">
            <!-- ... existing responsive header code ... -->
        </div>

        <div id="calculate-form-popup">
            <!-- ... existing popup form code ... -->
        </div>

<script>
jQuery(document).ready(function($) {
    // Sticky Navigation
    var header = $('.fancy-header.header2');
    var nav = $('.sticky-nav');
    var headerHeight = $('#main-header').outerHeight();
    var scrollThreshold = headerHeight;
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > scrollThreshold) {
            header.addClass('sticky-header');
            $('body').addClass('sticky-nav-active');
        } else {
            header.removeClass('sticky-header');
            $('body').removeClass('sticky-nav-active');
        }
    });
    
    // Smooth scrolling for anchor links
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && 
            location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        }
    });
});
</script>