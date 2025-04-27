<?php
/**
 * The template for displaying pages
 *
 Template Name: Careers
 */

get_header(); ?>

	
    <div class="page-top  overlape">
			<div class="parallax" data-velocity="-.1" style="background: url(<?php $link = the_field('title_background_image'); if(!empty($link)) { echo $link; }?>) repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span><?php echo $sub_title = get_field('sub_title'); ?></span>
					<h3><?php echo $title = get_field('title'); ?></h3>
				</div><!-- Page Title -->
			</div>
		</div>
        
        
        
    <section class="block maroon-bg2" >
            <div class="container">
                <div class="row">
           
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                
                                	<div class="toggle toggle-style4 toggle-style5" id="toggle5">
                                    	<?php $args = array( 'post_type' => 'careers', 'order'=>'DESC', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args ); ?>
                                        <?php if ( $the_query->have_posts() ) : $count=0; ?>
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count ++ ; ?>
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
                                <div class="col-md-1"></div>
                    </div>
                    
                </div>    
            </div>
    </section> 
    
<?php get_footer(); ?>
