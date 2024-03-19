<?php get_header(); ?>

<section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2>
                        <?php the_title(); ?>
                </h2>

                <figure>
                        <?php the_post_thumbnail("medium"); ?>
                </figure>

                <p><?php the_content(); ?></p>

                <p> Article publié le <?php the_time('j F Y') ?> par <?php the_author(); ?></p>
            
            </article>

        <?php endwhile; endif; ?>
        
    </section>

<?php get_footer(); ?>