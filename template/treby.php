<?php
/*
Template Name: Требы
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px">В разработке...</h1>
        <div class="page-content">
            <?php the_content(); ?>
            <img src="<?php echo get_template_directory_uri() ?>/src/img/homer.gif"
            alt="">

           
        </div>
    </div>
</main>

<?php get_footer(); ?>