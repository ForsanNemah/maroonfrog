<?php

/**
 * The main template file
 Template Name: Home Page 
*/

get_header(); ?>




























<!-- Bootstrap Carousel -->
<div id="main-slider" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators (النقاط تحت السلايدر) -->
  <ol class="carousel-indicators">
    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
    <li data-target="#main-slider" data-slide-to="1"></li>
    <li data-target="#main-slider" data-slide-to="2"></li>
    <li data-target="#main-slider" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <!-- Slide 1 -->
    <div class="item active">
      <img src="<?php bloginfo('template_url');?>/images/maroonfrog/slider004.jpg" alt="Slide 1">
      <div class="carousel-caption">
        <h3>ALKAFAA is an approved stockiest / supplier for all major companies</h3>
        <p>SAUDI ARAMCO, SABIC, SCECO, MARAFIQ, MAADEN, SWCC and many others.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="item">
      <img src="<?php bloginfo('template_url');?>/images/maroonfrog/slider001.jpg" alt="Slide 2">
      <div class="carousel-caption">
        <h3>Together We Are</h3>
        <p>"Together We Thrive" - Reliable supplier for Carbon Steel, Stainless Steel, Pipes, Fittings, Sheets & Valves.</p>
        <a href="/about-us" class="btn btn-primary">More About Us</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="item">
      <img src="<?php bloginfo('template_url');?>/images/maroonfrog/slider002.jpg" alt="Slide 3">
      <div class="carousel-caption">
        <img src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa-s.png" width="160" alt="">
        <h3>Established in 1982</h3>
        <p>Backed by more than 4 decades of experience.</p>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="item">
      <img src="<?php bloginfo('template_url');?>/images/maroonfrog/slider003.jpg" alt="Slide 4">
      <div class="carousel-caption">
        <h3>ALKAFAA is referred as the "Leading Stockiest Company in Saudi Arabia"</h3>
        <strong class="btn btn-primary">Fast & Secure Delivery</strong>
      </div>
    </div>

  </div>

  <!-- Controls (Next & Prev Buttons) -->
  <a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

