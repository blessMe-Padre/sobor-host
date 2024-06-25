<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<main>

    <h1 class="visually-hidden">Храм Покрова Пресвятой Богородицы г.Владивосток</h1>
    <canvas id="canvas" class="noise"></canvas>

    <section class="hero">
        <div class="container">
            <div class="w-0 min-w-full relative">
                <div class="hero-swiper swiper">

                    <ul class="swiper-wrapper justify-items-stretch">
                    <?php
                    $my_posts = get_posts(
                        array(
                            'numberposts' => -1,
                            'category' => '3',
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'post_type' => 'events',
                            'suppress_filters' => true,
                        )
                    );

                    foreach ($my_posts as $post) {
                        setup_postdata($post);
                        ?>

                        <li class="swiper-slide hero__item">
                        <?php the_post_thumbnail(''); ?>
                            <div class="hero__block">
                                <p class="text-light-gray mb-3"><?php echo date_i18n('j F Y года', strtotime(get_the_date())); ?></p>
                                <h2 class="mb-5 wow fadeInUp"><?php the_title(); ?></h2>
                                <div class="mb-6 hero__text wow fadeInDown" data-wow-delay="1s"><?php the_excerpt(); ?></div>
                                <a class="text-orange underline" href="<?php the_permalink(); ?>">Читать</a>
                            </div>
                        </li>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                        
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <div class="decor-section bg-light-brown"></div>


    <div class=" animate-section-2 relative bg-light-brown overflow-hidden">
        <div class="container overflow-hidden">
            <section class="news bg-light-brown overflow-hidden">
                <div class="news__header">
                    <h2 class="title">Новости и публикации</h2>
                    <div class="hidden sm:flex items-center justify-center">
                        <div class="button-wrapper relative">
                            <div class="swiper-button-prev news-button-prev">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-left.svg"
                                    width="15" height="10" alt="">
                            </div>
                            <div class="swiper-button-next news-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right.svg"
                                    width="15" height="10" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-0 min-w-full relative">
                    <div class="news-swiper swiper">
                        <ul class="swiper-wrapper justify-items-stretch news__list">
                            <li class="swiper-slide news__item wow fadeIn" data-wow-delay="1s">
                                <div>
                                    <div class="image-wrapper mb-5">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/image-1.jpg"
                                            height="460" width="350" alt="image">
                                    </div>
                                    <p class="mb-5 text-light-gray">3 марта 2024 года</p>
                                    <h3>Богослужение в день памяти священномученика Павла Лазарева</h3>
                                    <p class="news__description">2 июня, в Неделю 5-ю по Пасхе, о самаряныне, день
                                        памяти священномученика Павла Лазарева...</p>
                                </div>
                                <a class="text-orange underline" href="#">Читать</a>
                            </li>

                            <li class="swiper-slide news__item wow fadeIn" data-wow-delay="1.2s">
                                <div>
                                    <div class="image-wrapper mb-5">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/image-2.jpg"
                                            height="460" width="350" alt="image">
                                    </div>
                                    <p class="mb-5 text-light-gray">3 марта 2024 года</p>
                                    <h3>Богослужение в день памяти священномученика Павла Лазарева</h3>
                                    <p class="news__description">2 июня, в Неделю 5-ю по Пасхе, о самаряныне, день
                                        памяти священномученика Павла Лазарева...</p>
                                </div>
                                <a class="text-orange underline" href="#">Читать</a>
                            </li>

                            <li class="swiper-slide news__item wow fadeIn" data-wow-delay="1.4s">
                                <div>
                                    <div class="image-wrapper mb-5">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/image-3.jpg"
                                            height="460" width="350" alt="image">
                                    </div>
                                    <p class="mb-5 text-light-gray">3 марта 2024 года</p>
                                    <h3>Богослужение в день памяти священномученика Павла Лазарева</h3>
                                    <p class="news__description">2 июня, в Неделю 5-ю по Пасхе, о самаряныне, день
                                        памяти священномученика Павла Лазарева...</p>
                                </div>
                                <a class="text-orange underline" href="#">Читать</a>
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center justify-center sm:hidden">
                        <div class="button-wrapper relative">
                            <div class="swiper-button-prev news-button-prev">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-left.svg"
                                    width="15" height="10" alt="">
                            </div>
                            <div class="swiper-button-next news-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right.svg"
                                    width="15" height="10" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animate-element-2"></div>
                <img class="animate-element-image-2"
                    src="<?php echo get_template_directory_uri() ?>/src/img/decor/pray.png" width="736" height="775"
                    alt="">
            </section>

            <section class="calendar bg-light-brown overflow-hidden" data-scroll>
                <h2 class="title mb-7 sm:mb-12">ПРАВОСЛАВНЫЙ ЦЕРКОВНЫЙ КАЛЕНДАРЬ</h2>
                <div class="calendar__wrapper">
                    <div class="calendar__item">
                        <div class="calendar-wrapper relative z-50">
                            <div class="flex items-center justify-between gap-5 mb-5 calendar-button-wrapper">
                                <button id="btnPrev" type="button">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-left.svg"
                                        alt="">
                                </button>
                                <button id="btnNext" type="button">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right.svg"
                                        alt="">
                                </button>
                            </div>
                            <div id="divCal"></div>
                        </div>
                        <div class="qoute-block">
                            <p class="text-xl uppercase font-bold sm:mb-4 md:mb-7">Цитата дня</p>
                            <p class="sm:text-sm md:text-lg sm:mb-4 md:mb-7 quote"></p>
                            <p class="quote-name">свт. Тихон Задонский</p>
                        </div>
                    </div>

                    <div class="w-0 min-w-full relative">
                        <div class="icon-swiper swiper">
                            <ul class="swiper-wrapper justify-items-stretch holiday-image-list"></ul>
                        </div>
                        <p class="calendar-today">00 июня 2024</p>
                        <h3 class="holiday-shadow"></h3>
                        <ul class="holiday-titles"></ul>
                        <ul class="holiday-content"></ul>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <section class="time bg-light-brown" data-scroll>
        <div class="container">
            <div class="time__wrapper">
                <div class="overflow-hidden">
                    <h2 class="title">Расписание богослужений</h2>
                    <div class="animate-section">
                        <div class="animate-element"></div>
                    </div>
                    <img class="animate-element-image"
                        src="<?php echo get_template_directory_uri() ?>/src/img/decor/two-heand.png" width="1200"
                        height="600" alt="">
                </div>
                <div class="time__block">
                    <div class="time__header">
                        <h3>Покровский храм г. Владивосток</h3>
                        <img class="time__logo" src="<?php echo get_template_directory_uri() ?>/src/img/image-4.png"
                            width="135" height="135" alt="храм">

                        <a class="social-icon relative z-50" href="https://t.me/pokrovadv" target="_blank"
                            rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/telegram.svg" width="22"
                                height="22" alt="телеграм">
                        </a>
                    </div>

                    <div class="time__image">
                        <script async src="https://telegram.org/js/telegram-widget.js?22"
                            data-telegram-post="pokrovadv/7184" data-width="100%"></script>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="decor-section-2 bg-light-brown"></div>

</main>


<?php get_footer(); ?>