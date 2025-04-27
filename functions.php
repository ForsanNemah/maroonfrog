<?php

/**



 * Custom Functions 



 **/
 
 require_once 'posttypes/our-products.php';
  require_once 'posttypes/careers.php';
 require_once 'posttypes/partners.php';
 
////////Register CSS and JS///////// 
 
 function all_script_styles_reg () {
	
		 
		wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
		wp_register_style( 'carousel-style', get_template_directory_uri() . '/css/owl.carousel.css' );
		wp_register_style( 'icons-style', get_template_directory_uri() . '/css/icons.css' );
		wp_register_style( 'select2-style', get_template_directory_uri() . '/css/select2.min.css' );
		wp_register_style( 'scrollbar-style', get_template_directory_uri() . '/css/perfect-scrollbar.css' );
		wp_register_style( 'main-style', get_template_directory_uri() . '/css/style.css' );
		wp_register_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css' );
		wp_register_style( 'color-style', get_template_directory_uri() . '/css/colors/color.css' );
		wp_register_style( 'layerslider-style', get_template_directory_uri() . '/layerslider/css/layerslider.css' );
		wp_register_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
		
			
		//wp_register_style( 'editor-style', get_template_directory_uri() . '/css/editor-style.css' );	
		//wp_register_style( 'circliful-style', get_template_directory_uri() . '/css/jquery.circliful.css' );
		//wp_register_style( 'datepick-style', get_template_directory_uri() . '/css/jquery.datepick.css' );
		//wp_register_style( 'lightbox-style', get_template_directory_uri() . '/css/lightbox.min.css' );	
		//wp_register_style( 'rtl-style', get_template_directory_uri() . '/css/rtl.css' );		
			
		wp_register_script( 'modernizr_script', get_template_directory_uri() . '/js/modernizr-2.0.6.js', array(), '', true );
		wp_register_script( 'jquery_script', get_template_directory_uri() . '/js/jquery-2.2.2.js', array(), '', true );
		wp_register_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
		wp_register_script( 'scrolltopcontrol_script', get_template_directory_uri() . '/js/scrolltopcontrol.js', array(), '', true );
		wp_register_script( 'jquery_script', get_template_directory_uri() . '/js/jquery.scrolly.js', array(), '', true );
		wp_register_script( 'carousel_script', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );		
		wp_register_script( 'icheck_script', get_template_directory_uri() . '/js/icheck.js', array(), '', true );		
		wp_register_script( 'select2_script', get_template_directory_uri() . '/js/select2.full.js', array(), '', true );
		wp_register_script( 'perfect_script', get_template_directory_uri() . '/js/perfect-scrollbar.js', array(), '', true );
		wp_register_script( 'perfect_scrollbar_script', get_template_directory_uri() . '/js/perfect-scrollbar.jquery.js', array(), '', true );
		if ( is_front_page() )		 
		 {
			wp_register_script( 'greensock_script', get_template_directory_uri() . '/layerslider/js/greensock.js', array(), '', true );
			wp_register_script( 'transitions_script', get_template_directory_uri() . '/layerslider/js/layerslider.transitions.js', array(), '', true );
			wp_register_script( 'kreaturamedia_script', get_template_directory_uri() . '/layerslider/js/layerslider.kreaturamedia.jquery.js', array(), '', true );			 
		 }
		wp_register_script( 'script_script', get_template_directory_uri() . '/js/script.js', array(), '', true );
		
		
	//	wp_register_script( 'circliful_script', get_template_directory_uri() . '/js/jquery.circliful.min.js', array(), '', true );
	//	wp_register_script( 'datepick_script', get_template_directory_uri() . '/js/jquery.datepick.js', array(), '', true );
	//	wp_register_script( 'isotope_script', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '', true );
	//	wp_register_script( 'jigowatt_script', get_template_directory_uri() . '/js/jquery.jigowatt.js', array(), '', true );
	//	wp_register_script( 'plugin_script', get_template_directory_uri() . '/js/jquery.plugin.js', array(), '', true );	
	//	wp_register_script( 'lightbox_script', get_template_directory_uri() . '/js/lightbox.min.js', array(), '', true );		
	//	wp_register_script( 'scroll_script', get_template_directory_uri() . '/js/scroll-up-bar.js', array(), '', true );	
		 
		wp_enqueue_style( 'bootstrap-style' );
		wp_enqueue_style( 'carousel-style' );		
		wp_enqueue_style( 'icons-style' );
		wp_enqueue_style( 'select2-style' );	
		wp_enqueue_style( 'scrollbar-style' );
		wp_enqueue_style( 'main-style' );	
		wp_enqueue_style( 'responsive-style' );	
		wp_enqueue_style( 'color-style' );	
		wp_enqueue_style( 'layerslider-style' );	
		wp_enqueue_style( 'font-awesome-style' );
		
		wp_enqueue_style( 'editor-style' );				
		wp_enqueue_style( 'circliful-style' );	
		wp_enqueue_style( 'datepick-style' );	
		wp_enqueue_style( 'lightbox-style' );	
		wp_enqueue_style( 'rtl-style' );			
				 
		//wp_enqueue_script( 'jquery' );
		/*wp_enqueue_script( 'modernizr_script' );
		wp_enqueue_script( 'jquery_script' );
		wp_enqueue_script( 'bootstrap_script' );
		wp_enqueue_script( 'scrolltopcontrol_script' );
		wp_enqueue_script( 'jquery_script' );
		wp_enqueue_script( 'carousel_script' );
		wp_enqueue_script( 'icheck_script' );
		wp_enqueue_script( 'select2_script' );	
		wp_enqueue_script( 'perfect_scrollbar_script' );
		wp_enqueue_script( 'scroll_script' );			
		wp_enqueue_script( 'greensock_script' );
		wp_enqueue_script( 'transitions_script' );
		wp_enqueue_script( 'kreaturamedia_script' );		
		wp_enqueue_script( 'script_script' );
		
		wp_enqueue_script( 'circliful_script' );
		wp_enqueue_script( 'datepick_script' );
		wp_enqueue_script( 'isotope_script' );
		wp_enqueue_script( 'jigowatt_script' );
		wp_enqueue_script( 'plugin_script' );	
		wp_enqueue_script( 'lightbox_script' );				
		wp_enqueue_script( 'perfect_script' );				
			*/		
	
}

	add_action( 'wp_enqueue_scripts', 'all_script_styles_reg' );

