<?php
    get_header();
?>
    <main>
        <?php
            while( have_posts() ) : the_post();

            the_title();

            the_content();

            endwhile;
        ?>
    </main>
    <footer>

    </footer>
</body>
</html>