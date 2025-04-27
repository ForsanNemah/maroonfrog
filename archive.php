<?php
/**
 * The template for displaying archive pages

 */

get_header(); ?>


   <div class="page-top  overlape">
			<div class="parallax" style="background: url(<?php bloginfo('template_url');?>/images/maroonfrog/header-06.jpg) repeat scroll 0 0 / cover"></div>
			<div class="container">
				<div class="page-title">
					<!--<span>Perfect For Any Business</span>-->
					<h3><?php echo $terms = single_cat_title(  ) ;  ?></h3>
				</div><!-- Page Title -->
			</div>
		</div><!-- Page Top -->	
 		
		<section class="block maroon-bg2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-margin blog-list-main">
							<div class="row">

                            	<div class="col-md-2"></div>
                                
									<div class="col-md-8">
                                
                                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>			 
                                    	
                                
									<div class="news-box blog-list">
											<div class="news-thumb-category"> 
                                            
                                                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('slider-news'); ?> </a> 
                                        
											<div class="date">
												<strong><?php the_time('d'); ?></strong>
												<span><?php the_time('F '); ?></span>
											</div>
										</div>
										<div class="news-detail">
											<h2 itemprop="headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                            <p style="font-weight: bold;">Event Date: <?php $key="event-date"; echo get_post_meta($post->ID, $key, true); ?></p>
                                            <p style="font-weight: bold;">Event Place: <?php $key="event-place"; echo get_post_meta($post->ID, $key, true); ?></p>
											<p itemprop="description" style="padding: 20px 0 40px"><?php the_content_limit('120');?></p>											 
										</div>
									</div>

									<?php endwhile; ?> <?php wp_reset_postdata(); ?> <?php else : ?>
                                     <p itemprop="description" style="padding: 20px 0 40px"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                    <?php endif; ?> 
                                
								</div>

								 <div class="col-md-2"></div>
							</div>
						</div>											
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>
