<?php
    /*
    * Template Name: Contenido listado de clases
    */
    get_header();
?>
    <main class="contenedor seccion">

        <?php
            get_template_part('template-parts/pagina');
        
            gymfitness_list_all_class();
        ?>

    </main>
    
<?php
    get_footer();
?>