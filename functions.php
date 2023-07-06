<?php 

function launcher_load_assets(){

    wp_enqueue_style( 'launcher-style', get_stylesheet_uri() );

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Open+Sans:400,700,800');
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css', '1.0', 'all');
    wp_enqueue_style( 'icomoon-css', get_template_directory_uri() . '/css/icomoon.css', '1.0', 'all');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', '1.0', 'all');
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css', '1.0', 'all');

    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), 1.0, true);
    wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script( 'countdown-js', get_template_directory_uri() . '/js/simplyCountdown.js', array('jquery'), 1.0, true);
    wp_enqueue_script( 'launcher-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), 1.0, true);
    wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array('jquery'), 1.0, true);

    $date = new DateTime(get_field('coming_soon_date'));
    $launcher_year =  $date->format('Y');
    $launcher_month = $date->format('m');
    $launcher_day = $date->format('d');

    wp_localize_script('launcher-main-js','datedata', array(

        "year" => $launcher_year,
        "month" => $launcher_month,
        "day" => $launcher_day

    ));
}

add_action('wp_enqueue_scripts', 'launcher_load_assets');

function launcher_support(){

    load_theme_textdomain('launcher', '');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'launcher_support');

function launcher_additional_css(){
    if(is_page()){
        $thumbnail_url = get_the_post_thumbnail_url(null, "large");
        ?>
        <style>
            .bg-image{
                background-image: url(<?php echo $thumbnail_url ?>);
            }
        </style>
    <?php }
}

add_action('wp_head', 'launcher_additional_css');