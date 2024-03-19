<?php get_header(); ?>

<section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <figure>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("medium"); ?>
                    </a>
                </figure>

                <p><?php the_excerpt(); ?></p>

                <p> Article publié le <?php the_time('j F Y') ?> par <?php the_author(); ?></p>
                <!-- <p><?php the_content(); ?></p> -->
            </article>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>