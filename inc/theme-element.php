<?php 


function fusion_section($attr){
	
	extract(
		shortcode_atts(array(
		'fusion_title'=>'Hello Dere',
		'fusion_title_2'=>'hello World',

		),$attr)
	);?>


    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3"><?php echo esc_html($fusion_title); ?></h2>
              <p>
                <?php echo esc_html($fusion_title_2); ?>
              </p>
            </div>
          </div>s
        </div>

	<?php
	}

add_shortcode('section_1','fusion_section');





function fusion_sections($attr){
	
	extract(
		shortcode_atts(array(
		'fusion_title_3'=>'vcbcv',
		'fusion_title_4'=>'vcbcv',
		),$attr)
	);?>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2"><?php echo esc_html($fusion_title_3); ?></h4>
                <p>
                  <?php echo esc_html($fusion_title_4); ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Sell Online Course</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Global Certification</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

	<?php
	}

add_shortcode('section_2','fusion_sections');



//trainer section //

/*
function crossfit_section_item($attr){
	
	extract(
		shortcode_atts(array(
		'title_section'=>'bvbcv',
		'title_image'=>'',
		'title_two'=>'vbcvb',
		'description_item'=>'xcvcxvcxvxc',
		),$attr)
	);

	?>

    <div class="site-section bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_2.jpg);'); background-attachment: fixed">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center text-white"><?php echo esc_html($title_section); ?></h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
			<?php 
			$section_2_image=wp_get_attachment_image_src($title_image,'full');
			if($section_2_image)
				{?>			
			 <img src="<?php echo esc_url($section_2_image[0]); ?>" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
			<?php } ?>

            <h2 class="h5 mb-4 text-white"><?php echo esc_html($title_two); ?></h2>
            <p class="text-white mb-5 lead"><?php echo esc_html($description_item); ?></p>
            <p><a href="#" class="btn btn-primary text-white">Make Me Your Trainer</a></p>
          </div>
        </div>
      </div>  
    </div>
    



<?php

}
	

add_shortcode('section_3_base','crossfit_section_item');
//trainer section //


function crossfit_section_excersize($attr){
	
	extract(
		shortcode_atts(array(
		'sec_grp_3'=>'hecvx',
		'title_excersize'=>'bvbcv',
		'icon_section'=>'',
		'title_three'=>'vbcvb',
		'description_item_sec'=>'xcvcxvcxvxc',
		),$attr)
	);

	?>
	    <div class="site-section">
	      <div class="container">
	        <div class="row mb-5">
	          <div class="col-md-12">
	            <h2 class="site-section-heading text-center"><?php echo esc_html($title_excersize); ?></h2>
	          </div>
	        </div>
	        <div class="row">

				<?php 

					$sec_grp_key = vc_param_group_parse_atts($sec_grp_3);

					foreach ($sec_grp_key as $sec_grp_value) {?>
		
		          <div class="col-md-4 text-center mb-4">
		            <div class="border p-4 text-with-icon">
		              <span class="<?php echo esc_attr($sec_grp_value['icon_section']); ?> icon display-4 mb-4 d-block text-primary"></span>
		              <h2 class="h5"><?php echo esc_html($sec_grp_value['title_three']); ?></h2>
		              <p><?php echo esc_html($sec_grp_value['description_item_sec']); ?></p>
		              <p><a href="#">Learn More</a></p>

		            </div>
		          </div>

				<?php }

				 ?>

	        </div>
	      </div>
	    </div>

<?php

}
	

add_shortcode('section_4_base','crossfit_section_excersize');
*/