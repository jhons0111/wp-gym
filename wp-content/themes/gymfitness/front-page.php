<?php
    get_header();
?>

    <main class="front-page">
        <section class="welcome contenedor seccion text-center">
            <h2 class="text-primary"><?php echo esc_html(the_field('encabezado_bienvenida')); ?></h2>
            <p><?php echo esc_html(the_field('texto_bienvenida')); ?></p>
        </section>
        
        <section class="areas">
            <div class="area">
                <?php
                    $area1 = get_field('area_1');
                    $imagen1 = $area1['imagen']['sizes']['medium_large'];
                    $text1 = $area1['text'];
                ?>

                <img src="<?php echo esc_attr( $imagen1 ); ?>" alt="<?php echo esc_attr( $text1 ); ?>">
                <p><?php echo esc_html( $text1 ); ?></p>
            </div>
            <div class="area">
                <?php
                    $area2 = get_field('area_2');
                    $imagen2 = $area2['imagen']['sizes']['medium_large'];
                    $text2 = $area2['text'];
                ?>

                <img src="<?php echo esc_attr( $imagen2 ); ?>" alt="<?php echo esc_attr( $text2 ); ?>">
                <p><?php echo esc_html( $text2 ); ?></p>
            </div>
            <div class="area">
                <?php
                    $area3 = get_field('area_3');
                    $imagen3 = $area3['imagen']['sizes']['medium_large'];
                    $text3 = $area3['text'];
                ?>

                <img src="<?php echo esc_attr( $imagen3 ); ?>" alt="<?php echo esc_attr( $text3 ); ?>">
                <p><?php echo esc_html( $text3 ); ?></p>
            </div>
            <div class="area">
                <?php
                    $area4 = get_field('area_4');
                    $imagen4 = $area4['imagen']['sizes']['medium_large'];
                    $text4 = $area4['text'];
                ?>

                <img src="<?php echo esc_attr( $imagen4 ); ?>" alt="<?php echo esc_attr( $text4 ); ?>">
                <p><?php echo esc_html( $text4 ); ?></p>
            </div>
        </section>

        <section class="classes">

            <h2 class="text-center text-primary">Nuestras clases</h2>
            <?php
                gymfitness_list_all_class(3);
            ?>
        </section>
        <section class="testimonials">
            <h2 class="text-center text-primary">Testimoniales</h2>

            <div class="container-testimonials swiper">
                <?php
                    gymfitness_list_all_testimonials();
                ?>
            </div>
        </section>
        <section class="posts">
            <h2 class="text-center text-primary">Blog</h2>

            <ul class="listado-grid">
                <?php
                
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4
                    );
                    $blog = new WP_Query($args);

                    while($blog->have_posts()){
                        $blog->the_post();

                        get_template_part('template-parts/blog');
                    }
                    wp_reset_postdata();
                ?>
            </ul>
        </section>
    </main>

<?php
    get_footer();
?>