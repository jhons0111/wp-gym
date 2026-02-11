<?php

/**
* List all class
*/

function gymfitness_list_all_class( int $quantity = -1) {
?>

    <ul class="listado-grid">

        <?php

            $args = array(
                'post_type' => 'gymfitness_clases',
                'posts_per_page' => $quantity
            );

            $classes = new WP_Query($args);

            while($classes->have_posts()){

                $classes->the_post();

        ?>

        <li class="card">
            <?php the_post_thumbnail(); ?>
            <div class="contenido">
                <a href="<?php the_permalink(); ?>">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>

                <?php 
                
                    $start_time = get_field('hora_inicio');
                    $end_time = get_field('hora_fin');
                ?>
                <p>
                    <?php the_field('dia_clase') ?> -  
                    <?php echo $start_time . ' a ' . $end_time ?>
                </p>
            </div>
        </li>

        <?php 
        
            }
            wp_reset_postdata();
        ?>
    </ul>

<?php }?>

<?php

/**
* List all testimonials
*/

function gymfitness_list_all_testimonials( int $quantity = -1) {
?>

    <ul class="list-testimonials swiper-wrapper">
        <?php
            $args = array(
                'post_type' => 'testimonials',
                'posts_per_page' => $quantity
            );
            $classes = new WP_Query($args);

            while($classes->have_posts()){

                $classes->the_post();
            ?>
                <li class="testimonial text-center swiper-slide">
                    <blockquote>
                        <?php the_content(); ?>
                    </blockquote>

                    <footer class="testimonial-footer">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <p>
                            <?php the_title(); ?>
                        </p>
                    </footer>
                </li>
        <?php 
            }
            wp_reset_postdata();
        ?>
    </ul>

<?php }?>
