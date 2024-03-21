<?php get_header(); ?>

    <section id="article">

    <h1><?php the_archive_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2 id="articletitle">
                    <a id="title" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <figure>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("medium"); ?>
                    </a>
                </figure>

                <div id="texte">
                    <p><?php the_excerpt(); ?></p>
                </div>

                <p> Article publié le <?php the_time('j F Y') ?> par <?php the_author(); ?></p>

                <button>
                    <a href="<?php the_permalink(); ?>">Voir l'article</a>
                </button>   

            </article> 

        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>