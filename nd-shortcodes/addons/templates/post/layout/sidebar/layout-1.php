<?php

//recover font family and color
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );

//submit form bg
$nd_options_customizer_forms_submit_bg = get_option( 'nd_options_customizer_forms_submit_bg', '#444' );

?>


<!--START  for post-->
<style type="text/css">

    /*sidebar*/
    .nd_options_sidebar .widget { margin-bottom: 40px; }
    .nd_options_sidebar .widget img, .nd_options_sidebar .widget select { max-width: 100%; }
    .nd_options_sidebar .widget h3 { margin-bottom: 20px; font-weight: bolder; }

    /*search*/
    .nd_options_sidebar .widget.widget_search input[type="text"] { width: 100%; }
    .nd_options_sidebar .widget.widget_search input[type="submit"] { margin-top: 20px; }

    /*list*/
    .nd_options_sidebar .widget ul { margin: 0px; padding: 0px; list-style: none; }
    .nd_options_sidebar .widget > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .nd_options_sidebar .widget > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .nd_options_sidebar .widget ul li { padding: 10px; }
    .nd_options_sidebar .widget ul.children { padding: 10px; }
    .nd_options_sidebar .widget ul.children:last-child { padding-bottom: 0px; }

    /*calendar*/
    .nd_options_sidebar .widget.widget_calendar table { text-align: center; background-color: #fff; width: 100%; border: 1px solid #f1f1f1; line-height: 20px; }
    .nd_options_sidebar .widget.widget_calendar table th { padding: 10px 5px; }
    .nd_options_sidebar .widget.widget_calendar table td { padding: 10px 5px; }
    .nd_options_sidebar .widget.widget_calendar table tbody td a { color: #fff; padding: 5px; border-radius: 3px; }
    .nd_options_sidebar .widget.widget_calendar table tfoot td a { color: #fff; background-color: #444444; padding: 5px; border-radius: 3px; font-size: 13px; }
    .nd_options_sidebar .widget.widget_calendar table tfoot td { padding-bottom: 20px; }
    .nd_options_sidebar .widget.widget_calendar table tfoot td#prev { text-align: right; }
    .nd_options_sidebar .widget.widget_calendar table tfoot td#next { text-align: left; }
    .nd_options_sidebar .widget.widget_calendar table caption { font-size: 20px; font-weight: bolder; background-color: #f9f9f9; padding: 20px; border: 1px solid #f1f1f1; border-bottom: 0px; }

    /*color calendar*/
    .nd_options_sidebar .widget.widget_calendar table thead { color: <?php echo esc_attr($nd_options_customizer_font_color_h);  ?>; }
    .nd_options_sidebar .widget.widget_calendar table tbody td a { background-color: <?php echo esc_attr($nd_options_customizer_forms_submit_bg); ?>; }
    .nd_options_sidebar .widget.widget_calendar table caption { color: <?php echo esc_attr($nd_options_customizer_font_color_h);  ?>; font-family: '<?php echo esc_attr($nd_options_font_family_h); ?>', sans-serif; }

    /*menu*/
    .nd_options_sidebar .widget div ul { margin: 0px; padding: 0px; list-style: none; }
    .nd_options_sidebar .widget div > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .nd_options_sidebar .widget div > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .nd_options_sidebar .widget div ul li { padding: 10px; }
    .nd_options_sidebar .widget div ul.sub-menu { padding: 10px; }
    .nd_options_sidebar .widget div ul.sub-menu:last-child { padding-bottom: 0px; }

    /*tag*/
    .nd_options_sidebar .widget.widget_tag_cloud a { padding: 5px 10px; border: 1px solid #f1f1f1; border-radius: 3px; display: inline-block; margin: 5px; margin-left: 0px; font-size: 13px !important; line-height: 20px; }

</style>
<!--END css for post-->