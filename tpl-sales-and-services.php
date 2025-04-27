<?php
/**
 * The template for displaying pages
 *
 Template Name: Sales & Services
 */

get_header(); ?>

	
    <div class="page-top  overlape">
			<div class="parallax" data-velocity="-.1" style="background: url(<?php echo the_field('page_title_background_image'); ?>) repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span><?php echo $variable = get_field('sub_title'); ?></span>
					<h3><?php echo $variable = get_field('title'); ?></h3>
				</div><!-- Page Title -->
			</div>
		</div>
        
    	     
        <section class="block maroon-bg2" id="treatments-of-materials">
            <div class="container">
                <div class="row">
	                <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px"><?php echo $variable = get_field('treatments_of_materials'); ?></h2>
                        </div>
                        
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
                            	<div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="safe-affordable-cargo"> 
                                    
                                    	<?php echo $variable = get_field('content_for_treatments_of_materials'); ?>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                 
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
        </section>    
        
        <section class="block blackish" id="inspection-and-testing">
			<div class="fixed-bg" style="background:url(images/maroonfrog/bg-03.jpg)"></div>
			<div class="container">
				 
				 <div class="row">
                 	 <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px; color: #fff; opacity: 0.7"><?php echo $variable = get_field('inspection_and_testing'); ?></h2>
                        </div>
                            	<div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="safe-affordable-cargo">
                                    
                                       <?php echo $variable = get_field('content_for_inspection_and_testing'); ?>
                                       
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                 
                        </div>
                 
            </div>
		</section>
        
        <section class="block maroon-bg2" id="logistical-services">
            <div class="container">
                 	<div class="row">
                    	 <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px"><?php echo $variable = get_field('logistical_services'); ?></h2>
                        </div>
                            	<div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="safe-affordable-cargo">
                                        
                                        <?php echo $variable = get_field('content_for_logistical_services'); ?>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                 
                        </div>
                 </div>
        </section>    
        
        <section class="block blackish" id="technical-information">
			<div class="fixed-bg" style="background:url(images/maroonfrog/bg-03.jpg)"></div>
			<div class="container">
				 
				 <div class="row">
                 	 <div class="heading" style="padding-bottom: 20px">
                            <h2 style="padding-bottom: 30px; color: #fff; opacity: 0.7"><?php echo $variable = get_field('technical_information'); ?></h2>
                        </div>
                            	<div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="safe-affordable-cargo">
                                       
                                       <?php echo $variable = get_field('content_for_technical_information'); ?>
                                       
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                 
                        </div>
                 
            </div>
		</section>
          
		
		  
        
         
        
         
        
         
        
         
    
<?php get_footer(); ?>
