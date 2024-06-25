<?php
/*
Template Name: Шаблон библиотека
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px"><?php the_title(); ?></h1>
        <div class="lib-content">
            <div class="lib-content__wrapper relative z-19">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/1111.jpg" alt="">
                <div class="lib-content__description">
                    <h2>Новый Завет и Ветхий Завет</h2>
                    <a class="link underline" href="<?php echo get_template_directory_uri() ?>/bibliya.fb2" download> Скачать fb2</a>
                </div>
            </div>
           
        </div>
    </div>
</main>

<?php get_footer(); ?>