<?php get_header(); ?>

    <section class="posts-page">
        <h1><?php _e("Interns"); ?></h1>

        <div class="posts-container">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'content', 'intern' );
                endwhile;
            else :
                get_template_part( 'content', 'none' );
            endif;
            ?>
        </div>
    </section>

<?php get_footer(); ?>