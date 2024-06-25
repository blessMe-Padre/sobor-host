<?php
/*
Template Name: Шаблон страниц
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px"><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
           
        </div>
    </div>
</main>

<?php get_footer(); ?>