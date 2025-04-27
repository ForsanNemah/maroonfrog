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
                                		 <div class="toggle toggle-style4 toggle-style5" id="toggle5">
                                	  <?php while( have_posts() ): the_post();  ?>
      
											 <div class="toggle-item ">
                                            <h3 class="<?php if($count == 1){ echo "active";}?>"><i class="fa fa-user"></i><?php the_title(); ?></h3> 
                                            <div class="content">
                                                <div class="simple-text">
                                                    
                                                	<?php the_content(); ?> 
                                                
                                                </div>
                                            </div>
                                        </div> 
                                        <?php endwhile; wp_reset_postdata(); ?>
										 
                                         
                                        
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
<script>
jQuery(document).ready(function(){
  $(".carousel-indicators li:first").addClass("active");
  $(".carousel-inner .item:first").addClass("active");
});
</script>