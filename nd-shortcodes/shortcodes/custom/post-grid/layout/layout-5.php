<?php


wp_enqueue_script('masonry');

$nd_options_script = '
jQuery(document).ready(function() {

      //START masonry
      jQuery(function ($) {
        
        //Masonry
		var $nd_options_masonry_content = $(".nd_options_masonry_content").imagesLoaded( function() {
		  // init Masonry after all images have loaded
		  $nd_options_masonry_content.masonry({
		    itemSelector: ".nd_options_masonry_item"
		  });
		});


      });
      //END masonry

    });

';
wp_add_inline_script('nd_options_post_grid_plugin',$nd_options_script);


$str .= '';


$str .= '<!--START MASONRY--><div class="nd_options_section nd_options_masonry_content '.$nd_options_class.' ">';

while ( $the_query->have_posts() ) : $the_query->the_post();

	//basic info
	$nd_options_id = get_the_ID(); 
	$nd_options_title = get_the_title();
	$nd_options_excerpt = get_the_excerpt();
	$nd_options_permalink = get_permalink( $nd_options_id );

	//metabox color
	$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
	if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }

	//categories
	$nd_options_post_categories = get_the_category($nd_options_id);
	foreach ( $nd_options_post_categories as $nd_options_post_category ) {
		$nd_options_post_categories_list = '';
	    $nd_options_post_categories_list .= '<h5 style="color: '.$nd_options_meta_box_page_color.';" class="nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_3"><strong>'.$nd_options_post_category->name.'</strong></h5>';
	}

	//image for standard post
	$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
	$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
	if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
	  $nd_options_output_image = '<img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'">';
	}


	//calculate text pecentage
	$nd_options_text_width = 100 - $nd_options_image_width;


	//image section
	$nd_options_post_grid_5_image = '

		<!--START IMAGE-->
	    <div class="nd_options_width_'.$nd_options_image_width.'_percentage nd_options_width_100_percentage_responsive nd_options_float_left">
	        
	        <div class="nd_options_section nd_options_box_sizing_border_box">

	            <div class="nd_options_section nd_options_position_relative">
	                    
	                '.$nd_options_output_image.'

	                <div class="nd_options_bg_greydark_alpha_gradient nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_box_sizing_border_box">
	                </div>

	            </div>

	        </div>

	    </div>
	    <!--END IMAGE-->';


	//text section
	$nd_options_post_grid_5_text = '

		<!--START CONTENT-->
	    <div class="nd_options_width_'.$nd_options_text_width.'_percentage nd_options_width_100_percentage_responsive nd_options_float_left nd_options_box_sizing_border_box nd_options_padding_50 nd_options_padding_20_responsive">
	        
	    	'.$nd_options_post_categories_list.'
	        <div class="nd_options_section nd_options_height_10"></div>
	        <h1>'.$nd_options_title.'</h1>
	        <div class="nd_options_section nd_options_height_20"></div>
	        <h4 class="nd_options_color_grey nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_second_font nd_options_font_weight_lighter">'.get_the_time('j').' '.get_the_time('F').'</h4>
	        <div class="nd_options_section nd_options_height_20"></div>
	        <p>'.$nd_options_excerpt.'</p>
	        <div class="nd_options_section nd_options_height_20"></div>
	        <a style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_display_inline_block nd_options_line_height_16 nd_options_font_size_13 nd_options_text_align_center nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_8_12 nd_options_border_radius_20 " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

	    </div>
	    <!--END CONTENT-->';


	//string result
	if ( $nd_options_image_align == 'left' ){

		$str .= '

			<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
			    
			 	'.$nd_options_post_grid_5_image.'   
			 	'.$nd_options_post_grid_5_text.'

			</div>

		';

	}else{


		$str .= '

			<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
			    
			    '.$nd_options_post_grid_5_text.'
			 	'.$nd_options_post_grid_5_image.'   
			 	
			</div>

		';

	}
	


endwhile;


$str .= '</div><!--CLOSE MASONRY-->';
