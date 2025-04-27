<?php
/**
 * The template for displaying pages
 *
 Template Name: Pipe Calculator
 */

get_header(); ?>

<?php
$pageId  =  get_the_id(); 
global $wpdb;
$thickness_results = $wpdb->get_results( 'SELECT * FROM alkf_thickness', OBJECT );
?>



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
								<div class="col-md-2"></div>

								<div class="col-md-8"> 
                                
                                	<div class="cargo-shipment">
                                	<div class="calculate-shipping">
                                
                                	<div class="calculate-shipping-form">
                                    
                                	 <form method="post" action=""> 
                                                                                      
                                                <label>Nominal Pipe Size ( In Inches )<span style="color:#F90207; font-size:18px;">*</span></label>
                                                <div class="col-md-6">
                                                    <div class="select-to select-box">
                                                      <select name="thickness" id="thickness">	
                                                        <option value="-1" id="">--Select--</option>
                                                        <?php 
                                                        foreach($thickness_results as $thickness) 
                                                            { 
                                                                echo '<option value="'.$thickness->name.'" id="'.$thickness->id.'">'.$thickness->display_name.'</option>';
                                                            }
                                            
                                                        ?>
                                                        </select> 
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-2"><label style="padding-top: 15px;">Inches</label></div>
												<label>Outer Diameter <span style="color:#F90207; font-size:18px;">*</span></label>
                                                <div class="col-md-6">
                                                													 
                                                   <input type="text" name="diameter" id="diameter" class="text-field" />
                                                  	 
                                                   
                                                </div>
                                                <div class="col-md-2"><label style="padding-top: 15px;">Inches</label></div>
												  
                                                 <label>Schedule<span style="color:#F90207; font-size:18px;">*</span></label> 	
                                                 <div class="col-md-6">
                                                    <div id="changeSchedule">
                                                    <div class="select-to select-box">
                                                        <select name="schedule" id="schedule">	
                                                        <option value="-1">--Select--</option>
                                                        </select>
                                                        </div> 
                                                    </div>
                                                 </div>  
                                                 <div class="col-md-2"><label style="padding-top: 15px;">Inches</label></div> 
                                            
                                                 <label>Wall Thickness <span style="color:#F90207; font-size:18px;">*</span></label>
                                                 <div class="col-md-6"> 
                                                 <input type="text" name="wall_thickness" id="wall_thickness" class="text-field">
                                              
                                                
                                                 <input type="hidden" name="weightpermeter" id="weightpermeter" class="text-field" />
                                                 </div>
                                                 <div class="col-md-2"><label style="padding-top: 15px;">Inches</label></div> 
                                                 
                                                  <label>Length</label> 
                                                 <div class="col-md-6"> 
                                                 <input type="type" class="text-field" placeholder="Length" name="length" id="length" maxlength="500" /> 
                                                 </div>
                                                 <div class="col-md-2"><label style="padding-top: 15px;">Meter</label></div> 
                                                 
                                                
                                                  <label> 
                                                  		 <input type="button" onClick="multiplyBy()" class="btn btn-primary" value="Calculate Weight" />
                                                  </label> 
                                                 <div class="col-md-6"> 
                                                 <span id = "calculated_weight" style="background-color: #fff; border: 1px solid #cdcdcd; padding: 15px 20px; display:inline-block; width: 100%; height: 50px !important;"></span>
                                                <!-- <input type="type" name="calculated_weight" id="calculated_weight" readonly class="text-field" placeholder="Calculated Weight" maxlength="500" /> -->
                                                 </div>
                                                 <div class="col-md-2"><label style="padding-top: 15px;">Kg/m</label></div> 
                                                
                                                <!-- <label><button type="button" class="btn btn-primary">Calculate Shipping Volume</button></label> 
                                                 <div class="col-md-6"> 
                                                 <input type="type" readonly class="text-field" placeholder="Calculated Shipping Volume" maxlength="500" /> 
                                                 </div>
                                                 <div class="col-md-2"><label style="padding-top: 15px;">Cubic Meter</label></div>  -->
                                               
                                        </form>
                                        
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

<script>

function multiplyBy()
{
        num1 = document.getElementById("weightpermeter").value;
        num2 = document.getElementById("length").value;
        document.getElementById("calculated_weight").innerHTML = num1 * num2;
} 
</script>  