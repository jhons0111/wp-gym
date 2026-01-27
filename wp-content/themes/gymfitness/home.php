<?php
    /*
    * Template Name: Contenido listado de clases
    */
    get_header();
?>

    <main class="contenedor seccion">
        <ul class="listado-grid">
            <?php
                while( have_posts() ){ 
                    
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>