<?php
/**
 * The template for displaying pages
 *
 Template Name: About Us
 */

get_header(); ?>

	
    <div class="page-top  overlape">
			<div class="parallax" data-velocity="-.1" style="background: url(<?php echo the_field('page_title_background_image'); ?>) repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
						<span><?php echo $variable = get_field('sub-title'); ?></span>
					<h3><?php echo $variable = get_field('title'); ?></h3>
				</div><!-- Page Title -->
			</div>
		</div>
        
    	<section class="block maroon-bg2" id="company-overview">
            <div class="container">
                <div class="row">
	                <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px"><?php echo $variable = get_field('section_title'); ?></h2>
                        </div>
                        
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="safe-affordable-cargo">
                                        
                                       
                                       <?php echo $variable = get_field('company_overview_content'); ?>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
	                                <div class="services1" style="padding: 65px 0;">
                                            <div class="row">
	                                           <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <div class="simple-services1">
                                                        <div class="service-box1">
                                                            <img alt="" src="<?php bloginfo('template_url');?>/images/resource/33.png">
                                                            <h5 class="counter"> <?php echo $variable = get_field('happy_clients'); ?></h5>
                                                            <span>ACTIVE CLIENTS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                               

                                                <div class="col-md-6">
                                                    <div class="simple-services1">
                                                        <div class="service-box1">
                                                            <img alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/people.png">
                                                            <h5 class="counter"> <?php echo $variable = get_field('dedicated_employees'); ?></h5>
                                                            <span>DEDICATED EMPLOYEES</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            
	                                            <div class="row">
		                                            <div class="col-md-12" style="padding: 15px 0;">&nbsp;</div>
		                                        </div>
                                            
                                            <div class="row">
	                                            <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <div class="simple-services1">
                                                        <div class="service-box1">
                                                            <img alt="" src="<?php bloginfo('template_url');?>/images/resource/22.png">
                                                            <h5 class="counter"> <?php echo $variable = get_field('products'); ?></h5>
                                                            <span>PRODUCTS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                               

                                                <div class="col-md-6">
                                                    <div class="simple-services1">
                                                        <div class="service-box1">
                                                            <img alt="" src="<?php bloginfo('template_url');?>/images/resource/11.png">
                                                            <h5 class="counter"> <?php echo $variable = get_field('years_of_experience'); ?></h5>
                                                            <span>YEARS OF EXPERIENCE</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row">
	                                        <div class="col-md-3"> </div>
	                                        <div class="col-md-6"> <a title="" href=" <?php echo $variable = get_field('download_brochure'); ?>" class="theme-btn dark"><i class="fa fa-download"></i>  Download Our Brochure</a></div>
	                                        <div class="col-md-3"> </div>
                                       
                                        </div>
                                </div>
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
        </section>    
        
        <section class="block blackish" id="mission-vision">
			<div class="fixed-bg" style="background:url(images/maroonfrog/bg-03.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="members-sec">
							<div class="heading heading5" style="padding-bottom: 20px">
								<h2 style="padding-bottom: 30px"><?php echo $variable = get_field('company_mission_and_vision'); ?></h2>
							</div>
						
						</div><!-- Members Sec -->
					</div>
				</div>
				
				<!--First Box  -->
                <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
	                            
	                            <div class="callus3 callus-action">
                                <div class="callus-content">
                                    <img alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-mission.png">
                                    <h1 style="color:#f15d22; font-size: 26px">OUR MISSION</h1>
                                    <h2><?php echo $variable = get_field('our_mission_content'); ?></h2>
                                </div>
                                
                            </div>
	                            
                            </div>
                            <div class="col-md-2"></div>
                            
			</div>
            	
                <!-- Second BOx -->
                <div style="padding-top: 60px;">
            	<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
	                            
	                            <div class="callus3 callus-action">
                                <div class="callus-content">
                                    <img alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-vision.png">
                                    <h1 style="color:#f15d22; font-size: 26px">OUR VISION</h1>
                                    <h2><?php echo $variable = get_field('our_vision_content'); ?></h2>
                                </div>
                                
                            </div>
	                            
                            </div>
                            <div class="col-md-2"></div>
                            
			</div>
            	</div>
            </div>
		</section> 
		
		<section class="block maroon-bg2" id="quality-safety-policy">
            <div class="container">
                <div class="row">
	                <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px"><?php echo $variable = get_field('quality_&_safety_policy'); ?></h2>
                        </div>
                        
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                   <div class="callus2 callus-action">
	                                   <div class="callus-content" style="margin-bottom: 231px;">
		                                  <img alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-quality.png">
		                                  <?php echo $variable = get_field('quality_policy'); ?>

                                        </div>
                                        </div>
                                   
                                </div>
                                <div class="col-md-6">
	                                <div class="calluscustom callus-action services1" style="padding: 65px 0;">
                                            
	                                       
                                            
                                            <div class="callus-content">
		                                  <img alt="" src="<?php bloginfo('template_url');?>/images/maroonfrog/icon-safety.png">
		                                  <?php echo $variable = get_field('safety_policy'); ?>
                                         
			                                  <strong style="color:#131313;"><strong>Commitment</strong></strong>
			                                  <p style="color:#131313;padding-top: 8px">We dedicate ourselves to the Safety Policy to improve our performance and strive for achieving zero accident, on continuous basis.</p>


                                        </div>

                                    
                                    
                                    </div>
                                       
                                </div>
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
        </section> 
        
        <section class="block blackish" id="vice-chairman-message">
			<div class="fixed-bg" style="background:url(<?php bloginfo('template_url');?>/images/maroonfrog/header-06.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="members-sec">
							<div class="heading heading5" style="padding-bottom: 20px">
								<h2 style="padding-bottom: 30px"><?php echo $variable = get_field('ceo_message'); ?></h2>
							</div>
						
						</div><!-- Members Sec -->
					</div>
				</div>
				
				<!--First Box  -->
                <div class="row">
                             
                            <div class="col-md-8">
	                            
	                            <div class="callus3 callus-action">
                                <div class="callus-content">
                                <?php echo $variable = get_field('ceo_message_content'); ?>
                                </div>
                                
                            </div>
	                            
                            </div>
                            <div class="col-md-4 about-ceo"><img alt="" src="<?php echo $variable = get_field('ceo_message_image'); ?>"></div>
                            
			</div> 
                 
            </div>
		</section>
        
        <section class="block maroon-bg2" id="our-team">
            <div class="container">
                <div class="row">
	                <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px"><?php echo $variable = get_field('our_team'); ?></h2>
                        </div>
                        
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
                            
                            	<div class="col-md-2"></div>  
                            	
                                <div class="col-md-8">
                            
                            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2500" style="margin-bottom:50px;">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                                          	 <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                                              <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                                               <li data-target="#carousel-example-generic" data-slide-to="14"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="15"></li>
                                                 <li data-target="#carousel-example-generic" data-slide-to="16"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="17"></li>
                                            
                                          </ol>
                                        
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner" role="listbox">
                                          
                                            <div class="item active">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-01.jpg">       
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-02.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-03.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-04.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-05.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-06.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-07.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-08.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-09.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-10.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-11.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-12.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-13.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-14.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-15.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-16.jpg">    
                                            </div>
                                            
                                              <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-team/gallery-team-17.jpg">    
                                            </div>
                                            
                                     
                                           
                                          </div>
                                        
                                          <!-- Controls -->
                                        <!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>-->
                                        </div>	
                                   
                                </div>
                                
                                <div class="col-md-2"></div>        
                            
                                <div class="col-md-8">
                                
                                
                                    <div class="safe-affordable-cargo">
                                        
                                       
                                       <?php echo $variable = get_field('our_team_content'); ?>
                                                                                
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
	                                 
                                    
                                    
