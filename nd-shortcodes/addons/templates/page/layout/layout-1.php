<?php   


//get header metabox
$nd_options_meta_box_page_header_img = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img', true );
$nd_options_meta_box_page_header_img_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img_title', true );
$nd_options_meta_box_page_header_img_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img_position', true );



if ( $nd_options_meta_box_page_header_img != '' ) { ?>  


    <div class="nd_options_section nd_options_background_size_cover <?php echo esc_attr($nd_options_meta_box_page_header_img_position); ?>" style="background-image:url(<?php echo esc_url($nd_options_meta_box_page_header_img); ?>);">

        <div class="nd_options_section nd_options_bg_greydark_alpha_gradient_2">

            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix">


                <div class="nd_options_section nd_options_height_200"></div>

                <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box">

                    <strong class="nd_options_color_white nd_options_font_size_60 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font"><?php echo esc_html($nd_options_meta_box_page_header_img_title); ?></strong>
                    <div class="nd_options_section nd_options_height_20"></div>

                </div>

            </div>
            <!--end container-->

        </div>

    </div>


    <?php do_action('nd_options_end_header_img_page_hook'); ?>


<?php } ?>



<!--page margin-->
<?php 

    if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_page_margin', true ) != 1 ) { 

        $nd_options_output_margin = '<div class="nd_options_section nd_options_height_50"></div>'; 


        $nd_options_allowed_html = [
            'div' => [  
                'class' => [],
            ],
        ];

        echo wp_kses( $nd_options_output_margin, $nd_options_allowed_html );



    } 

?>

<!--start nd_options_container-->
<div class="nd_options_container nd_options_padding_0_15 nd_options_box_sizing_border_box nd_options_clearfix">

    <?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            
            <!--post-->
            <div style="float:left; width:100%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!--automatic title-->
                <?php 

                    if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_page_title', true ) != 1 ) { 

                        $nd_options_output_title = '<h1 class=""><strong>'.get_the_title().'</strong></h1><div class="nd_options_section nd_options_height_20"></div>'; 

                        $nd_options_allowed_html = [
                            'h1' => [  
                                'class' => [],
                            ],
                            'strong' => [],
                            'div' => [  
                                'class' => [],
                            ],
                        ];

                        echo wp_kses( $nd_options_output_title, $nd_options_allowed_html );

                    } 

                ?>
                
                <!--start content-->
                <?php the_content(); ?>
                <!--end content-->

            </div>
            <!--post-->

        <?php endwhile; ?>
    <?php endif; ?>

</div>
<!--end container-->

<!--page margin-->
<?php 

    if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_page_margin', true ) != 1 ) { 

        $nd_options_output_margin = '<div class="nd_options_section nd_options_height_50"></div>'; 

        $nd_options_allowed_html = [
            'div' => [  
                'class' => [],
            ],
        ];

        echo wp_kses( $nd_options_output_margin, $nd_options_allowed_html );

    }

    