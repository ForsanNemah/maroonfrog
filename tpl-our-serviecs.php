<?php
/**
 * The template for displaying pages
 *
 Template Name: Our Services
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
        
    <section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-margin">
							<div class="row">
								<div class="col-md-4">
									<div class="news-box">
										<!--<div class="news-thumb">
											<a href="blog-detail.html" title="" itemprop="url"><img itemprop="image" src="http://placehold.it/370x275" alt="" /></a>
											<div class="date">
												<strong>04</strong>
												<span>August</span>
											</div>
										</div>-->
										<div class="news-detail">
											<h2 itemprop="headline"><a itemprop="url" href="<?php echo home_url(); ?>/treatments-of-materials/" title="">Treatments of Materials</a></h2>
											 
											<p itemprop="description"> Most of our tube products are subject to material treatments before they are processed further. In order to relieve you from this extra handling, </p>
										
                                         <div class="readmore-button"><a href="<?php echo home_url(); ?>/treatments-of-materials/" title="" class="btns sml-btn blu-skin">Read more..</a></div>
                                        
                                        </div>
                                        
									</div>
								</div>

								<div class="col-md-4">
									<div class="news-box">
										 
										<div class="news-detail">
											<h2 itemprop="headline"><a itemprop="url" href="<?php echo home_url(); ?>/inspection-and-testing/" title="">Inspection and Testing</a></h2>
											 
											<p itemprop="description"> Material inspection and testing is done after arrival of the shipment. It can be performed by one of our own qualified inspectors, </p>
										
                                        	<div class="readmore-button"><a href="<?php echo home_url(); ?>/inspection-and-testing/" title="" class="btns sml-btn blu-skin">Read more..</a></div>
                                        
                                        </div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="news-box">
										 
										<div class="news-detail">
											<h2 itemprop="headline"><a itemprop="url" href="<?php echo home_url(); ?>/logistical-services/" title="">Logistical Services</a></h2>
											 
											<p itemprop="description"> Logistics services and stock control are the two core activities in our Warehouse. Keeping a comprehensive, in-depth stock of Carbon and </p>
										
                                        	<div class="readmore-button"><a href="<?php echo home_url(); ?>/logistical-services/" title="" class="btns sml-btn blu-skin">Read more..</a></div>
                                        
                                        </div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="news-box">
										 
										<div class="news-detail">
											<h2 itemprop="headline"><a itemprop="url" href="<?php echo home_url(); ?>/technical-information/" title="">Technical Information</a></h2>
											 
											<p itemprop="description"> We offer you technical information and documentation about our products, such as conversion tables both in English and Metric System and Pipe Calculator. </p>
										
                                        	<div class="readmore-button"><a href="<?php echo home_url(); ?>/technical-information/" title="" class="btns sml-btn blu-skin">Read more..</a></div>
                                        
                                        </div>
									</div>
								</div>

								 <div class="col-md-4">
									  
								</div>

								<div class="col-md-4">
									 
								</div>
							</div>
						</div>											
					</div>
				</div>
			</div>
		</section>
        
         
    
<?php get_footer(); ?>
