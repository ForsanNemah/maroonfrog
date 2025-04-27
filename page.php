<?php
/**
 * The template for displaying pages
 
 */

get_header(); ?>


	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
	 <div class="page-top  overlape">
			<div class="parallax" data-velocity="-.1" style="background: url(<?php bloginfo('template_url');?>/images/maroonfrog/header-01.jpg) repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					 
					<h3><?php the_title(); ?></h3>
				</div><!-- Page Title -->
			</div>
		</div>
        
        <section class="block maroon-bg2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-margin blog-list-main">
							<div class="row">                           	 
                                
								<div class="col-md-12">
                                
									 	<?php the_content(); ?>								
                                 
								</div>

								 
							</div>
						</div>											
					</div>
				</div>
			</div>
		</section>
        
        <?php endwhile; // end of the loop. ?>
        
        
<?php get_footer(); ?>
