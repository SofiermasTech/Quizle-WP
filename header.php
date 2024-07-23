<?php
/**
  * @package reboot
 */

global $wpshop_core;
global $class_advertising;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizle</title>

  <?php wp_head(); ?>
  <?php $wpshop_core->the_option( 'code_head' ) ?>
</head>

<body>

<?php
    if ( $wpshop_core->is_show_element( 'header' ) ) {
        get_template_part( 'template-parts/header/header' );
    } ?>