////////Register Menu/////////

 function register_my_menus() {

  register_nav_menus(

    array( 

      'header-menu' => __( 'Header Menu' ),
	  'top-menu' => __( 'Top Menu' ),
	  'footer-menu' => __( 'Footer Menu' ),
	  'footer-bottom-menu' => __( 'Footer Bottom Menu' )	 	 

    )

  );

}

add_action( 'init', 'register_my_menus' );


////////Add Featured Image/////////

	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );	

	if ( function_exists( 'add_image_size' ) ) { 	

	add_image_size( 'partners', 300, 100 );	
	
	add_image_size( 'product', 122, 88 );
	
    add_image_size( 'home-news', 626, 466, true );
	
	add_image_size( 'slider-news', 1540, 780, true );
  
	}
  
  
 //////////////# Limit Post///////////

function the_content_limit($max_char, $more_link_text = '', $stripteaser = 0, $more_file = '') {


    $content = get_the_content($more_link_text, $stripteaser, $more_file);


    $content = apply_filters('the_content', $content);


    $content = str_replace(']]>', ']]>', $content);


    $content = strip_tags($content);



}   

 //////////////Register Widget///////////
 
 function twentyten_widgets_init() {

	// Area 1, located at the top of the sidebar.

	register_sidebar( array(

		'name' => __( 'Primary Widget Area', 'ffwatch' ),

		'id' => 'primary-widget-area',

		'description' => __( 'Add widgets here to appear in your sidebar.', 'ffwatch' ),

		'before_widget' => '

		<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.

	register_sidebar( array(

		'name' => __( 'Secondary Widget Area', 'ffwatch' ),

		'id' => 'secondary-widget-area',

		'description' => __( 'An optional secondary widget area, displays below the primary widget area in your sidebar.', 'ffwatch' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 3, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'First Footer Widget Area', 'twentyten' ),

		'id' => 'first-footer-widget-area',

		'description' => __( 'An optional widget area for your site footer.', 'ffwatch' ),

		'before_widget' => '<div class="widget">',

		'after_widget' => '</div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );



	// Area 4, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Second Footer Widget Area', 'twentyten' ),

		'id' => 'second-footer-widget-area',

		'description' => __( 'An optional widget area for your site footer.', 'ffwatch' ),

		'before_widget' => '<div class="widget">',

		'after_widget' => '</div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );



	// Area 5, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Third Footer Widget Area', 'twentyten' ),

		'id' => 'third-footer-widget-area',

		'description' => __( 'An optional widget area for your site footer.', 'ffwatch' ),

		'before_widget' => '<div class="widget">',

		'after_widget' => '</div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );


	// Area 4, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Fourth Footer Widget Area', 'alkafaa' ),

		'id' => 'fourth-footer-widget-area',

		'description' => __( 'An optional widget area for your site footer.', 'alkafaa' ),

		'before_widget' => '<div class="widget">',

		'after_widget' => '</div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );
	

}

add_action( 'widgets_init', 'twentyten_widgets_init' );


//***Light Box for thumbnail**//

  function product_thumbnail_url($pid)

	{  

        $image_id = get_post_thumbnail_id($pid);    

        $image_url = wp_get_attachment_image_src($image_id,'screen-shot');    

        return  $image_url[0];    

    }

//*****Pipe Calc*****//


add_action( 'wp_ajax_get_diameter', 'get_diameter' );
add_action( 'wp_ajax_nopriv_get_diameter', 'get_diameter' );

function get_diameter(){
 $response = array();
 $response['status'] = "error";
  
  $thicknessName = (int)$_REQUEST['thickness'];
  $thicknessId = (int)$_REQUEST['thicknessId'];
  
  	global $wpdb;
	$results = $wpdb->get_results( 'SELECT * FROM alkf_thickness WHERE id ='.$thicknessId, OBJECT );
	$results1 = $wpdb->get_results( 'SELECT * FROM alkf_schedule WHERE thick_id ='.$thicknessId, OBJECT );

	if(!empty($results)){
		
	$response['status'] = "success";
	$response['data']['outerdiameter'] = $results[0]->outerdiameter;
	$response['data']['schedule'] = $results1;
	}

	wp_send_json($response);
	 

  exit;
}


add_action( 'wp_ajax_get_wallThickness', 'get_wallThickness' );
add_action( 'wp_ajax_nopriv_get_wallThickness', 'get_wallThickness' );

function get_wallThickness(){
 $response = array();
 $response['status'] = "error";
  
  $schedule = (int)$_REQUEST['schedule'];
  $scheduleId = (int)$_REQUEST['scheduleId'];
  
  	global $wpdb;
	$results = $wpdb->get_results( 'SELECT * FROM alkf_wallthickness WHERE scheduleId ='.$scheduleId, OBJECT );
	//$results1 = $wpdb->get_results( 'SELECT * FROM schedule WHERE thick_id ='.$thicknessId, OBJECT );
	//echo "<pre>";
	//print_r($results); die;

	if(!empty($results)){
		
	$response['status'] = "success";
	$response['wallthickness'] = $results[0]->wallthickness;
	$response['weight_per_mtr'] = $results[0]->weight_per_mtr;
	//$response['data']['schedule'] = $results1;
	}

	wp_send_json($response);
	 

  exit;
}   
   
   
   