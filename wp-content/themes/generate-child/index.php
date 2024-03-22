<?php get_header(); ?>

    <div <?php generate_do_attr('content'); ?>>
        <main <?php generate_do_attr('main'); ?>>

        <?php dynamic_sidebar('widget-homepage-1'); ?>

    <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>

    <h2>
        <a href="<?php the_permalink(); ?>">    
            <?php the_title(); ?>
        </a>
    </h2>

       
    <?php endwhile; endif; ?>

        </main>
    </div>

<?php get_footer(); ?>