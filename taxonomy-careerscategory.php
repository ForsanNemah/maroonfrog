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
					<h3><?php echo $terms = single_cat_title(  ) ;  ?> <?php $term_slug = get_query_var( 'term' ); ?></h3>
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
                                    
                                     <div class="toggle toggle-style4 toggle-style5" id="toggle5">
                                <?php   query_posts( array( 'post_type' => 'careers', 'posts_per_page' => -1, 'order' => 'DESC', 'tax_query' => 
					 array( array( 'taxonomy' => 'careerscategory', 'field' => 'slug', 'terms' => $term_slug ) )  ) ); ?>
                     
                                	<?php if ( have_posts() ) : $count=0; ?>
                                    <?php  while ( have_posts() ) : the_post();  $count ++ ;  ?>			 
                                    	
                                	   <div class="toggle-item ">
                                            <h3 class="<?php if($count == 1){ echo "active";}?>"><i class="fa fa-user"></i><?php the_title(); ?></h3> 
                                            <div class="content">
                                                <div class="simple-text">
                                                    
                                                	<?php the_content(); ?> 
                                                
                                                </div>
                                            </div>
                                        </div> 
                                        <?php endwhile; wp_reset_postdata(); ?>
										<?php else:   ?>
                                        <div class="toggle-item">
                                          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
											<?php endif; ?>
                                        </div>
                                        
                                    </div>                                
                                
                                </div>
									 

								
                                
								</div>

								 <div class="col-md-2"></div>
							</div>
						</div>											
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>
