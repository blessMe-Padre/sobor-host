<?php
/*
Template Name: Шаблон "Новость"
Template Post Type: news 
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px"><?php the_title(); ?></h1>

        <div class="image-wrapper mb-5 relative z-19 main-img">
            <?php the_post_thumbnail(''); ?>
        </div>

        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>