<?php
    /*
    * Template Name: Pagina de galeria
    */
    get_header();
?>
    <main class="contenedor seccion contenedor-centrado">
        <?php

            while( have_posts() ) : the_post();
                
                the_title('<h1 class="text-center text-primary">', '</h1>');
                
                $gallery = get_post_gallery( get_the_ID(), false);
                $gallery_images_ID = explode(",", $gallery['ids']);
                ?>

                <ul class="gallery-images">
                    <?php
                    foreach($gallery_images_ID as $id){
                        $large_image = wp_get_attachment_image_src($id, 'large')[0];
                        $full_image = wp_get_attachment_image_src($id, 'full')[0];
                        ?>

                        <li>
                            <a href="<?php echo $full_image; ?>">
                                <img src="<?php echo $large_image; ?>" alt="galler image">
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            <?php endwhile; ?>
    </main>

<?php
    get_footer();
?>
