<?php
/*
Template Name: Racoon Gang
*/  
get_header();

$arguments = array(
    'post_type' => 'racoon',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query = new WP_Query($arguments);
?>

<section>
    <h2>Racoon Gang</h2>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post() ?>

        <h3><?php the_title(); ?></h3>

    <?php endwhile; endif; ?>




<?php
get_footer();
?>