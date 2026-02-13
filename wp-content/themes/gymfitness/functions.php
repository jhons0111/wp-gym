<?php

// Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';


function gymfitness_menus(){

    register_nav_menus([
        'menu-principal' => __('Menu principal', 'gymfitness'),
        'menu-secundario' => __('Menu secundario', 'gymfitness'),
    ]);

}

add_action('init', 'gymfitness_menus');


function gymfitness_scripts_styles(){

    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Staatliches&display=swap', array(), null);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css', array(), '12.1.0');

    // JS files
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), '12.1.0');
    wp_enqueue_script('anime-js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), null);
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/js/scripts.js', array('swiper-js', 'anime-js'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

function gymfitness_google_fonts_preconnect() {
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php
}
add_action('wp_head', 'gymfitness_google_fonts_preconnect', 1);

function gymfitness_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup', 1);

function gymfitness_widgets() {

    register_sidebar( array(
        'name'          => 'Sidebar 1',
        'id'            => 'sidebar_1',
        'description'   => 'Sidebar principal del tema GymFitness',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center text-primary">',
        'after_title'   => '</h3>',
    ));
}

add_action( 'widgets_init', 'gymfitness_widgets' );

//Create shortcode

function gymfitness_location_shortcode(){
?>

<h2 class="text-center text-primary">Formulario de contacto</h2>
<?php

 echo do_shortcode('[contact-form-7 id="85006b3" title="Contact form 1"]');

}

add_shortcode('gymfitness_location', 'gymfitness_location_shortcode');

// hero styles
function gymfitness_hero_img() {

    $front_id = get_option('page_on_front');
    $id_image = get_field('hero_image', $front_id);
    $image = wp_get_attachment_image_src($id_image, 'full')[0];

    // var_dump($image);
    // cretaes css
    wp_register_style('custom-styles', false);
    wp_enqueue_style('custom-styles');

    $featured_image_css = "
        body.home .header{
            background-image: linear-gradient( rgb(0 0 0 / .75), rgb(0 0 0 / .75)), url($image);
        }
    ";

    // inject css
    wp_add_inline_style('custom-styles', $featured_image_css);
}

add_action('init', 'gymfitness_hero_img');