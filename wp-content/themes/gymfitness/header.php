<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <a href="<?php echo site_url('/'); ?>">
                <div class="logo">
                    <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg " alt="">
                </div>
            </a>
            <?php 
                $args = [
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal nav'
                ];

                wp_nav_menu($args);
            ?>
        </div>
        <?php if(is_front_page()) : ?>
            <div class="tag-line text-center">
                <h1 class="ml2">
                    <?php the_field('hero_title'); ?>
                </h1>
                <p>
                    <?php the_field('hero_text') ?>
                </p>
            </div>
        <?php endif; ?>
    </header>