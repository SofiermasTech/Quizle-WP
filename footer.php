<?php
/**
 * @package reboot
 */

global $wpshop_core;
global $class_advertising;

$is_show_arrow     = $wpshop_core->get_option( 'arrow_display' );
$is_show_arrow_mob = ( $wpshop_core->get_option( 'arrow_mob_display' ) ) ? ' data-mob="on"' : '';

?>

<?php
if ( $wpshop_core->is_show_element( 'footer' ) ) {
    get_template_part( 'template-parts/footer/footer' );
} ?>

<?php if ( $is_show_arrow ) { ?>
    <button type="button" class="scrolltop js-scrolltop"<?php echo $is_show_arrow_mob ?>></button>
<?php } ?>

</div><!-- #page -->


<?php wp_footer(); ?>


</body>

</html>