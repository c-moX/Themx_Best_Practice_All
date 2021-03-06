<?php 

function themx_section_one($attr){
	
	extract(
		shortcode_atts(array(
		
		'first_sec_title' => '',
		'first_sec_des' => '',
		'first_sec_title_color' => '',
		'first_sec_image' => '',
		
		
		
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="get_in_tuch_skill">
		<div class="container-fluid nopadding">
		<div class="col-md-6 col-sm-6 padding_left">
			<div class="left_image_get_in">
				
				
				<?php 
				
					$first_sec_image_one = wp_get_attachment_image_src($first_sec_image,'full');
					if($first_sec_image_one){ ?>
						
					<img src="<?php echo esc_url($first_sec_image_one[0]);?>">
					<?php }
				
				?>
				
			</div>
		</div><!-- col-md-6  -->

		<div class="col-md-3 col-sm-6">
			<div class="middle_skill_get_in heroo_get_in_tuch">
				<div class="middle_skill_get_in_cell">
					<div class="hero-progress">
						<div class="progress-item">
							<p>Development<span class="pull-right">90%</span></p>
							<div class="progress-main"><span class="progress-bar"  data-value="86%"></span></div>
						</div><!-- progress-item  -->

						<div class="progress-item">
							<p>Web Marketing<span class="pull-right">96%</span></p>
							<div class="progress-main"><span class="progress-bar"  data-value="90%"></span></div>
						</div><!-- progress-item  -->

						<div class="progress-item">
							<p>Illustration<span class="pull-right">65%</span></p>
							<div class="progress-main"><span class="progress-bar"  data-value="65%"></span></div>
						</div><!-- progress-item  -->

						<div class="progress-item">
							<p>Phothgraphy<span class="pull-right">86%</span></p>
							<div class="progress-main"><span class="progress-bar"  data-value="88%"></span></div>
						</div><!-- progress-item  -->

						<div class="progress-item">
							<p>Identity<span class="pull-right">96%</span></p>
							<div class="progress-main"><span class="progress-bar"  data-value="79%"></span></div>
						</div><!-- progress-item  -->
					</div>
				</div><!-- middle_skill_get_in_cell -->
			</div><!-- middle_skill_get_in -->
		</div><!-- col-md-3  -->

		<div class="col-md-3 padding_right col-sm-6">
			<div class="right_skill_get_in_text">
				<div class="right_skill_get_in_text_cell">
					<h3 style="color:<?php echo esc_html($first_sec_title_color);?>"><?php echo esc_html($first_sec_title);?></h3>
					<p><?php echo esc_html($first_sec_des);?></p>
					<a href="#" class="MESSAGE_uS">MESSAGE US</a>
				</div>
			</div>
		</div><!-- col-md-3  -->
	</div><!-- container-fluid  -->
</div><!-- get_in_tuch_skill  -->
		<?php
	
	return ob_get_clean();
	
}
add_shortcode('section_one_base','themx_section_one');


?>