<!-- Track Download Section -->
<section class="overlape3 maroon-bg2 track-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="track-form">
          <div class="heading2">
            <img src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa-s.png" width="100" alt="">
            <span>DOWNLOAD</span>
            <h3>PRODUCT CATALOG</h3>
          </div>
          <form>
            <label>Company overview, products, clients, projects and more...</label>
            <a href="<?php bloginfo('template_url');?>/images/maroonfrog/Alkafaa_Catalogue.pdf" class="theme-btn">
              <i class="fa fa-download"></i> DOWNLOAD
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>





















		<section class="block maroon-bg2" style="padding-top:10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
	                    
	                       <div class="heading">
                            <span>OUR GOAL IS TO SERVE YOU</span>
                            <h2>QUICK LINKS</h2>
                        </div>
                        <div class="top-margin">
                            <div class="row merge">
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="<?php bloginfo('template_url');?>/images/maroonfrog/285x361-box-01.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/box-04.png" alt="" /></i>
                                            <h3>Pipe Calculator</h3>
                                            <span style="color: white;font-size: 16px;" >Here you can easily and quickly calculate Weight, Wall Thickness and Volume of pipes.</span>

                                            <a class="theme-btn" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>pipe-calculator" title=""><i class="fa fa-paper-plane"></i>Go to Page</a>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="<?php bloginfo('template_url');?>/images/maroonfrog/285x361-box-02.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/box-02.png" alt="" /></i>
                                            <h3>Products Range</h3>
                                            <span style="color: white;font-size: 16px;">ALKAFAA is the largest supplier of steel pipe, tube, fittings and flanges in the Kingdom of Saudi Arabia.</span>
                                            
                                            <a class="theme-btn" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>products" title=""><i class="fa fa-paper-plane"></i>View Tables</a>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="<?php bloginfo('template_url');?>/images/maroonfrog/285x361-box-03.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/box-03.png" alt="" /></i>
                                            <h3>Send Feedback</h3>
                                            <span style="color: white;font-size: 16px;" >Have any inquires, questions, or complaints..<br />Reach Us! </span>
                                            
                                           <a class="theme-btn" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us" title=""><i class="fa fa-paper-plane"></i>Click Here</a>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="<?php bloginfo('template_url');?>/images/maroonfrog/285x361-box-04.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/box-01.png" alt="" /></i>
                                            <h3 >Download Center</h3>
                                            <span style="color: white;font-size: 16px;" >Company brochure, pipe charts, and useful resources.<br />[ PDFs ]</span>
                                            <a class="theme-btn" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>download-center" title=""><i class="fa fa-paper-plane"></i>Go to Page</a>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="block gray">
            <div class="container">
                <div class="row">
	                 <div class="heading">
                            <span>LEADERSHIP IN SERVICE</span>
                            <h2>PRODUCTS WE DELIVER</h2>
                        </div>
                    <div class="col-md-3">
                        <div class="column-title">
                           <!-- <span>Safe & Affordable Cargo Services</span> -->
                            <h2>Our Products</h2>
                            <p>ALKAFAA is the largest distributor of pipes, welded pipes and allied components in the Kingdom of Saudi Arabia. We offer a wide range of products, namely pipes and tubes, fittings, flanges, valves, stud bolts and gaskets.</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="modern-services-carousel style2" id="modern-services-carousel">
                            <div class="modern-service">
                                <div class="mod-service-inner">
                                    <span><img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-pipe.png"></span>
                                    <h3><a href="products#pipes" title="">Pipes/Tubes</a></h3>
                                    <p>An inventory of standard and special grades of seamless and welded pipes to meet your project needs quickly and reliably</p>
                                    <p><a href="products#pipes" style="color:#f15d22">Read More</a></p>
                                                                    </div>
                            </div><!-- Modern Service -->
                            <div class="modern-service">
                                <div class="mod-service-inner">
                                    <span><img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-fittings.png"></span>
                                    <h3><a href="products#fittings" title="">Fittings</a></h3>
                                    <p>Standard and special grades of fittings including Butt Weld, Forged Steel, High-Pressure Tube, and Nipple Swages and Outlets.</p>
                                     <p><a href="products#fittings" style="color:#f15d22">Read More</a></p>

                                </div>
                            </div><!-- Modern Service -->
                            <div class="modern-service">
                                <div class="mod-service-inner">
                                    <span><img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-glange.png"></span>
                                    <h3><a href="products#flangs" title="">Flanges</a></h3>                                    
                                    <p>We have a wide range of standard and special grades of flanges to meet your project needs quickly and reliably.</p>
                                    <p style="margin-bottom: 28px"><a href="products#flangs" style="color:#f15d22">Read More</a></p>
                                    
                                </div>
                            </div><!-- Modern Service -->
                            <div class="modern-service">
                                <div class="mod-service-inner">
                                    <span><img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-valve.png"></span>
                                    <h3><a href="products#valves" title="">Valves</a></h3>
                                    <p>ALKAFAA has the valves that you need, including Cast Iron, Steel, Bronze, Stainless Steel, Alloy 20, Aluminum, and more.</p>
                                    <p style="margin-bottom: 28px"><a href="products#valves" style="color:#f15d22">Read More</a></p>
                                </div>
                            </div><!-- Modern Service -->
                            <div class="modern-service">
                                <div class="mod-service-inner">
                                    <span><img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/sheets-icon.png"></span>
                                    <h3><a href="products#flangs" title="">Sheets & Plates</a></h3>
                                    <p>Supplier of stainless steel for standard specification for Chromium and Chromium-Nickel Stainless steel Plate, and more.</p>
                                    <p><a href="products#flangs" style="color:#f15d22">Read More</a></p>
                                </div>
                            </div><!-- Modern Service -->

