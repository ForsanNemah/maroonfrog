<?php
/**
 * The template for displaying the header
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head ajax-url="<?php echo admin_url('admin-ajax.php'); ?>">
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

<?php
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  wp_head();
?>
</head>

<body itemscope="">
  <div class="theme-layout">
    <header class="fancy-header header2" style="position: sticky; top: 0; z-index: 9999; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
      <div class="top-sec">
        <div class="top-bar">
          <div class="container">
            <span class="cargo-time">
              <i class="fa fa-user" style="color:#FFF; margin:0 5px;"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a> 
              <i class="fa fa-envelope-o" style="color:#FFF; margin:0 5px;"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Customer Feedback</a>  
              <i class="fa fa-download" style="color:#FFF; margin:0 5px;"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>download-center">Download Center</a>
            </span>
            <div class="connect-us">
              <ul class="social-btn">
                <li><a itemprop="url" href="https://www.facebook.com/alkafaa/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a itemprop="url" href="https://www.linkedin.com/in/al-kafaa-limited-company-20b596107/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="extra-links">
              <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a> / 
              <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a> / 
              <a style="font-family: Raleway;" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>ar">عربي</a>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-menu-sec">
        <div class="container">
          <div class="logo-menu">
            <div class="logo">
              <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa.png" alt="" /></a>
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
                  <span><a style="color:#555555;" href="mailto:info@alkafaa.com">info@alkafaa.com</a></span>
                  <p>Have Any Inquiries?</p>
                </li>
                <li>
                  <a href="#" class="theme-btn popup2" title="REQUEST A QUOTE">REQUEST A QUOTE</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <?php wp_nav_menu( array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'menu-curve') ); ?>
      </div>
    </header>

    <!-- Responsive Header -->
    <div class="responsive-header">
      <!-- (كود الهيدر الجوال يبقى مثل ما هو بدون تغيير) -->
    </div>

    <!-- Popup Request Form -->
    <div id="calculate-form-popup">
      <div class="calculate-form-popup">
        <div class="modal-dialog2">
          <div class="modal-content2">
            <div class="modal-body2">
              <button type="submit"><img src="<?php bloginfo('template_url');?>/images/close1.png" alt="" /></button>
              <div class="cargo-shipment">
                <div class="calculate-shipping">
                  <div class="dark-title">
                    <h3>REQUEST A QUOTE</h3>
                  </div>
                  <div class="calculate-shipping-form">
                    <?php echo do_shortcode('[contact-form-7 id="235" title="Request a Quote"]'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.theme-layout -->
</body>
</html>
