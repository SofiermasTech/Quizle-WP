<?php

/**
 * Child theme of Reboot
 * https://wpshop.ru/themes/reboot
 *
 * @package Reboot
 */

/**
 * Enqueue child styles
 *
 * НЕ УДАЛЯЙТЕ ДАННЫЙ КОД
 */
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', 100);
function enqueue_child_theme_styles()
{
  wp_enqueue_style('reboot-style-child', get_stylesheet_uri(), array('reboot-style'));
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  wp_enqueue_style('style-quizle', get_stylesheet_directory_uri() . '/assets/css/style-quizle.min.css');



  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '', true);
  wp_enqueue_script('quizle-main', get_stylesheet_directory_uri() . '/assets/js/quizle-main.min.js', array(), '1.0.0', true);
}

/**
 * НИЖЕ ВЫ МОЖЕТЕ ДОБАВИТЬ ЛЮБОЙ СВОЙ КОД
 */

add_theme_support('post-thumbnails');


add_action('widgets_init', 'register_my_widgets');
function register_my_widgets()
{

  register_sidebar(array(
    'name'          => 'categories',
    'id'            => "categories-filter",
    'description'   => 'description',
    'class'         => '',
    'before_widget' => '<div class="categiries__filters-list-container" role="tablist">',
    'after_widget'  => "</div>",
    'before_title'  => '',
    'after_title'   => "",
    'before_sidebar' => '', // WP 5.6
    'after_sidebar'  => '', // WP 5.6
  ));
}


// отключение srcset у картинок
function wpschool_disable_srcset( $sources ) {
  return false;
}
add_filter( 'wp_calculate_image_srcset', 'wpschool_disable_srcset' );