<div class="modern-service">
                                <div class="mod-service-inner">
                                    <span><img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/bars-icon.png"></span>
                                    <h3><a href="products#valves" title="">Bars and Tubes</a></h3>
                                    <p>Supplier of stainless steel for piping applications and more. Standard specification for stainless steel bars and Shapes. </p>
                                    <p style="margin-bottom: 28px"><a href="products#valves" style="color:#f15d22">Read More</a></p>
                                </div>
                                
                            </div><!-- Modern Service -->

                        </div><!-- Modern Services Carousel -->
                    </div>
                </div>
            </div>
        </section>

        <section class="block no-padding" style="display:none;">
            <div class="fixed-bg  layer" style="background: url(<?php bloginfo('template_url');?>/images/maroonfrog/footer-bg.jpg) no-repeat scroll;"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="cargo-shipment">
                        <div class="calculate-shipping style2">
                            <div class="dark-title">
                                <span><i class="fa fa-steam"></i>Please Fill All Inquiry To Get Your Total Price.</span>
                                <h3>CALCULATE SHIPPING</h3>
                            </div>

                            <div class="calculate-shipping-form">
                                <form>
                                    <div class="row">                                   	
                                         
                                        <div class="col-md-6">
                                            <div class="select-service select-box">
                                                <select>
                                                    <option>Road</option>
                                                    <option>Air</option>
                                                    <option>Ocean</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="select-from select-box">
                                                <select>
                                                    <option>Road</option>
                                                    <option>Air</option>
                                                    <option>Ocean</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="select-goods select-box">
                                                <select>
                                                    <option>Road</option>
                                                    <option>Air</option>
                                                    <option>Ocean</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="select-to select-box">
                                                <select>
                                                    <option>Road</option>
                                                    <option>Air</option>
                                                    <option>Ocean</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" class="text-field" placeholder="Weight (kg)" />
                                        </div>

                                        <div class="col-md-6">
                                            <div class="extra-services">
                                                <h4><i class="fa fa-paper-plane"></i> EXTRA SERVICES</h4>
                                                <span>
                                                    <input tabindex="23" type="checkbox" id="field18" />
                                                    <label for="field18">Express Delivery</label>
                                                </span>
                                                <span>
                                                    <input tabindex="23" type="checkbox" id="field19" />
                                                    <label for="field19">Add Insurance</label>
                                                </span>
                                                <span>
                                                    <input tabindex="23" type="checkbox" id="field110" />
                                                    <label for="field110">Packaging</label>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="cargo-size">
                                                <h4><i class="fa fa-fire"></i>CARGO SIZE:</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="text-field" placeholder="Length (cm)" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="text-field" placeholder="Height (cm)" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="total">
                                                <h4>TOTAL:</h4>
                                                <div class="cargo-total">$345</div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Calculate Shipping -->
                    </div><!-- Cargo Shipment -->
                </div>
                <div class="col-md-6">
                    <div class="shipment-guide">
                        <div class="dark-title light">
                            <span><i class="fa fa-steam"></i>Company Overview About</span>
                            <h3>SHIPMENT GUIDE</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nasce culus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                        <div class="shipment-list">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="shipment-name">
                                        <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                    </div><!-- Shipment Name -->
                                </div>
                                <div class="col-md-6">
                                    <div class="shipment-name">
                                        <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                    </div><!-- Shipment Name -->
                                </div>
                                <div class="col-md-6">
                                    <div class="shipment-name">
                                        <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                    </div><!-- Shipment Name -->
                                </div>
                                <div class="col-md-6">
                                    <div class="shipment-name">
                                        <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                    </div><!-- Shipment Name -->
                                </div>
                            </div>
                        </div><!-- Shipment List -->
                        <a class="theme-btn" href="#" title=""><i class="fa fa-paper-plane"></i> About Unload</a>
                    </div><!-- Shipment Guide -->
                </div>
            </div>
        </section>
        
        <section class="block maroon-bg2" style="padding-top:10px; padding-bottom:20px;">
            <div class="container">
                <div class="row">
                	
                     <div class="top-margin">
                            <div class="row merge">
                            	 <div class="col-md-1"></div>                                   
                                <div class="col-md-5">
                                <div class="heading maroon">
                                        <span>Why should you choose us?</span>
                                        <h2>Alkafaa is recognized to be</h2>
                                    </div>
                                <div class="maroon-home">	                                   
                                   <h4><i class="fa fa-stack-overflow" aria-hidden="true" style="padding:0 10px;"></i>Prestigious Stockiest</h4>
                                   <h4><i class="fa fa-sitemap" aria-hidden="true" style="padding:0 10px;"></i>Multi-National / Diverse Company</h4>
                                   <h4><i class="fa fa-lock" aria-hidden="true" style="padding:0 10px;"></i>Trustworthy & Prominent</h4>
                                   <h4><i class="fa fa-briefcase" aria-hidden="true" style="padding:0 10px;"></i>Competitive in Securing Good Business</h4>
                                   <h4><i class="fa fa-building" aria-hidden="true" style="padding:0 10px;"></i>Reliable Partner with Customer Satisfaction Mindset</h4>
                                 </div>  
                                </div>
                                
                                <div class="col-md-5">
                                     <div class="about-shipment-thumb">
                                        <img itemprop="image" alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/about-shipment-thumb.png">
                                    </div> 
                                </div>   
                                <div class="col-md-1"></div>                            
                                
                            </div>
                        </div>                    
                </div>
            </div>
        </section>

        <section class="block maroon-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    	
                        <div class="heading">
                            <span>Events and Press Releases </span>
                            <h2>Company RECENT NEWS</h2>
                        </div>
                        <div class="top-margin">
                            <div class="row">
                            	<div class="cities-carousel" id="cities-carousel">
                                				<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'News & Events', 'posts_per_page'=> 6, 'order'=>'DESC' )); ?>

												<?php if ( $wpb_all_query->have_posts() ) : ?>
                                                
                                                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                                
                                            <div class="cities-detail">                                                 
                                            <div class="news-box">
                                                <div class="news-thumb">
                                                    <a href="<?php the_permalink(); ?>" title="" itemprop="url"><?php the_post_thumbnail('home-news'); ?></a>
                                                    <div class="date">
                                                        <strong><?php the_time('d'); ?></strong>
                                                        <span><?php the_time('F '); ?></span>
                                                    </div>
                                                </div>
                                                <div class="news-detail home">
                                                    <h2 itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                  
                                                    <p itemprop="description" style="font-size: 13px;"><?php the_content_limit('200'); ?></p>
                                                </div>
                                            </div>                               
                                            </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>

												<?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                                <?php endif; ?>
                                            
                                        </div>

                                
                            </div>
                        </div>											
                    </div>
                </div>
            </div>
        </section>

        <section class="block gray" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="reviews-sec">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="heading2 heading4 light">
                                        <span>What People Says About Us</span>
                                        <h3>COMPANY BENIFITS</h3>
                                    </div>
                                    <div class="company-benifits">
                                        <div class="toggle" id="toggle">
                                            <div class="toggle-item activate">
                                                <h3 class="active"><i class="fa fa-life-bouy"></i>Using This Dedicated Purpose Theme? <span><i class="fa fa-angle-up"></i></span></h3>
                                                <div class="content">
                                                    <div class="simple-text">
                                                        <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar estibulum bib volutpat. Sociis, eget mollis, exercitationem fames.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toggle-item">
                                                <h3 class=""><i class="fa fa-joomla"></i>Creative And Corporate Industries? <span><i class="fa fa-angle-up"></i></span></h3>
                                                <div class="content">
                                                    <div class="simple-text">
                                                        <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar estibulum bib volutpat. Sociis, eget mollis, exercitationem fames.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toggle-item">
                                                <h3 class=""><i class="fa fa-leaf"></i>Business Niche Or Creative Style? <span><i class="fa fa-angle-up"></i></span></h3>
                                                <div class="content">
                                                    <div class="simple-text">
                                                        <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar estibulum bib volutpat. Sociis, eget mollis, exercitationem fames.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="heading2 heading4 light">
                                        <span>What People Says About Us</span>
                                        <h3>CUSTOMERS REVIEWS</h3>
                                    </div>

                                    <div class="customers-reviews">
                                        <div class="customers-review-carousel" id="customers-review-carousel">
                                            <div class="review-area">
                                                <div class="customer-thumb"><img src="https://placehold.it/112x112" alt="" itemprop="image" /></div>
                                                <div class="customer-detail">
                                                    <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Lorem ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Lorem ipsum dolor siamet, con ridiculus sum dolor sit ametum. Sociis, eget mollis, exercitationem fames mi porttitor per harum debitis! Praesent fugiat reprehenderit qui Molestiae. Pellentesque.</p>
                                                    <div class="customer-info">
                                                        <h4>YMYZ ADAMS</h4>
                                                        <h5>CUSTOMER REVIEWS</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review-area">
                                                <div class="customer-thumb"><img src="https://placehold.it/112x112" alt="" itemprop="image" /></div>
                                                <div class="customer-detail">
                                                    <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Lorem ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Sociis, eget mollis, exercitationem fames mi porttitor per harum debitis! Praesent fugiat reprehenderit qui Molestiae. Lorem ipsum dolor siamet, con ridiculus sum dolor sit ametum Pellentesque.</p>
                                                    <div class="customer-info">
                                                        <h4>JOHAN DOE</h4>
                                                        <h5>CUSTOMER REVIEWS</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review-area">
                                                <div class="customer-thumb"><img src="https://placehold.it/112x112" alt="" itemprop="image" /></div>
                                                <div class="customer-detail">
                                                    <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Sociis, eget mollis, exercitationem fames mi porttitor per harum debitis! Praesent fugiat reprehenderit qui Molestiae. Pellentesque. Lorem ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Lorem ipsum dolor siamet, con ridiculus sum dolor sit ametum. </p>
                                                    <div class="customer-info">
                                                        <h4>JOHAN CARTER</h4>
                                                        <h5>CUSTOMER REVIEWS</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Reviews Sec -->
                    </div>
                </div>
            </div>
        </section>

        <section class="block no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
	                    <div class="heading" style="margin:50px 0 2px;">
                            <span>OUR GLOBAL REACH</span>
                            <h2>Our Major Partners</h2>
                        </div>
                        <?php $args = array( 'post_type' => 'partner', 'posts_per_page' => -1, 'order'=>'DESC' ); ?>

                        <ul class="partners" id="partners">
                        	<?php $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();?>
                            <li><a itemprop="url" href="<?php $key="partners-link"; echo get_post_meta($post->ID, $key, true); ?>" title=""><?php the_post_thumbnail('full'); ?></a></li>
                          
                            <?php endwhile;  wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            
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
        
         
        </section>	
        
    

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

<?php get_footer(); ?>
