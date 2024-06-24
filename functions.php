<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// подключение и настройка меню через админку
// add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));


function theme_add_scripts()
{
    // подключаем файл baguetteBox.css
    // wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate.css
    // wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.min.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', '1.0.1');

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // подключаем js файл baguetteBox
    // wp_enqueue_script('baguetteBox', get_template_directory_uri() .
    //     '/js/baguettebox.js', false, null, 'footer');

    // подключаем js файл swiper-bundle.min.js
    // wp_enqueue_script('swiper', get_template_directory_uri() .
    //     '/js/swiper-bundle.min.js', false, null, 'footer');
}