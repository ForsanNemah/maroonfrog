<?php
/**
 * The template for displaying all single posts and attachments
 
 */

get_header(); ?>

	  <div class="page-top  overlape">
			<div class="parallax" style="background: url(<?php bloginfo('template_url');?>/images/maroonfrog/header-06.jpg) repeat scroll 0 0 / cover"></div>
			<div class="container">
				<div class="page-title">
					<!--<span>Perfect For Any Business</span>-->
					<h3><?php the_title(); ?></h3>
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
                                
                                	 	<?php
											// Start the loop.
											while ( have_posts() ) : the_post(); ?>
									 
                                    	 <?php  
      
											$homeland_thumbnails = get_post_meta( $post->ID, 'homeland_thumbnails', true );
											$homeland_thumb_id = get_post_thumbnail_id( get_the_ID() );
													
												   $args = array( 
													'post_type' => 'attachment', 
													'numberposts' => -1, 
													'order' => $homeland_attachment_order, 
													'orderby' => $homeland_attachment_orderby, 
													'post_status' => null, 
													'post_parent' => $post->ID, 
													'exclude' => $homeland_thumb_id
												   );
												   
												   $homeland_attachments = get_posts( $args ); 
												     
												  ?>
                                
									<div class="news-box blog-list">
											<div class="news-thumb">												
                                     
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2500">
                                          <!-- Indicators -->
                                           <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                            
                                          </ol>
                                        
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner" role="listbox">
                                        
                                          	
                                             <?php  if ( $homeland_attachments ) :      
												  foreach ( $homeland_attachments as $homeland_attachment ) :
												   $homeland_attachment_id = $homeland_attachment->ID;
												   $homeland_type = get_post_mime_type( $homeland_attachment->ID ); 
												   $homeland_large_image_url = wp_get_attachment_image_src( $homeland_attachment_id, 'full' );  ;
												   
												   ?>
                                          	
                                            <div class="item"><?php echo wp_get_attachment_image( $homeland_attachment->ID, '' ); ?></div>
                                           <?php  endforeach;  endif; ?>
                                            
                                          </div>
                                        
                                   			</div>
                                        
											<div class="date">
												<strong><?php the_time('d'); ?></strong>
												<span><?php the_time('F '); ?></span>
											</div>
										</div>
										<div class="news-detail" style="padding-bottom: 50px;">
											<h2 itemprop="headline"><?php the_title(); ?></h2>
                                            <p style="font-weight: bold;">Event Date: <?php $key="event-date"; echo get_post_meta($post->ID, $key, true); ?></p>
                                            <p style="font-weight: bold;">Event Place: <?php $key="event-place"; echo get_post_meta($post->ID, $key, true); ?></p>
											<p itemprop="description" style="padding: 20px 0 40px"><?php the_content();?>
</p>											 
										</div>
									</div>

									<?php endwhile; ?> <?php wp_reset_postdata(); ?>  
                                
								</div>

								 <div class="col-md-2"></div>
							</div>
						</div>											
					</div>
				</div>
			</div>
		</section>
        

 
<?php get_footer(); ?>
<script>
jQuery(document).ready(function(){
  $(".carousel-indicators li:first").addClass("active");
  $(".carousel-inner .item:first").addClass("active");
});
</script>