<?php
/*
Template Name: Шаблон воскресная школа
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px"><?php the_title(); ?></h1>
            <?php the_content(); ?>
           <div class="gallery-wrapper relative z-19">
                <?php
                $photos = get_field('фотография');
                if ($photos) {
                    foreach ($photos as $photo) {
                        echo '<div class="image-wrapper">';
                        echo '<a href="' . esc_url($photo['url']) . '">';
                        echo '<img src="' . esc_url($photo['url']) . '" alt="">';
                        echo '</a>';
                        echo '</div>';
                    }
                } else {
                    echo 'No photos found.';
                }
                ?>
                    </div>
</main>
                
<?php get_footer(); ?>
              
              