<center><h3 style="font-style: italic;padding-top: 100px">“Together We Are“</h3>
<h3>“Together We Thrive”</h3></center>                                   
                                </div>
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
        </section>
        
        <section class="block blackish" id="our-warehouses">
			<div class="fixed-bg" style="background:url(images/maroonfrog/bg-05.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="members-sec">
							<div class="heading heading5" style="padding-bottom: 20px">
								<h2 style="padding-bottom: 30px"> <?php echo $variable = get_field('our_warehouses'); ?></h2>
							</div>
						
						</div><!-- Members Sec -->
					</div>
				</div>
				
				<!--First Box  -->
                	 <div class="row">
                
                				<div class="col-md-2"></div>  
                            	
                                <div class="col-md-8">
                            
                            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000" style="margin-bottom:50px;">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                                          	 <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                                             <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                                          
                                          </ol>
                                        
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner" role="listbox">
                                          
                                            <div class="item active">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-01.jpg">       
                                            </div>
                                            
                                           <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-02.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-03.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-04.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-05.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-06.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-07.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-08.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-09.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-10.jpg">    
                                            </div>
                                            
                                            <div class="item">
                                             <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-11.jpg">    
                                            </div>
                                            
                                             <div class="item">
                                              <img src="<?php bloginfo('template_url');?>/images/maroonfrog/gallery-warehouses/gallery-warehouses-12.jpg">    
                                            </div>
                                    
                                           
                                          </div>
                                        
                                          <!-- Controls -->
                                        <!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>-->
                                        </div>	
                                   
                                </div>
                                
                                <div class="col-md-2"></div>  
                   	 </div>
                   
                     <div class="row">         
                            
                            <div class="col-md-8">
	                            
	                            <div class="callus3 callus-action">
                                <div class="callus-content">
                                
                                	<?php echo $variable = get_field('our_warehouses_content_left'); ?>
                                    
                                  </div>
                                
                            </div>
	                            
                            </div>					 
                           
                            <div class="col-md-4">
	                            
	                            <div class="callus3 callus-action">
                                <div class="callus-content">
                                  
                                  <?php echo $variable = get_field('our_warehouses_content_right'); ?>
                                  
                                </div>
                                
                            </div>
	                            
                            </div>                           
                            
					 </div>
                     
            	</div>
            </div>
		</section>
        
        <section class="block maroon-bg2" id="our-strengths">
            <div class="container">
                <div class="row">
	                <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px"> <?php echo $variable = get_field('our_strengths'); ?></h2>
                        </div>
                        
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
	                            <div class="col-md-1"></div>
                                <div class="col-md-5">
                                
                               		<?php echo $variable = get_field('our_strengths_content_left'); ?>
                                
                                
                                </div>
                                <div class="col-md-5">
                               
                                	
                                    <?php echo $variable = get_field('our_strengths_content_right'); ?>
                                
                                
                                </div><div class="col-md-1"></div>
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
            </div>
        </section>
        
        <section class="block blackish" id="why-us">
			<div class="fixed-bg" style="background:url(images/maroonfrog/bg-05.jpg)"></div>
			<div class="container">
				 
                 	<div class="row">
	                <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px; color: #ffffff; opacity:0.7"> <?php echo $variable = get_field('why_us'); ?></h2>
                        </div>
                        
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
	                            <div class="col-md-1"></div>
                                <div class="col-md-5">
                                
                               		<?php echo $variable = get_field('why_us_content_left'); ?>
                                
                                
                                </div>
                                <div class="col-md-5">
                               
                                	
                                    <?php echo $variable = get_field('why_us_content_right'); ?>
                                
                                
                                </div><div class="col-md-1"></div>
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
                     
            	</div>
            </div>
		</section>
    
<?php get_footer(); ?>
