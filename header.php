<?php
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
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
	?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<style>
/* --- Sticky Header Style --- */
.fancy-header {
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 9999;
    background: #fff;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

/* Optional: shrink effect */
body.scrolled .fancy-header {
    padding: 10px 0;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
</style>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<body <?php body_class(); ?> itemscope="">

<script>
// Add a class to body when scrolling
window.addEventListener('scroll', function() {
  if (window.scrollY > 50) {
    document.body.classList.add('scrolled');
  } else {
    document.body.classList.remove('scrolled');
  }
});
</script>

<div class="theme-layout">
    <header class="fancy-header header2">
        <!-- هنا يبدأ الهيدر العلوي + السوشيال ميديا + روابط سريعة -->
        <div class="top-sec">
            <div class="top-bar">
                <div class="container">
                    <span class="cargo-time">
                        <i class="fa fa-user" style="color:#FFF; margin:0 5px;"></i>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a>
                        <i class="fa fa-envelope-o" style="color:#FFF; margin:0 5px;"></i>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Customer Feedback</a>
                        <i class="fa fa-download" style="color:#FFF; margin:0 5px;"></i>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>download-center">Download Center</a>
                    </span>
                    <div class="connect-us">
                        <ul class="social-btn">
                            <li><a href="https://www.facebook.com/alkafaa/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/al-kafaa-limited-company-20b596107/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="extra-links">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a> /
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a> /
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>ar" style="font-family: Raleway;">عربي</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- شعار الموقع + أرقام التواصل -->
        <div class="logo-menu-sec">
            <div class="container">
                <div class="logo-menu">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa.png" alt="Alkafaa Logo" />
                        </a>
                    </div>
                    <div class="quick-contact">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/ws.png" width="40" alt="" />
                                <span><a href="https://wa.me/+966539465340">Chat us on WhatsApp</a></span>
                                <p>Have Any Inquiries?</p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/phone-dark.png" alt="" />
                                <span><a href="https://alkafaa.com/contact-us/#contact-dateil">Call us</a></span>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/images/resource/sms-dark.png" alt="" />
                                <span><a href="mailto: info@alkafaa.com">info@alkafaa.com</a></span>
                                <p>Have Any Inquiries?</p>
                            </li>
                            <li>
                                <a href="#" class="theme-btn popup2">REQUEST A QUOTE</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- قائمة التنقل الرئيسية -->
                <?php wp_nav_menu( array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'menu-curve' )); ?>
            </div>
        </div>
    </header>

    <!-- هنا يبدأ الهيدر المتجاوب (Responsive Header) -->
    <!-- تقدر تحتفظ بالكود الحالي حق الـ responsive زي ما هو -->
    
    <!-- الكود يكمل هنا مثل ما عندك -->
