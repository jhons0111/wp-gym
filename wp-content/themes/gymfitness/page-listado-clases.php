<?php
    /*
    * Template Name: Contenido listado de clases
    */
    get_header();
?>
    <main class="contenedor seccion">
        <ul class="listado-grid">

            <?php

                $args = array(
                    'post_type' => 'gymfitness_clases'
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
    </main>
    
    <?php
        get_footer();
    ?>