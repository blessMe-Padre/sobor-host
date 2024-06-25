<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Храм Покрова | <?php the_title(); ?></title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body class="lock-before">
    <div class="h-screen grid grid-rows-[auto_1fr_auto]">
        <header class="z-20 w-fullbg-white">
            <div class="container flex gap-1 xs:gap-5 items-center justify-between py-5">
                <button class="btn-close-menu md:hidden">
                    <svg viewBox="0 0 64 48">
                        <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                        <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                        <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                    </svg>
                </button>
                <div class="max-w-[150px] md:max-w-full hidden xs:block">
                    <p class="text-xs md:text-lg font-bold">г. Владивосток, Океанский проспект, 44</p>
                    <p class="text-xs md:text-lg">Пн-Сб: 08:00 - 19:00</p>
                </div>
                <a href="/">
                    <img class="header__logo" loading="lazy"
                    src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" width="367" height="105"
                    alt="лого">
                </a>
                <div class="flex items-center justify-center gap-7">
                    <a class="text-xs md:text-lg font-bold link" href="tel:+74232402628">8 (423) 2-40-26-28</a>
                    <div class="hidden xs:flex items-center gap-3">
                        <a class="social-icon" href="http://t.me/pokrovadv/37" target="_blank"
                            rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/telegram.svg" width="22"
                                height="22" alt="телеграм">
                        </a>
                        <a class="social-icon" href="https://vk.com/pokrovadv" target="_blank"
                            rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/vk.svg" width="24"
                                height="24" alt="вконтакте">
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="header__nav">
                <?php wp_nav_menu([
                    'theme_location' => 'main',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
                </nav>
            </div>

            <!-- мобильное меню -->
            <div class="flex flex-col items-start justify-between overflow-hidden md:hidden">
                <div class="mobile-menu">
                <?php wp_nav_menu([
                    'theme_location' => 'main',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
                    <div>
                        <p class="text-lg font-bold">г. Владивосток, Океанский проспект, 44</p>
                        <p class="mb-5">Пн-Сб: 08:00 - 19:00</p>
                    </div>

                    <a class="text-lg font-bold link block mb-5" href="tel:+74232402628">8 (423) 2-40-26-28</a>
                    <div class="flex items-center gap-3">
                        <a class="social-icon" href="http://t.me/pokrovadv/37" target="_blank"
                            rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/telegram.svg" width="22"
                                height="22" alt="телеграм">
                        </a>
                        <a class="social-icon" href="https://vk.com/pokrovadv" target="_blank"
                            rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/vk.svg" width="24"
                                height="24" alt="вконтакте">
                        </a>
                    </div>
                </div>
            </div>
        </header>