<?php
/*
Template Name: Шаблон страницы "События" 
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px"><?php the_title(); ?></h1>

        <ul class="events__list">
                <?php
                $args = array(
                    'cat' => 3, // ID рубрики
                    'posts_per_page' => 6, // Количество постов на странице
                    'post_type' => 'events',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                                        <li>
                                            <div class="image-wrapper  mb-3">
                                                <?php the_post_thumbnail(''); ?>
                                            </div>
                                            <p class="text-light-gray mb-3"><?php echo date_i18n('j F Y года', strtotime(get_the_date())); ?></p>
                                            <h2 class="mb-5 wow fadeInUp"><?php the_title(); ?></h2>
                                            <div class="mb-6 hero__text wow fadeInDown" data-wow-delay="1s"><?php the_excerpt(); ?></div>
                                            <a class="text-orange underline" href="<?php the_permalink(); ?>">Читать</a>
                                        </li>
                            <?php endwhile;
                else:
                    echo 'Событий не найдено';
                endif;
                wp_reset_postdata();
                ?>
            </ul>

            <?php
            // Пагинация
            $big = 999999999; // Уникальное число для замены
            ?>
            <div class="pagination-wrapper relative z-19">
                <?php echo paginate_links(
                    array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                        'prev_text' => __('&#8592;'),
                        'next_text' => __('&#8594;'),
                        'end_size' => 1,
                        'mid_size' => 2,
                    )
                );
                ?>
            </div>
    </div>
</main>

<?php get_footer(); ?>