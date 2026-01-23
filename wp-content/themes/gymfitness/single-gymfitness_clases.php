<?php
    get_header();
?>

    <main class="contenedor seccion has-sidebar">
        <section class="main-content">
            <?php
                get_template_part('template-parts/pagina');
            ?>
        </section>
        
        <?php
            get_sidebar();
        ?>
    </main>

<?php
    get_footer();
?>