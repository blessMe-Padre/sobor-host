<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// подключение и настройка меню через админку
// add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post', 'events', 'news'));


function theme_add_scripts()
{
    // подключаем файл baguetteBox.css
    wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate.css
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', '1.0.1');

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-latest.min.js', false, null, 'footer');

    // подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper', get_template_directory_uri() .
        '/js/swiper-bundle.min.js', false, null, 'footer');
    // подключаем js файл baguettebox.js
    wp_enqueue_script('baguettebox', get_template_directory_uri() .
        '/js/baguettebox.js', false, null, 'footer');

    // подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('wow', get_template_directory_uri() .
        '/js/wow.js', false, null, 'footer');

    wp_enqueue_script_module('main', get_template_directory_uri() . '/js/main.js', array(), '0.0.12');
}

function add_menu()
{
    register_nav_menu('main', 'главное меню сайта');
}

// Добавляет вкладку "События" для меню админки Wordpress"
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type(
        'events',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'labels' => array(
                'name' => 'События',
                'singular_name' => 'События',
                'menu_name' => 'События',
                'all_items' => 'Все события',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt'),
            'taxonomies' => array('category'),
        )
    );
}

// Добавляет вкладку "Новости" для меню админки Wordpress"
add_action('init', 'create_post_type2');
function create_post_type2()
{
    register_post_type(
        'news',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'labels' => array(
                'name' => 'Новости',
                'singular_name' => 'Новости',
                'menu_name' => 'Новости',
                'all_items' => 'Новости',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt'),
            'taxonomies' => array('category'),
        )
    );
}

add_action('admin_menu', 'remove_default_menus');

function remove_default_menus()
{
    remove_menu_page('index.php');                  // Консоль
    remove_menu_page('edit.php');                   // Записи
    remove_menu_page('upload.php');                 // Медиафайлы
    // remove_menu_page('edit.php?post_type=page');    // Страницы
    remove_menu_page('edit-comments.php');          // Комментарии
    remove_menu_page('themes.php');                 // Внешний вид
    remove_menu_page('plugins.php');                // Плагины
    remove_menu_page('users.php');                  // Пользователи
    remove_menu_page('tools.php');                  // Инструменты 
    remove_menu_page('options-general.php');        // Настройки
    remove_menu_page('bvi');        // плагин для слабовидящих
    remove_menu_page('wpcf7');   // Contact form 7
    // remove_menu_page('aiowpsec');   // wp security
    remove_menu_page('edit.php?post_type=acf-field-group');   // ACF Field Group
}