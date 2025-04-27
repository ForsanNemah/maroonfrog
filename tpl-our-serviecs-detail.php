<?php
/**
 * The template for displaying pages
 *
 Template Name: Our Services Detail
 */

get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="page-top  overlape">
			<div class="parallax" data-velocity="-.1" style="background: url(<?php bloginfo('template_url');?>/images/maroonfrog/header-01.jpg) repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span>the leading supplier / stockiest in the Kingdom </span>
					<h3><?php the_title(); ?></h3>
				</div><!-- Page Title -->
			</div>
		</div>
        
     
     <section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-margin blog-detail-main">
							<div class="row">
								<div class="col-md-12">
									<div class="news-box blog-detail">
										 
										<div class="news-detail" style="margin-bottom:0;">
											<h1 itemprop="headline"><?php the_title(); ?></h1>
											 
										</div>
										  <?php the_content(); ?>  
									</div>
								 
									  
								</div>
							</div>
						</div>											
					</div>
				</div>
			</div>
		</section>   
    	     
        <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
